# lolzteam-php

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![CI](https://github.com/kyo-lzt/lolzteam-php/actions/workflows/ci.yml/badge.svg)](https://github.com/kyo-lzt/lolzteam-php/actions)

PHP SDK для [Lolzteam](https://lolz.live) Forum и Market API. **266 эндпоинтов** (151 Forum + 115 Market), автоматически сгенерированные из OpenAPI спецификаций.

---

## Содержание / Table of Contents

- [Быстрый старт / Quick Start](#быстрый-старт--quick-start)
- [Опции клиента / Client Options](#опции-клиента--client-options)
- [Прокси / Proxy](#прокси--proxy)
- [Авто-retry / Auto-retry](#авто-retry--auto-retry)
- [Обработка ошибок / Error Handling](#обработка-ошибок--error-handling)
- [Rate Limits](#rate-limits)
- [Forum API](#forum-api)
- [Market API](#market-api)
- [Генерация кода / Code Generation](#генерация-кода--code-generation)
- [Сборка и тесты / Build & Test](#сборка-и-тесты--build--test)
- [Структура проекта / Project Structure](#структура-проекта--project-structure)
- [Лицензия / License](#лицензия--license)

---

## Быстрый старт / Quick Start

Требуется **PHP 8.1+** и Composer.

```bash
git clone https://github.com/kyo-lzt/lolzteam-php.git
cd lolzteam-php
composer install
```

Минимальный пример:

```php
use Lolzteam\Generated\Forum\ForumClient;
use Lolzteam\Generated\Market\MarketClient;

// Быстрый старт — достаточно передать токен
$forum = new ForumClient('your_token');
$market = new MarketClient('your_token');

// Forum: получить список тем
$threads = $forum->threads->getList();

// Market: получить все категории
$items = $market->category->getList();
```

---

## Опции клиента / Client Options

Все настройки передаются через `ClientConfig`:

| Параметр | Тип | По умолчанию | Описание |
|----------|-----|-------------|----------|
| `token` | `string` | *обязательный* | API токен доступа |
| `proxy` | `?ProxyConfig` | `null` | Прокси (http/https/socks5) |
| `retry` | `?RetryConfig` | 3 попытки, 1s base, 30s max | Настройки повторов |
| `rateLimit` | `?RateLimitConfig` | `null` (дефолты клиента) | Лимит запросов |
| `searchRateLimit` | `?RateLimitConfig` | `null` (дефолты клиента) | Лимит поисковых запросов |
| `timeout` | `int` | `30` | Таймаут запроса в секундах |
| `onRetry` | `?Closure` | `null` | Колбэк при повторе |

```php
use Lolzteam\Runtime\ClientConfig;
use Lolzteam\Runtime\ProxyConfig;
use Lolzteam\Runtime\RateLimitConfig;
use Lolzteam\Runtime\RetryConfig;
use Lolzteam\Runtime\RetryInfo;

$forum = new ForumClient(new ClientConfig(
    token: 'your_token',
    proxy: new ProxyConfig('http://user:pass@127.0.0.1:8080'),
    retry: new RetryConfig(
        maxRetries: 5,
        baseDelayMs: 1000,
        maxDelayMs: 30000,
    ),
    rateLimit: new RateLimitConfig(requestsPerMinute: 300),
    searchRateLimit: new RateLimitConfig(requestsPerMinute: 20),
    onRetry: function (RetryInfo $info) {
        echo "Retry #{$info->attempt}\n";
    },
    timeout: 60,
));
```

---

## Прокси / Proxy

Поддерживаемые схемы: `http`, `https`, `socks5`.

```php
use Lolzteam\Runtime\ProxyConfig;

// HTTP прокси
$client = new ForumClient(new ClientConfig(token: '...', proxy: new ProxyConfig('http://127.0.0.1:8080')));

// Прокси с авторизацией
$client = new ForumClient(new ClientConfig(token: '...', proxy: new ProxyConfig('http://user:pass@127.0.0.1:8080')));

// SOCKS5 прокси
$client = new ForumClient(new ClientConfig(token: '...', proxy: new ProxyConfig('socks5://127.0.0.1:1080')));
```

---

## Авто-retry / Auto-retry

Неудачные запросы повторяются автоматически для транзиентных ошибок. Задержка — экспоненциальный backoff с джиттером. Заголовок `Retry-After` на 429 учитывается.

| Статус | Повтор | Поведение |
|--------|--------|-----------|
| 429 | Да | Использует `Retry-After` если есть |
| 502, 503, 504 | Да | Экспоненциальный backoff с джиттером |
| Сетевые ошибки | Да | Таймаут и ошибки соединения |
| 401, 403 | Нет | Бросается сразу |
| 404 | Нет | Бросается сразу |

Формула задержки: `min(baseDelayMs * 2^attempt + random(0, baseDelayMs), maxDelayMs)`

```php
// Отключить retry
$client = new ForumClient(new ClientConfig(token: '...', retry: null));

// Колбэк onRetry
$client = new ForumClient(new ClientConfig(
    token: '...',
    onRetry: function (RetryInfo $info) {
        echo "Retry #{$info->attempt}\n";
    },
));
```

---

## Обработка ошибок / Error Handling

Все исключения наследуют `LolzteamException`:

```
LolzteamException
├── HttpException
│   ├── RateLimitException    (429)
│   ├── AuthException         (401, 403)
│   ├── NotFoundException     (404)
│   └── ServerException       (500, 502, 503)
├── NetworkException
├── ConfigException
└── RetryExhaustedException
```

```php
use Lolzteam\Runtime\Errors\AuthException;
use Lolzteam\Runtime\Errors\RateLimitException;
use Lolzteam\Runtime\Errors\LolzteamException;

try {
    $threads = $forum->threads->getList();
} catch (AuthException $e) {
    // Невалидный или истёкший токен
} catch (RateLimitException $e) {
    // Превышен лимит запросов
    $e->retryAfter; // секунды до повтора
} catch (LolzteamException $e) {
    // Любая другая ошибка API
    $e->statusCode;
    $e->body;
}
```

---

## Rate Limits

Встроенный rate limiter использует алгоритм token bucket. Когда bucket пуст, текущий поток блокируется до пополнения — запросы не отбрасываются.

| Клиент | Лимит по умолчанию |
|--------|--------------------|
| Forum  | 300 req/min |
| Market | 120 req/min |
| Market (search) | 20 req/min |

```php
use Lolzteam\Runtime\RateLimitConfig;

$client = new MarketClient(new ClientConfig(
    token: '...',
    rateLimit: new RateLimitConfig(requestsPerMinute: 120),
    searchRateLimit: new RateLimitConfig(requestsPerMinute: 30),
));
```

---

## Forum API

### OAuth

```php
// Получить токен доступа (POST /oauth/token)
$token = $forum->oAuth->token(new OAuthTokenClientCredentials(clientId: 'id', clientSecret: 'secret', scope: []));
```

### Ассеты / Assets

```php
// Получить CSS ассеты (GET /assets/css)
$css = $forum->assets->css();
```

### Категории / Categories

```php
// Список категорий (GET /categories)
$categories = $forum->categories->getList();

// Получить категорию (GET /categories/{category_id})
$category = $forum->categories->get(category_id: 1);
```

### Форумы / Forums

```php
// Список форумов (GET /forums)
$forums = $forum->forums->getList();

// Форумы с группировкой (GET /forums/grouped)
$grouped = $forum->forums->grouped();

// Получить форум (GET /forums/{forum_id})
$f = $forum->forums->get(forum_id: 1);

// Подписчики форума (GET /forums/{forum_id}/followers)
$followers = $forum->forums->followers(forum_id: 1);

// Подписаться на форум (POST /forums/{forum_id}/followers)
$follow = $forum->forums->follow(forum_id: 1);

// Отписаться от форума (DELETE /forums/{forum_id}/followers)
$unfollow = $forum->forums->unfollow(forum_id: 1);

// Отслеживаемые форумы (GET /forums/followed)
$followed = $forum->forums->followed();

// Получить настройки ленты (GET /forums/feed-options)
$opts = $forum->forums->getFeedOptions();

// Изменить настройки ленты (PUT /forums/feed-options)
$edited = $forum->forums->editFeedOptions();
```

### Ссылки / Links

```php
// Список ссылок (GET /links)
$links = $forum->links->getList();

// Получить ссылку (GET /links/{link_id})
$link = $forum->links->get(link_id: 1);
```

### Страницы / Pages

```php
// Список страниц (GET /pages)
$pages = $forum->pages->getList();

// Получить страницу (GET /pages/{page_id})
$page = $forum->pages->get(page_id: 1);
```

### Навигация / Navigation

```php
// Список элементов навигации (GET /navigation)
$nav = $forum->navigation->getList();
```

### Темы / Threads

```php
// Список тем (GET /threads)
$threads = $forum->threads->getList();

// Создать тему (POST /threads)
$thread = $forum->threads->create(['forumId' => 876, 'postBody' => 'Текст', 'title' => 'Заголовок']);

// Создать конкурс (POST /threads/contests)
$contest = $forum->threads->createContest(['forumId' => 876, 'postBody' => 'Текст', 'title' => 'Конкурс']);

// Заявка на награду (POST /threads/claims)
$claim = $forum->threads->claim(['threadId' => 1]);

// Получить тему (GET /threads/{thread_id})
$thread = $forum->threads->get(thread_id: 1);

// Редактировать тему (PUT /threads/{thread_id})
$edited = $forum->threads->edit(thread_id: 1);

// Удалить тему (DELETE /threads/{thread_id})
$deleted = $forum->threads->delete(thread_id: 1);

// Переместить тему (POST /threads/{thread_id}/move)
$moved = $forum->threads->move(thread_id: 1, body: ['forumId' => 2]);

// Поднять тему (POST /threads/{thread_id}/bump)
$bumped = $forum->threads->bump(thread_id: 1);

// Скрыть тему (POST /threads/{thread_id}/hide)
$hidden = $forum->threads->hide(thread_id: 1);

// Добавить в избранное (POST /threads/{thread_id}/star)
$starred = $forum->threads->star(thread_id: 1);

// Убрать из избранного (DELETE /threads/{thread_id}/star)
$unstarred = $forum->threads->unstar(thread_id: 1);

// Подписчики темы (GET /threads/{thread_id}/followers)
$followers = $forum->threads->followers(thread_id: 1);

// Подписаться на тему (POST /threads/{thread_id}/followers)
$follow = $forum->threads->follow(thread_id: 1);

// Отписаться от темы (DELETE /threads/{thread_id}/followers)
$unfollow = $forum->threads->unfollow(thread_id: 1);

// Отслеживаемые темы (GET /threads/followed)
$followed = $forum->threads->followed();

// Навигация по теме (GET /threads/{thread_id}/navigation)
$nav = $forum->threads->navigation(thread_id: 1);

// Получить опрос (GET /threads/{thread_id}/poll)
$poll = $forum->threads->pollGet(thread_id: 1);

// Голосовать в опросе (POST /threads/{thread_id}/poll/votes)
$vote = $forum->threads->pollVote(thread_id: 1);

// Непрочитанные темы (GET /threads/unread)
$unread = $forum->threads->unread();

// Последние темы (GET /threads/recent)
$recent = $forum->threads->recent();

// Завершить конкурс (POST /threads/{thread_id}/finish)
$finished = $forum->threads->finish(thread_id: 1);
```

### Посты / Posts

```php
// Список постов (GET /posts)
$posts = $forum->posts->getList();

// Создать пост (POST /posts)
$post = $forum->posts->create(['threadId' => 1, 'postBody' => 'Текст']);

// Получить пост (GET /posts/{post_id})
$post = $forum->posts->get(post_id: 1);

// Редактировать пост (PUT /posts/{post_id})
$edited = $forum->posts->edit(post_id: 1);

// Удалить пост (DELETE /posts/{post_id})
$deleted = $forum->posts->delete(post_id: 1);

// Лайки поста (GET /posts/{post_id}/likes)
$likes = $forum->posts->likes(post_id: 1);

// Лайкнуть пост (POST /posts/{post_id}/likes)
$liked = $forum->posts->like(post_id: 1);

// Убрать лайк (DELETE /posts/{post_id}/likes)
$unliked = $forum->posts->unlike(post_id: 1);

// Причины жалоб (GET /posts/{post_id}/report/reasons)
$reasons = $forum->posts->reportReasons(post_id: 1);

// Пожаловаться на пост (POST /posts/{post_id}/report)
$report = $forum->posts->report(post_id: 1, body: ['message' => 'Причина']);

// Получить комментарии (GET /posts/comments)
$comments = $forum->posts->commentsGet();

// Создать комментарий (POST /posts/comments)
$comment = $forum->posts->commentsCreate(['postId' => 1, 'commentBody' => 'Текст']);

// Редактировать комментарий (PUT /posts/comments)
$edited = $forum->posts->commentsEdit(['commentBody' => 'Новый текст']);

// Удалить комментарий (DELETE /posts/comments)
$deleted = $forum->posts->commentsDelete(['commentId' => 1]);

// Пожаловаться на комментарий (POST /posts/comments/report)
$report = $forum->posts->commentsReport(['commentId' => 1, 'message' => 'Причина']);
```

### Пользователи / Users

```php
// Список пользователей (GET /users)
$users = $forum->users->getList();

// Поля пользователей (GET /users/fields)
$fields = $forum->users->fields();

// Поиск пользователей (GET /users/find)
$found = $forum->users->find();

// Получить пользователя (GET /users/{user_id})
$user = $forum->users->get(user_id: 1);

// Редактировать пользователя (PUT /users/{user_id})
$edited = $forum->users->edit(user_id: 1);

// Жалобы пользователя (GET /users/{user_id}/claims)
$claims = $forum->users->claims(user_id: 1);

// Загрузить аватар (POST /users/{user_id}/avatar)
$avatar = $forum->users->avatarUpload(user_id: 1, body: ['avatar' => '/path/to/file']);

// Удалить аватар (DELETE /users/{user_id}/avatar)
$deleted = $forum->users->avatarDelete(user_id: 1);

// Обрезать аватар (POST /users/{user_id}/avatar-crop)
$cropped = $forum->users->avatarCrop(user_id: 1);

// Загрузить фон (POST /users/{user_id}/background)
$bg = $forum->users->backgroundUpload(user_id: 1, body: ['background' => '/path/to/file']);

// Удалить фон (DELETE /users/{user_id}/background)
$deleted = $forum->users->backgroundDelete(user_id: 1);

// Обрезать фон (POST /users/{user_id}/background-crop)
$cropped = $forum->users->backgroundCrop(user_id: 1, body: ['size' => 100]);

// Подписчики (GET /users/{user_id}/followers)
$followers = $forum->users->followers(user_id: 1);

// Подписаться (POST /users/{user_id}/followers)
$follow = $forum->users->follow(user_id: 1);

// Отписаться (DELETE /users/{user_id}/followers)
$unfollow = $forum->users->unfollow(user_id: 1);

// Подписки (GET /users/{user_id}/followings)
$followings = $forum->users->followings(user_id: 1);

// Лайки пользователя (GET /users/{user_id}/likes)
$likes = $forum->users->likes(user_id: 1);

// Список игнора (GET /users/ignored)
$ignored = $forum->users->ignored();

// Добавить в игнор (POST /users/{user_id}/ignore)
$ignore = $forum->users->ignore(user_id: 1);

// Редактировать игнор (PUT /users/{user_id}/ignore)
$edit = $forum->users->ignoreEdit(user_id: 1);

// Убрать из игнора (DELETE /users/{user_id}/ignore)
$unignore = $forum->users->unignore(user_id: 1);

// Контент пользователя (GET /users/{user_id}/contents)
$contents = $forum->users->contents(user_id: 1);

// Трофеи (GET /users/{user_id}/trophies)
$trophies = $forum->users->trophies(user_id: 1);

// Типы секретных ответов (GET /users/secret-answer-types)
$types = $forum->users->secretAnswerTypes();

// Сброс секретного ответа (POST /users/secret-answer/reset)
$reset = $forum->users->sAReset();

// Отмена сброса секретного ответа (DELETE /users/secret-answer/reset)
$cancel = $forum->users->sACancelReset();
```

### Посты профиля / Profile Posts

```php
// Список постов профиля (GET /profile-posts)
$posts = $forum->profilePosts->getList(user_id: 1);

// Создать пост профиля (POST /profile-posts)
$post = $forum->profilePosts->create(['userId' => 1, 'postBody' => 'Текст']);

// Получить пост профиля (GET /profile-posts/{profile_post_id})
$post = $forum->profilePosts->get(profile_post_id: 1);

// Редактировать пост профиля (PUT /profile-posts/{profile_post_id})
$edited = $forum->profilePosts->edit(profile_post_id: 1);

// Удалить пост профиля (DELETE /profile-posts/{profile_post_id})
$deleted = $forum->profilePosts->delete(profile_post_id: 1);

// Причины жалоб (GET /profile-posts/{profile_post_id}/report/reasons)
$reasons = $forum->profilePosts->reportReasons(profile_post_id: 1);

// Пожаловаться (POST /profile-posts/{profile_post_id}/report)
$report = $forum->profilePosts->report(profile_post_id: 1, body: ['message' => 'Причина']);

// Закрепить пост (POST /profile-posts/{profile_post_id}/stick)
$stick = $forum->profilePosts->stick(profile_post_id: 1);

// Открепить пост (DELETE /profile-posts/{profile_post_id}/stick)
$unstick = $forum->profilePosts->unstick(profile_post_id: 1);

// Лайки поста (GET /profile-posts/{profile_post_id}/likes)
$likes = $forum->profilePosts->likes(profile_post_id: 1);

// Лайкнуть (POST /profile-posts/{profile_post_id}/likes)
$liked = $forum->profilePosts->like(profile_post_id: 1);

// Убрать лайк (DELETE /profile-posts/{profile_post_id}/likes)
$unliked = $forum->profilePosts->unlike(profile_post_id: 1);

// Список комментариев (GET /profile-posts/comments)
$comments = $forum->profilePosts->commentsList();

// Создать комментарий (POST /profile-posts/comments)
$comment = $forum->profilePosts->commentsCreate(['profilePostId' => 1, 'commentBody' => 'Текст']);

// Редактировать комментарий (PUT /profile-posts/comments)
$edited = $forum->profilePosts->commentsEdit(['commentBody' => 'Новый текст']);

// Удалить комментарий (DELETE /profile-posts/comments)
$deleted = $forum->profilePosts->commentsDelete(['commentId' => 1]);

// Получить комментарий (GET /profile-posts/{profile_post_id}/comments/{comment_id})
$comment = $forum->profilePosts->commentsGet(profile_post_id: 1, comment_id: 1);

// Пожаловаться на комментарий (POST /profile-posts/comments/{comment_id}/report)
$report = $forum->profilePosts->commentsReport(comment_id: 1, body: ['message' => 'Причина']);
```

### Личные сообщения / Conversations

```php
// Список диалогов (GET /conversations)
$convos = $forum->conversations->getList();

// Создать диалог (POST /conversations)
$convo = $forum->conversations->create();

// Обновить диалог (PUT /conversations)
$updated = $forum->conversations->update(['conversationId' => 1, 'title' => 'Новый']);

// Удалить диалог (DELETE /conversations)
$deleted = $forum->conversations->delete(['conversationId' => 1]);

// Начать диалог (POST /conversations/start)
$started = $forum->conversations->start(['recipientId' => 1, 'messageBody' => 'Привет']);

// Сохранить диалог (POST /conversations/save)
$saved = $forum->conversations->save(['conversationId' => 1]);

// Получить диалог (GET /conversations/{conversation_id})
$convo = $forum->conversations->get(conversation_id: 1);

// Список сообщений (GET /conversations/{conversation_id}/messages)
$msgs = $forum->conversations->messagesList(conversation_id: 1);

// Создать сообщение (POST /conversations/{conversation_id}/messages)
$msg = $forum->conversations->messagesCreate(conversation_id: 1, body: ['messageBody' => 'Текст']);

// Поиск диалогов (POST /conversations/search)
$results = $forum->conversations->search();

// Получить сообщение (GET /conversations/messages/{message_id})
$msg = $forum->conversations->messagesGet(message_id: 1);

// Редактировать сообщение (PUT /conversations/{conversation_id}/messages/{message_id})
$edited = $forum->conversations->messagesEdit(conversation_id: 1, message_id: 1, body: ['messageBody' => 'Новый']);

// Удалить сообщение (DELETE /conversations/{conversation_id}/messages/{message_id})
$deleted = $forum->conversations->messagesDelete(conversation_id: 1, message_id: 1);

// Пригласить в диалог (POST /conversations/{conversation_id}/invite)
$invite = $forum->conversations->invite(conversation_id: 1, body: ['userId' => 2]);

// Кикнуть из диалога (POST /conversations/{conversation_id}/kick)
$kick = $forum->conversations->kick(conversation_id: 1, body: ['userId' => 2]);

// Прочитать диалог (POST /conversations/{conversation_id}/read)
$read = $forum->conversations->read(conversation_id: 1);

// Прочитать все (POST /conversations/read)
$readAll = $forum->conversations->readAll();

// Закрепить сообщение (POST /conversations/{conversation_id}/messages/{message_id}/stick)
$stick = $forum->conversations->messagesStick(conversation_id: 1, message_id: 1);

// Открепить сообщение (DELETE /conversations/{conversation_id}/messages/{message_id}/stick)
$unstick = $forum->conversations->messagesUnstick(conversation_id: 1, message_id: 1);

// Пометить звездой (POST /conversations/{conversation_id}/star)
$star = $forum->conversations->star(conversation_id: 1);

// Убрать звезду (DELETE /conversations/{conversation_id}/star)
$unstar = $forum->conversations->unstar(conversation_id: 1);

// Включить уведомления (POST /conversations/{conversation_id}/alerts/enable)
$enable = $forum->conversations->alertsEnable(conversation_id: 1);

// Отключить уведомления (POST /conversations/{conversation_id}/alerts/disable)
$disable = $forum->conversations->alertsDisable(conversation_id: 1);
```

### Уведомления / Notifications

```php
// Список уведомлений (GET /notifications)
$notifs = $forum->notifications->getList();

// Получить уведомление (GET /notifications/{notification_id})
$notif = $forum->notifications->get(notification_id: 1);

// Прочитать уведомления (POST /notifications/read)
$read = $forum->notifications->read();
```

### Теги / Tags

```php
// Популярные теги (GET /tags/popular)
$popular = $forum->tags->popular();

// Список тегов (GET /tags)
$tags = $forum->tags->getList();

// Получить тег (GET /tags/{tag_id})
$tag = $forum->tags->get(tag_id: 1);

// Найти тег (GET /tags/find)
$found = $forum->tags->find();
```

### Поиск / Search

```php
// Поиск по всему (POST /search)
$all = $forum->search->all();

// Поиск тем (POST /search/threads)
$threads = $forum->search->threads();

// Поиск постов (POST /search/posts)
$posts = $forum->search->posts();

// Поиск пользователей (POST /search/users)
$users = $forum->search->users();

// Поиск постов профиля (POST /search/profile-posts)
$pp = $forum->search->profilePosts();

// Поиск по тегам (POST /search/tagged)
$tagged = $forum->search->tagged();

// Результаты поиска (GET /search/{search_id})
$results = $forum->search->results(search_id: 1);
```

### Batch

```php
// Выполнить batch-запрос (POST /batch)
$batch = $forum->batch->execute();
```

### Чатбокс / Chatbox

```php
// Индекс чатбокса (GET /chatbox)
$index = $forum->chatbox->index();

// Получить сообщения (GET /chatbox/messages)
$msgs = $forum->chatbox->getMessages();

// Отправить сообщение (POST /chatbox/messages)
$msg = $forum->chatbox->postMessage(['messageBody' => 'Привет']);

// Редактировать сообщение (PUT /chatbox/messages)
$edited = $forum->chatbox->editMessage(['messageId' => 1, 'messageBody' => 'Новый']);

// Удалить сообщение (DELETE /chatbox/messages)
$deleted = $forum->chatbox->deleteMessage(['messageId' => 1]);

// Онлайн в комнате (GET /chatbox/{room_id}/online)
$online = $forum->chatbox->online();

// Причины жалоб (GET /chatbox/report/reasons)
$reasons = $forum->chatbox->reportReasons();

// Пожаловаться (POST /chatbox/report)
$report = $forum->chatbox->report(['messageId' => 1, 'message' => 'Причина']);

// Лидерборд (GET /chatbox/leaderboard)
$leaders = $forum->chatbox->getLeaderboard();

// Получить список игнора (GET /chatbox/ignore)
$ignore = $forum->chatbox->getIgnore();

// Добавить в игнор (POST /chatbox/ignore)
$added = $forum->chatbox->postIgnore(['userId' => 1]);

// Убрать из игнора (DELETE /chatbox/ignore)
$removed = $forum->chatbox->deleteIgnore(['userId' => 1]);
```

### Формы / Forms

```php
// Список форм (GET /forms)
$forms = $forum->forms->getList();

// Создать форму (POST /forms/save)
$form = $forum->forms->create(new FormsCreateP2PTrade(/* ... */));
```

---

## Market API

### Категории / Category

```php
// Все категории (GET /market)
$all = $market->category->all();

// Steam (GET /market/steam)
$steam = $market->category->steam();

// Fortnite (GET /market/fortnite)
$fortnite = $market->category->fortnite();

// Mihoyo (GET /market/mihoyo)
$mihoyo = $market->category->mihoyo();

// Riot (GET /market/riot)
$riot = $market->category->riot();

// Telegram (GET /market/telegram)
$telegram = $market->category->telegram();

// Supercell (GET /market/supercell)
$supercell = $market->category->supercell();

// EA (GET /market/ea)
$ea = $market->category->eA();

// WoT (GET /market/wot)
$wot = $market->category->wot();

// WoT Blitz (GET /market/wot-blitz)
$wotBlitz = $market->category->wotBlitz();

// Gifts (GET /market/gifts)
$gifts = $market->category->gifts();

// Epic Games (GET /market/epicgames)
$epic = $market->category->epicGames();

// Escape from Tarkov (GET /market/escape-from-tarkov)
$eft = $market->category->escapeFromTarkov();

// Social Club (GET /market/socialclub)
$sc = $market->category->socialClub();

// Uplay (GET /market/uplay)
$uplay = $market->category->uplay();

// Discord (GET /market/discord)
$discord = $market->category->discord();

// TikTok (GET /market/tiktok)
$tiktok = $market->category->tikTok();

// Instagram (GET /market/instagram)
$ig = $market->category->instagram();

// Battle.net (GET /market/battlenet)
$bnet = $market->category->battleNet();

// ChatGPT (GET /market/chatgpt)
$gpt = $market->category->chatGPT();

// VPN (GET /market/vpn)
$vpn = $market->category->vpn();

// Roblox (GET /market/roblox)
$roblox = $market->category->roblox();

// Warface (GET /market/warface)
$warface = $market->category->warface();

// Minecraft (GET /market/minecraft)
$mc = $market->category->minecraft();

// Hytale (GET /market/hytale)
$hytale = $market->category->hytale();

// Список подкатегорий (GET /market/category)
$list = $market->category->getList();

// Параметры категории (GET /market/{category_name}/params)
$params = $market->category->params('steam');

// Игры категории (GET /market/{category_name}/games)
$games = $market->category->games('steam');
```

### Список / List

```php
// Аккаунты пользователя (GET /market/user)
$user = $market->list->user();

// Заказы (GET /market/user/orders)
$orders = $market->list->orders();

// Статусы (GET /market/user/states)
$states = $market->list->states();

// Скачать данные (GET /market/user/{type}/download)
$download = $market->list->download('accounts');

// Избранное (GET /market/fave)
$faves = $market->list->favorites();

// Просмотренные (GET /market/viewed)
$viewed = $market->list->viewed();
```

### Управление / Managing

```php
// Получить аккаунт (GET /market/{item_id})
$item = $market->managing->get(item_id: 123);

// Удалить аккаунт (DELETE /market/{item_id})
$deleted = $market->managing->delete(item_id: 123, body: ['reason' => 'Не нужен']);

// Создать жалобу (POST /market/claims)
$claim = $market->managing->createClaim(['itemId' => 123]);

// Массовое получение (POST /market/bulk-get)
$bulk = $market->managing->bulkGet(['itemIds' => [1, 2, 3]]);

// Стоимость инвентаря Steam (GET /market/{item_id}/steam-inventory-value)
$inv = $market->managing->steamInventoryValue(item_id: 123);

// Стоимость Steam (GET /market/steam-value)
$val = $market->managing->steamValue();

// Превью Steam (GET /market/{item_id}/steam-preview)
$preview = $market->managing->steamPreview(item_id: 123);

// Редактировать аккаунт (PUT /market/{item_id}/edit)
$edited = $market->managing->edit(item_id: 123);

// AI-оценка (GET /market/{item_id}/ai-price)
$price = $market->managing->aIPrice(item_id: 123);

// Цена автопокупки (GET /market/{item_id}/auto-buy-price)
$abp = $market->managing->autoBuyPrice(item_id: 123);

// Заметка (POST /market/{item_id}/note)
$note = $market->managing->note(item_id: 123);

// Обновить стоимость Steam (PUT /market/{item_id}/steam-value)
$updated = $market->managing->steamUpdateValue(item_id: 123);

// Поднять аккаунт (POST /market/{item_id}/bump)
$bumped = $market->managing->bump(item_id: 123);

// Автоподнятие (POST /market/{item_id}/auto-bump)
$ab = $market->managing->autoBump(item_id: 123, body: ['interval' => 3600]);

// Отключить автоподнятие (DELETE /market/{item_id}/auto-bump)
$disabled = $market->managing->autoBumpDisable(item_id: 123);

// Открыть аккаунт (POST /market/{item_id}/open)
$opened = $market->managing->open(item_id: 123);

// Закрыть аккаунт (POST /market/{item_id}/close)
$closed = $market->managing->close(item_id: 123);

// Получить изображения (GET /market/{item_id}/image)
$img = $market->managing->image(item_id: 123);

// Email код (GET /market/{item_id}/email-code)
$code = $market->managing->emailCode(item_id: 123);

// Получить письма (GET /market/letters)
$letters = $market->managing->getLetters2();

// Получить MA-файл Steam (GET /market/{item_id}/steam-mafile)
$mafile = $market->managing->steamGetMafile(item_id: 123);

// Добавить MA-файл Steam (POST /market/{item_id}/steam-mafile)
$added = $market->managing->steamAddMafile(item_id: 123);

// Удалить MA-файл Steam (DELETE /market/{item_id}/steam-mafile)
$removed = $market->managing->steamRemoveMafile(item_id: 123);

// Код MA-файла Steam (GET /market/{item_id}/steam-mafile-code)
$code = $market->managing->steamMafileCode(item_id: 123);

// Steam Desktop Authenticator (POST /market/{item_id}/steam-sda)
$sda = $market->managing->steamSDA(item_id: 123);

// Код Telegram (GET /market/{item_id}/telegram-code)
$code = $market->managing->telegramCode(item_id: 123);

// Сброс авторизации Telegram (POST /market/{item_id}/telegram-reset-auth)
$reset = $market->managing->telegramResetAuth(item_id: 123);

// Отказ от гарантии (POST /market/{item_id}/refuse-guarantee)
$refused = $market->managing->refuseGuarantee(item_id: 123);

// Отклонить видеозапись (POST /market/{item_id}/decline-video-recording)
$declined = $market->managing->declineVideoRecording(item_id: 123, body: ['reason' => 'Нет']);

// Проверить гарантию (POST /market/{item_id}/check-guarantee)
$checked = $market->managing->checkGuarantee(item_id: 123);

// Сменить пароль (POST /market/{item_id}/change-password)
$changed = $market->managing->changePassword(item_id: 123);

// Временный пароль email (GET /market/{item_id}/temp-email-password)
$temp = $market->managing->tempEmailPassword(item_id: 123);

// Установить тег (POST /market/{item_id}/tag)
$tagged = $market->managing->tag(item_id: 123, body: ['tagId' => 1]);

// Убрать тег (DELETE /market/{item_id}/tag)
$untagged = $market->managing->untag(item_id: 123, body: ['tagId' => 1]);

// Публичный тег (POST /market/{item_id}/public-tag)
$ptag = $market->managing->publicTag(item_id: 123, body: ['tagId' => 1]);

// Убрать публичный тег (DELETE /market/{item_id}/public-tag)
$uptag = $market->managing->publicUntag(item_id: 123, body: ['tagId' => 1]);

// В избранное (POST /market/{item_id}/star)
$faved = $market->managing->favorite(item_id: 123);

// Убрать из избранного (DELETE /market/{item_id}/star)
$unfaved = $market->managing->unfavorite(item_id: 123);

// Закрепить (POST /market/{item_id}/stick)
$stuck = $market->managing->stick(item_id: 123);

// Открепить (DELETE /market/{item_id}/stick)
$unstuck = $market->managing->unstick(item_id: 123);

// Передать аккаунт (POST /market/{item_id}/transfer)
$transferred = $market->managing->transfer(item_id: 123, body: ['userId' => 1]);
```

### Профиль / Profile

```php
// Получить профиль (GET /market/me)
$profile = $market->profile->get();

// Редактировать профиль (PUT /market/me)
$edited = $market->profile->edit();

// Жалобы (GET /market/me/claims)
$claims = $market->profile->claims();
```

### Корзина / Cart

```php
// Получить корзину (GET /market/cart)
$cart = $market->cart->get();

// Добавить в корзину (POST /market/cart)
$added = $market->cart->add(['itemId' => 123]);

// Удалить из корзины (DELETE /market/cart)
$deleted = $market->cart->delete();
```

### Покупка / Purchasing

```php
// Быстрая покупка (POST /market/{item_id}/fast-buy)
$buy = $market->purchasing->fastBuy(item_id: 123);

// Проверить аккаунт (POST /market/{item_id}/check-account)
$check = $market->purchasing->check(item_id: 123);

// Подтвердить покупку (POST /market/{item_id}/confirm-buy)
$confirm = $market->purchasing->confirm(item_id: 123);

// Запрос скидки (POST /market/{item_id}/discount-request)
$req = $market->purchasing->discountRequest(item_id: 123, body: ['price' => 100]);

// Отменить запрос скидки (DELETE /market/{item_id}/discount-request)
$cancel = $market->purchasing->discountCancel(item_id: 123);
```

### Кастомные скидки / Custom Discounts

```php
// Получить скидки (GET /market/custom-discounts)
$discounts = $market->customDiscounts->get();

// Создать скидку (POST /market/custom-discounts)
$created = $market->customDiscounts->create(['discount' => 10]);

// Редактировать скидку (PUT /market/custom-discounts)
$edited = $market->customDiscounts->edit(['discount' => 15]);

// Удалить скидку (DELETE /market/custom-discounts)
$deleted = $market->customDiscounts->delete(['discountId' => 1]);
```

### Публикация / Publishing

```php
// Быстрая продажа (POST /item/fast-sell)
$sold = $market->publishing->fastSell(['price' => 100, 'categoryId' => 1, 'currency' => 'rub', 'itemOrigin' => 'brute']);

// Добавить аккаунт (POST /item/add)
$added = $market->publishing->add(['price' => 100, 'categoryId' => 1, 'currency' => 'rub', 'itemOrigin' => 'brute']);

// Проверить детали (POST /{item_id}/goods/check)
$check = $market->publishing->check(item_id: 123);

// Внешний аккаунт (POST /{item_id}/external-account)
$ext = $market->publishing->external(item_id: 123, body: ['login' => 'user', 'password' => 'pass']);
```

### Платежи / Payments

```php
// Получить инвойс (GET /market/payments/invoice)
$invoice = $market->payments->invoiceGet();

// Создать инвойс (POST /market/payments/invoice)
$created = $market->payments->invoiceCreate(['amount' => 100]);

// Список инвойсов (GET /market/payments/invoices)
$list = $market->payments->invoiceList();

// Валюты (GET /market/payments/currency)
$currency = $market->payments->currency();

// Список балансов (GET /market/payments/balance)
$balance = $market->payments->balanceList();

// Обмен валют (POST /market/payments/balance/exchange)
$exchange = $market->payments->balanceExchange(['amount' => 100, 'from' => 'rub', 'to' => 'usd']);

// Перевод средств (POST /market/payments/transfer)
$transfer = $market->payments->transfer(['userId' => 1, 'amount' => 100]);

// Комиссия (GET /market/payments/fee)
$fee = $market->payments->fee();

// Отмена платежа (POST /market/payments/cancel)
$cancel = $market->payments->cancel(['paymentId' => 1]);

// История платежей (GET /market/payments/history)
$history = $market->payments->history();

// Сервисы выплат (GET /market/payments/payout/services)
$services = $market->payments->payoutServices();

// Выплата (POST /market/payments/payout)
$payout = $market->payments->payout(['amount' => 100, 'service' => 'card']);
```

### Автоплатежи / Auto Payments

```php
// Список автоплатежей (GET /market/auto-payments)
$list = $market->autoPayments->getList();

// Создать автоплатёж (POST /market/auto-payments)
$created = $market->autoPayments->create(['amount' => 100]);

// Удалить автоплатёж (DELETE /market/auto-payments)
$deleted = $market->autoPayments->delete(['paymentId' => 1]);
```

### Прокси / Proxy

```php
// Получить прокси (GET /market/proxy)
$proxy = $market->proxy->get();

// Добавить прокси (POST /market/proxy)
$added = $market->proxy->add(['proxyUrl' => 'socks5://127.0.0.1:1080']);

// Удалить прокси (DELETE /market/proxy)
$deleted = $market->proxy->delete();
```

### IMAP

```php
// Создать IMAP (POST /market/imap)
$created = $market->imap->create(['email' => 'test@example.com']);

// Удалить IMAP (DELETE /market/imap)
$deleted = $market->imap->delete(['email' => 'test@example.com']);
```

### Batch

```php
// Batch-запрос (POST /market/batch)
$batch = $market->batch->batch(['requests' => [...]]);
```

---

## Генерация кода / Code Generation

Клиенты и модели генерируются из OpenAPI 3.1.0 спецификаций в `schemas/`:

```bash
php codegen/generate.php
```

| Вход | Выход |
|------|-------|
| `schemas/forum.json` | `src/Generated/Forum/ForumClient.php`, `Models/` |
| `schemas/market.json` | `src/Generated/Market/MarketClient.php`, `Models/` |

Исходный код генератора в `codegen/`.

---

## Сборка и тесты / Build & Test

```bash
composer install               # Установить зависимости
php codegen/generate.php       # Генерация клиентов из OpenAPI спецификаций
composer test                  # Запустить тесты
composer cs-fix                # Исправить стиль кода
composer cs-check              # Проверить стиль кода
```

---

## Структура проекта / Project Structure

```
schemas/                        OpenAPI 3.1.0 спецификации
codegen/                        Генератор кода
src/
  Runtime/
    ClientConfig.php            Общая конфигурация
    HttpClient.php              HTTP клиент на базе Guzzle
    Retry.php                   Retry с экспоненциальным backoff + джиттер
    RateLimiter.php             Token bucket rate limiter
    RetryConfig.php             Конфигурация повторов
    RateLimitConfig.php         Конфигурация rate limit
    ProxyConfig.php             Конфигурация прокси
    Errors/                     Иерархия исключений
  Generated/
    Forum/
      ForumClient.php           Forum API клиент (151 эндпоинт)
      Models/                   Модели запросов/ответов Forum
    Market/
      MarketClient.php          Market API клиент (115 эндпоинтов)
      Models/                   Модели запросов/ответов Market
tests/
composer.json
phpunit.xml
```

---

## Лицензия / License

[MIT](LICENSE)
