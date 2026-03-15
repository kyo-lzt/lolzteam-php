<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Enums;

enum AllowInviteGroup: string
{
    case None = 'none';
    case Members = 'members';
    case Followed = 'followed';
}

enum AllowPostProfile: string
{
    case None = 'none';
    case Members = 'members';
    case Followed = 'followed';
}

enum AllowReceiveNewsFeed: string
{
    case None = 'none';
    case Members = 'members';
    case Followed = 'followed';
}

enum AllowSendPersonalConversation: string
{
    case None = 'none';
    case Members = 'members';
    case Followed = 'followed';
}

enum AllowViewProfile: string
{
    case None = 'none';
    case Members = 'members';
    case Followed = 'followed';
}

enum CategoriesOrder: string
{
    case Natural = 'natural';
    case List = 'list';
}

enum ClaimState: string
{
    case Active = 'active';
    case Solved = 'solved';
    case Rejected = 'rejected';
    case Settled = 'settled';
}

enum ContentType: string
{
    case Post = 'post';
    case PostComment = 'post_comment';
    case ProfilePost = 'profile_post';
    case ProfilePostComment = 'profile_post_comment';
}

enum ContestType: string
{
    case ByFinishDate = 'by_finish_date';
}

enum ConversationsOrder: string
{
    case Natural = 'natural';
    case NaturalReverse = 'natural_reverse';
}

enum Currency: string
{
    case Rub = 'rub';
    case Uah = 'uah';
    case Kzt = 'kzt';
    case Byn = 'byn';
    case Usd = 'usd';
    case Eur = 'eur';
    case Gbp = 'gbp';
    case Cny = 'cny';
    case Try = 'try';
}

enum DeleteType: string
{
    case Delete = 'delete';
    case DeleteIgnore = 'delete_ignore';
}

enum Direction: string
{
    case Asc = 'asc';
    case Desc = 'desc';
}

enum Duration: string
{
    case Day = 'day';
    case Week = 'week';
    case Month = 'month';
}

enum Folder: string
{
    case All = 'all';
    case Unread = 'unread';
    case Groups = 'groups';
    case Market = 'market';
    case MarketReplacements = 'market_replacements';
    case Staff = 'staff';
    case Giveaways = 'giveaways';
    case P2p = 'p2p';
}

enum FormId: int
{
    case V1 = 1;
    case V3 = 3;
}

enum Gender: string
{
    case Empty = '';
    case Male = 'male';
    case Female = 'female';
}

enum GrantType: string
{
    case ClientCredentials = 'client_credentials';
    case AuthorizationCode = 'authorization_code';
    case RefreshToken = 'refresh_token';
    case Password = 'password';
}

enum LanguageId: int
{
    case V1 = 1;
    case V2 = 2;
}

enum LengthOption: string
{
    case Minutes = 'minutes';
    case Hours = 'hours';
    case Days = 'days';
}

enum LikeType: string
{
    case Like = 'like';
    case Like2 = 'like2';
}

enum PayClaim: string
{
    case Now = 'now';
    case Later = 'later';
}

enum Period: string
{
    case Day = 'day';
    case Week = 'week';
    case Month = 'month';
    case Year = 'year';
}

enum PostsOrder: string
{
    case Natural = 'natural';
    case NaturalReverse = 'natural_reverse';
    case PostLikes = 'post_likes';
    case PostLikesReverse = 'post_likes_reverse';
}

enum PrizeDataUpgrade: int
{
    case V1 = 1;
    case V6 = 6;
    case V12 = 12;
    case V14 = 14;
    case V17 = 17;
    case V19 = 19;
    case V20 = 20;
    case V21 = 21;
    case V22 = 22;
}

enum PrizeType: string
{
    case Money = 'money';
    case Upgrades = 'upgrades';
}

enum ReplyGroup: int
{
    case V0 = 0;
    case V2 = 2;
    case V21 = 21;
    case V22 = 22;
    case V23 = 23;
    case V60 = 60;
    case V351 = 351;
}

enum RoomIDModel: int
{
    case V1 = 1;
    case V2 = 2;
    case V3 = 3;
    case V4 = 4;
    case V13 = 13;
}

enum RoomId: int
{
    case V1 = 1;
    case V2 = 2;
    case V3 = 3;
    case V4 = 4;
    case V13 = 13;
}

enum State: string
{
    case Active = 'active';
    case Closed = 'closed';
}

enum ThreadsOrder: string
{
    case PostDate = 'post_date';
    case LastPostDate = 'last_post_date';
    case ReplyCount = 'reply_count';
    case ReplyCountAsc = 'reply_count_asc';
    case FirstPostLikes = 'first_post_likes';
    case VoteCount = 'vote_count';
}

enum Timezone: string
{
    case PacificMidway = 'Pacific/Midway';
    case PacificHonolulu = 'Pacific/Honolulu';
    case PacificMarquesas = 'Pacific/Marquesas';
    case AmericaAnchorage = 'America/Anchorage';
    case AmericaLosAngeles = 'America/Los_Angeles';
    case AmericaSantaIsabel = 'America/Santa_Isabel';
    case AmericaTijuana = 'America/Tijuana';
    case AmericaDenver = 'America/Denver';
    case AmericaChihuahua = 'America/Chihuahua';
    case AmericaPhoenix = 'America/Phoenix';
    case AmericaChicago = 'America/Chicago';
    case AmericaBelize = 'America/Belize';
    case AmericaMexicoCity = 'America/Mexico_City';
    case PacificEaster = 'Pacific/Easter';
    case AmericaNewYork = 'America/New_York';
    case AmericaHavana = 'America/Havana';
    case AmericaBogota = 'America/Bogota';
    case AmericaCaracas = 'America/Caracas';
    case AmericaHalifax = 'America/Halifax';
    case AmericaGooseBay = 'America/Goose_Bay';
    case AmericaAsuncion = 'America/Asuncion';
    case AmericaSantiago = 'America/Santiago';
    case AmericaCuiaba = 'America/Cuiaba';
    case AmericaLaPaz = 'America/La_Paz';
    case AmericaStJohns = 'America/St_Johns';
    case AmericaArgentinaBuenosAires = 'America/Argentina/Buenos_Aires';
    case AmericaArgentinaSanLuis = 'America/Argentina/San_Luis';
    case AmericaArgentinaMendoza = 'America/Argentina/Mendoza';
    case AtlanticStanley = 'Atlantic/Stanley';
    case AmericaGodthab = 'America/Godthab';
    case AmericaMontevideo = 'America/Montevideo';
    case AmericaSaoPaulo = 'America/Sao_Paulo';
    case AmericaMiquelon = 'America/Miquelon';
    case AmericaNoronha = 'America/Noronha';
    case AtlanticCapeVerde = 'Atlantic/Cape_Verde';
    case AtlanticAzores = 'Atlantic/Azores';
    case EuropeLondon = 'Europe/London';
    case AfricaCasablanca = 'Africa/Casablanca';
    case AtlanticReykjavik = 'Atlantic/Reykjavik';
    case EuropeAmsterdam = 'Europe/Amsterdam';
    case AfricaAlgiers = 'Africa/Algiers';
    case AfricaWindhoek = 'Africa/Windhoek';
    case AfricaTunis = 'Africa/Tunis';
    case EuropeAthens = 'Europe/Athens';
    case AfricaJohannesburg = 'Africa/Johannesburg';
    case EuropeKaliningrad = 'Europe/Kaliningrad';
    case AsiaAmman = 'Asia/Amman';
    case AsiaBeirut = 'Asia/Beirut';
    case AfricaCairo = 'Africa/Cairo';
    case AsiaJerusalem = 'Asia/Jerusalem';
    case AsiaGaza = 'Asia/Gaza';
    case AsiaDamascus = 'Asia/Damascus';
    case EuropeMoscow = 'Europe/Moscow';
    case EuropeMinsk = 'Europe/Minsk';
    case AfricaNairobi = 'Africa/Nairobi';
    case AsiaTehran = 'Asia/Tehran';
    case AsiaDubai = 'Asia/Dubai';
    case AsiaYerevan = 'Asia/Yerevan';
    case AsiaBaku = 'Asia/Baku';
    case IndianMauritius = 'Indian/Mauritius';
    case AsiaKabul = 'Asia/Kabul';
    case AsiaYekaterinburg = 'Asia/Yekaterinburg';
    case AsiaTashkent = 'Asia/Tashkent';
    case AsiaKolkata = 'Asia/Kolkata';
    case AsiaKathmandu = 'Asia/Kathmandu';
    case AsiaNovosibirsk = 'Asia/Novosibirsk';
    case AsiaDhaka = 'Asia/Dhaka';
    case AsiaAlmaty = 'Asia/Almaty';
    case AsiaRangoon = 'Asia/Rangoon';
    case AsiaKrasnoyarsk = 'Asia/Krasnoyarsk';
    case AsiaBangkok = 'Asia/Bangkok';
    case AsiaIrkutsk = 'Asia/Irkutsk';
    case AsiaHongKong = 'Asia/Hong_Kong';
    case AsiaSingapore = 'Asia/Singapore';
    case AustraliaPerth = 'Australia/Perth';
    case AsiaYakutsk = 'Asia/Yakutsk';
    case AsiaTokyo = 'Asia/Tokyo';
    case AsiaSeoul = 'Asia/Seoul';
    case AustraliaAdelaide = 'Australia/Adelaide';
    case AustraliaDarwin = 'Australia/Darwin';
    case AsiaVladivostok = 'Asia/Vladivostok';
    case AsiaMagadan = 'Asia/Magadan';
    case AustraliaBrisbane = 'Australia/Brisbane';
    case AustraliaSydney = 'Australia/Sydney';
    case PacificNoumea = 'Pacific/Noumea';
    case PacificNorfolk = 'Pacific/Norfolk';
    case AsiaAnadyr = 'Asia/Anadyr';
    case PacificAuckland = 'Pacific/Auckland';
    case PacificFiji = 'Pacific/Fiji';
    case PacificChatham = 'Pacific/Chatham';
    case PacificTongatapu = 'Pacific/Tongatapu';
    case PacificApia = 'Pacific/Apia';
    case PacificKiritimati = 'Pacific/Kiritimati';
}

enum TransferType: string
{
    case Guarantor = 'guarantor';
    case Safe = 'safe';
    case Notsafe = 'notsafe';
}

enum UsersOrder: string
{
    case Natural = 'natural';
    case FollowDate = 'follow_date';
    case FollowDateReverse = 'follow_date_reverse';
}

enum UsersType: string
{
    case Market = 'market';
    case Nomarket = 'nomarket';
}

enum UsersType2: string
{
    case Gotten = 'gotten';
    case Given = 'given';
}
