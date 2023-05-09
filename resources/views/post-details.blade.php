@extends('templates.template')
@section('title', 'Readme:  публикация')

@section('styles')
    <link rel="stylesheet" href="/public/css/main.css">
@endsection

@section('scripts')
    <script src="/public/js/main.js"></script>
@endsection

@section('content')
    <main class="page__main page__main--publication">
        <div class="container">
            <h1 class="page__title page__title--publication">{{ $post->title }}</h1>
            <section class="post-details">
                <h2 class="visually-hidden">Публикация</h2>
                <div class="post-details__wrapper post-photo">
                    <div class="post-details__main-block post post--details">
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
                            @if($hashtags->count() > 0)
                                <div class="post__tags">
                                    @foreach($hashtags as $hashtag)
                                        <li>{{ $hashtag->name }}</li>
                                    @endforeach
                                </div>
                            @endif
                        <div class="post__indicators">
                            <div class="post__buttons">

                                <form method="POST" action="{{ route('likes.store', ['post_id' => $post->id]) }}">
                                    @csrf
                                    <button type="submit" class="post__indicator post__indicator--likes button" title="Лайк">
                                    <svg class="post__indicator-icon" width="20" height="17">
                                        <use xlink:href="#icon-heart"></use>
                                    </svg>
                                    <svg class="post__indicator-icon post__indicator-icon--like-active" width="20"
                                         height="17">
                                        <use xlink:href="#icon-heart-active"></use>
                                    </svg>
                                    <span>{{ $post->likes->count() }}</span>
                                    <span class="visually-hidden">количество лайков</span>
                                    </button>
                                </form>
                                <a class="post__indicator post__indicator--comments button" href="{{ route('comments.show', ['postId' => $post->id]) }}"
                                   title="Комментарии">
                                    <svg class="post__indicator-icon" width="19" height="17">
                                        <use xlink:href="#icon-comment"></use>
                                    </svg>
                                    <span>{{ $post->comments->count() }}</span>
                                    <span class="visually-hidden">количество комментариев</span>
                                </a>
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
                            <span class="post__view" id="post-views">{{ $post->views }}</span>
                        </div>
                        <div class="comments">
                            @include('components.add-comments')
                            @include('comments')
                        </div>
                    </div>
                    <div class="post-details__user user">
                        <div class="post-details__user-info user__info">
                            <div class="post-details__avatar user__avatar">
                                <a class="post-details__avatar-link user__avatar-link" href="/public/profile/{{$user->id}}">
                                    <img class="post-details__picture user__picture" src="{{$user->avatar}}" alt="">
                                </a>
                            </div>
                            <div class="post-details__name-wrapper user__name-wrapper">
                                <a class="post-details__name user__name" href="/public/profile/{{$user->id}}">
                                    <span>{{$user->name}}</span>
                                </a>
                                <time class="post-details__time user__time">на сайте
                                    с {{ $user->created_at->format('d.m.Y') }}</time>
                            </div>
                        </div>
                        <div class="post-details__rating user__rating">
                            <p class="post-details__rating-item user__rating-item user__rating-item--subscribers">
                                <span class="post-details__rating-amount user__rating-amount">{{$user->subscriptions->count()}}</span>
                                <span class="post-details__rating-text user__rating-text">подписчиков</span>
                            </p>
                            <p class="post-details__rating-item user__rating-item user__rating-item--publications">
                                <span class="post-details__rating-amount user__rating-amount">{{$postCount}}</span>
                                <span class="post-details__rating-text user__rating-text">публикации</span>
                            </p>
                        </div>
                        <div class="post-details__user-buttons user__buttons">
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
                                   href="{{ route('messages')}}">Сообщение</a>
                            @endauth

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script src="/public/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src= "/public/js/templates/view_ajax.js"></script>
    <script src ="/public/js/templates/youtube.js"></script>

@endsection
