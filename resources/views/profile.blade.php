@extends('templates.template')
@section('title', 'Readme:  профиль')

@section('styles')
    <link rel="stylesheet" href="/public/css/main.css">
@endsection

@section('content')

    <main class="page__main page__main--profile">
        <h1 class="visually-hidden">Профиль</h1>
        <div class="profile profile--default">
            <div class="profile__user-wrapper">
                <div class="profile__user user container">
                    <div class="profile__user-info user__info">
                        <div class="profile__avatar user__avatar">
                            <img class="profile__picture user__picture" src="{{$user->avatar }}" alt="">
                        </div>
                        <div class="profile__name-wrapper user__name-wrapper">
                            @if(Auth::check())
                                <span class="profile__name user__name">{{ $user->name }}<br> </span>
                                <time class="profile__user-time user__time"> {{ $registeredFor }} на сайте</time>
                            @endif
                        </div>
                    </div>
                    <div class="profile__rating user__rating">
                        <p class="profile__rating-item user__rating-item user__rating-item--publications">
                            <span class="user__rating-amount">{{$postCount}}</span>
                            <span class="profile__rating-text user__rating-text">публикации</span>
                        </p>
                        <p class="profile__rating-item user__rating-item user__rating-item--subscribers">
                            <span class="user__rating-amount">  {{ $user->subscriptions->count() }}</span>
                            <span class="profile__rating-text user__rating-text">подписчиков</span>
                        </p>
                    </div>

                    @auth
                        @if ($user->id !== auth()->user()->id)
                            @php
                                $subscribed = false;
                                $subscription = auth()->user()->subscriptions()->where('subscribed_to_id', $user->id)->first();
                                if ($subscription) {
                                    $subscribed = true;
                                }
                            @endphp
                            <form id="subscribe-form" action="{{ route('subscribe', $user->id) }}" method="post">
                                <div class="profile__user-buttons user__buttons">
                                    @csrf
                                    @if ($subscribed)
                                        @method('DELETE')
                                        <button class="profile__user-button user__button user__button--subscription button button--main"
                                                type="submit">Отписаться
                                        </button>
                                    @else
                                        <button class="profile__user-button user__button user__button--subscription button button--main"
                                                type="submit">Подписаться
                                        </button>
                                    @endif
                                    <a class="profile__user-button user__button user__button--writing button button--green"
                                       href="{{ route('messages')}}">Сообщение</a>
                                </div>
                            </form>

                        @endif
                    @else
                        <button type="submit"
                                class="profile__user-button user__button user__button--subscription button button--main">
                            Подписаться
                        </button>
                        <a class="profile__user-button user__button user__button--writing button button--green"
                           href="{{ route('messages') }}">Сообщение</a>
                    @endauth

                </div>
            </div>
            <div class="profile__tabs-wrapper tabs">
                <div class="container">
                    <div class="profile__tabs filters">
                        <b class="profile__tabs-caption filters__caption">Показать:</b>
                        <ul class="profile__tabs-list filters__list tabs__list">
                            <li class="profile__tabs-item filters__item">
                                <a class="profile__tabs-link filters__button filters__button--active tabs__item tabs__item--active button">Посты</a>
                            </li>
                            <li class="profile__tabs-item filters__item">
                                <a class="profile__tabs-link filters__button tabs__item button">Лайки</a>
                            </li>
                            <li class="profile__tabs-item filters__item">
                                <a class="profile__tabs-link filters__button tabs__item button">Подписки</a>
                            </li>
                        </ul>
                    </div>
                    <div class="profile__tab-content">
                        <section class="profile__posts tabs__content tabs__content--active">
                            <h2 class="visually-hidden">Публикации</h2>
                            @foreach($posts as $post)
                                <article class="profile__post post post-photo">
                                    <header class="post__header">
                                        <h2>
                                            <a href="{{ route('post-details', ['id' => $post->id]) }}">{{$post->title}}</a>
                                        </h2>
                                    </header>
                                    <div class="post__main">
                                        @if(isset($post->contentType) && $post->contentType->id == 1)
                                            <div class="post-details__image-wrapper post-photo__image-wrapper">
                                                <img src="{{$post->image}}" alt="" width="760" height="507">
                                                <img src="{{$post->link}}" alt="" width="760" height="507">
                                            </div>
                                        @endif
                                        @if(isset($post->contentType) && $post->contentType->id == 2)
                                            <div class="post-video post-video__block">
                                                <iframe width="100%" height="280px" src="{{$post->video}}" frameborder="0"
                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        @endif
                                        @if(isset($post->contentType) && $post->contentType->id == 3)
                                            <div class="post__main">
                                                <p>{{$post->content}}</p>
                                            </div>
                                        @endif
                                        @if(isset($post->contentType) && $post->contentType->id == 4)
                                            <div class="post__author post__author-link post-text__more-link">
                                                {{$post->quote_author}}
                                            </div>
                                        @endif
                                        @if(isset($post->contentType) && $post->contentType->id == 5)
                                            <div class="post-text__more-link">
                                                {{$post->link}}
                                            </div>
                                        @endif
                                    </div>
                                    <footer class="post__footer">
                                        <div class="post__indicators">
                                            <div class="post__buttons">

                                                <form method="POST" action="{{ route('likes.store', ['post_id' => $post->id]) }}">
                                                    @csrf
                                                    <button type="submit" class="post__indicator post__indicator--likes button" title="Лайк">
                                                        <svg class="post__indicator-icon" width="20" height="17">
                                                            <use xlink:href="#icon-heart"></use>
                                                        </svg>
                                                        <svg class="post__indicator-icon post__indicator-icon--like-active" width="20" height="17">
                                                            <use xlink:href="#icon-heart-active"></use>
                                                        </svg>
                                                        <span>{{ $post->likes->count() }}</span>
                                                        <span class="visually-hidden">количество лайков</span>
                                                    </button>
                                                </form>

                                                <form method="POST" action="">
                                                    <button type="submit" title="Репост" class="post__indicator post__indicator--repost button">
                                                        <svg class="post__indicator-icon" width="19" height="17">
                                                            <use xlink:href="#icon-repost"></use>
                                                        </svg>
                                                        <span></span>
                                                        <span class="visually-hidden">количество репостов</span>
                                                    </button>
                                                </form>

                                            </div>
                                            <time
                                                    class="post__time">{{$post->created_at->locale('ru')->diffForHumans()}}</time>
                                        </div>
                                    </footer>

                                    <div class="comments">
                                        <a class="comments__button button"
                                           href="{{ route('comments.show', ['postId' => $post->id]) }}">Показать
                                            комментарии</a>
                                    </div>

                                </article>
                            @endforeach


                        </section>

                        <section class="profile__likes tabs__content " id="likes-section">
                            <h2 class="visually-hidden">Лайки</h2>
                            <ul class="profile__likes-list">
                                @foreach($likes as $like)
                                <li class="post-mini post-mini--photo post user">
                                    <div class="post-mini__user-info user__info">
                                        <div class="post-mini__avatar user__avatar">
                                            <a class="user__avatar-link" href="{{ route('profile', ['id' => $like->user->id]) }}">
                                                <img class="post-mini__picture user__picture"
                                                     src="{{$like->user->avatar}}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-mini__name-wrapper user__name-wrapper">
                                            <a class="post-mini__name user__name" href="{{ route('profile', ['id' => $like->user->id]) }}">
                                                <span>{{$like->user->name}}</span>
                                            </a>
                                            <div class="post-mini__action">
                                                <span class="post-mini__activity user__additional">Лайкнул вашу публикацию</span>
                                                <time class="post-mini__time user__additional">{{ $like->created_at->locale('ru')->diffForHumans() }}
                                                </time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-mini__preview">
                                        <a class="post-mini__link" href="{{ route('post-details', ['id' => $like->post->id]) }}" title="Перейти на публикацию">
                                            <div class="post-mini__image-wrapper">
                                                @if(isset($like->post->image))
                                                <img class="post-mini__image" src="{{$like->post->image}}"
                                                     width="109" height="109" alt="Превью публикации">
                                                @endif
                                            </div>
                                            <span class="visually-hidden">Фото</span>
                                        </a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </section>

                        <section class="profile__subscriptions tabs__content">
                            <h2 class="visually-hidden">Подписки</h2>
                            <ul class="profile__subscriptions-list">
                                    @foreach ($subscriptions as $subscription)
                                        <li class="post-mini post-mini--photo post user">
                                            <div class="post-mini__user-info user__info">
                                                <div class="post-mini__avatar user__avatar">
                                                    <a class="user__avatar-link" href="{{ route('profile', ['id' => $subscription->user->id]) }}">
                                                        <img class="post-mini__picture user__picture"
                                                             src="{{ $subscription->user->avatar }}"
                                                             alt="">
                                                    </a>
                                                </div>
                                                <div class="post-mini__name-wrapper user__name-wrapper">
                                                    <a class="post-mini__name user__name" href="{{ route('profile', ['id' => $subscription->user->id]) }}">
                                                        <span>{{$subscription->user->name}}</span>
                                                    </a>
                                                    <time class="post-mini__time user__additional"
                                                          datetime="{{ $subscription->created_at }}">{{ $subscription->created_at->locale('ru')->diffForHumans() }}
                                                    </time>
                                                </div>
                                            </div>
                                            <div class="post-mini__rating user__rating">
                                                <p class="post-mini__rating-item user__rating-item user__rating-item--publications">
                                                    <span class="post-mini__rating-amount user__rating-amount">{{ $subscription->user->posts->count() }}</span>
                                                    <span class="post-mini__rating-text user__rating-text">публикаций</span>
                                                </p>
                                                <p class="post-mini__rating-item user__rating-item user__rating-item--subscribers">
                                            <span class="post-mini__rating-amount user__rating-amount">
                                                <span class="post-mini__rating-amount user__rating-amount">
                                                     {{ $subscription->user->subscriptions->count('user_id') }}
                                                        </span>
                                            </span>
                                                    <span class="post-mini__rating-text user__rating-text">подписчиков</span>
                                                </p>
                                            </div>
                                            <div class="post-mini__user-buttons user__buttons">

                                                @auth
                                                    @if ($user->id !== auth()->user()->id)
                                                        @php
                                                            $subscribed = false;
                                                            $subscription = auth()->user()->subscriptions()->where('subscribed_to_id', $user->id)->first();
                                                            if ($subscription) {
                                                                $subscribed = true;
                                                            }
                                                        @endphp
                                                        <form id="subscribe-form" action="{{ route('subscribe', $user->id) }}" method="post">
                                                            @csrf
                                                            @if ($subscribed)
                                                                @method('DELETE')
                                                                <button class="post-mini__user-button user__button user__button--subscription button button--main"
                                                        type="submit">Отписаться</button>
                                                    @else
                                                                <button class="post-mini__user-button user__button user__button--subscription button button--main"
                                                                type="submit">Подписаться</button>
                                                    @endif
                                                        </form>
                                                    @endif
                                                @endauth
                                            </div>
                                        </li>
                                    @endforeach
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="/public/js/main.js"></script>
    <script src="/public/js/templates/tabs.js"></script>
@endsection
