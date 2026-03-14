<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\ClientConfig;
use Lolzteam\Runtime\HttpClient;
use Lolzteam\Runtime\RetryConfig;

final class ForumClient
{
    public readonly OAuthApi $oAuth;
    public readonly AssetsApi $assets;
    public readonly CategoriesApi $categories;
    public readonly ForumsApi $forums;
    public readonly LinksApi $links;
    public readonly PagesApi $pages;
    public readonly NavigationApi $navigation;
    public readonly ThreadsApi $threads;
    public readonly PostsApi $posts;
    public readonly UsersApi $users;
    public readonly ProfilePostsApi $profilePosts;
    public readonly ConversationsApi $conversations;
    public readonly NotificationsApi $notifications;
    public readonly TagsApi $tags;
    public readonly SearchApi $search;
    public readonly BatchApi $batch;
    public readonly ChatboxApi $chatbox;
    public readonly FormsApi $forms;

    public function __construct(
        string $token,
        ?string $proxy = null,
        ?RetryConfig $retry = null,
    ) {
        $config = new ClientConfig(
            token: $token,
            baseUrl: 'https://api.lolz.live',
            proxy: $proxy,
            retry: $retry ?? new RetryConfig(),
            requestsPerMinute: 300,
        );
        $http = new HttpClient($config);
        $this->oAuth = new OAuthApi($http);
        $this->assets = new AssetsApi($http);
        $this->categories = new CategoriesApi($http);
        $this->forums = new ForumsApi($http);
        $this->links = new LinksApi($http);
        $this->pages = new PagesApi($http);
        $this->navigation = new NavigationApi($http);
        $this->threads = new ThreadsApi($http);
        $this->posts = new PostsApi($http);
        $this->users = new UsersApi($http);
        $this->profilePosts = new ProfilePostsApi($http);
        $this->conversations = new ConversationsApi($http);
        $this->notifications = new NotificationsApi($http);
        $this->tags = new TagsApi($http);
        $this->search = new SearchApi($http);
        $this->batch = new BatchApi($http);
        $this->chatbox = new ChatboxApi($http);
        $this->forms = new FormsApi($http);
    }
}
