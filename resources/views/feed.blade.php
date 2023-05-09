@extends('templates.template')
@section('title', 'Readme: Моя лента')

@section('styles')
    <link rel="stylesheet" href="/public/css/main.css">
@endsection

@section('content')

    <main class="page__main page__main--feed">
        <div class="container">
            <h1 class="page__title page__title--feed">Моя лента</h1>
        </div>
        <div class="page__main-wrapper container">
            <section class="feed">
                <h2 class="visually-hidden">Лента</h2>
                <div class="feed__main-wrapper">
                    <div class="feed__wrapper">

                        @foreach($posts as $post)
                            <article class="feed__post post post-photo">
                                <header class="post__header post__author">
                                    <a class="post__author-link"
                                       href="{{ route('profile', ['id' => $post->user->id]) }}">
                                        <div class="post__avatar-wrapper">
                                            <img class="post__author-avatar" src="{{$post->user->avatar}}" alt=""
                                                 width="60" height="60">
                                        </div>
                                        <div class="post__info">
                                            <b class="post__author-name">{{$post->user->name}}</b>
                                            <span
                                                class="post__time">{{ $post->created_at->locale('ru')->diffForHumans() }}</span>
                                        </div>
                                    </a>
                                </header>
                                <div class="post__main">
                                    <h2><a href="{{ route('post-details', ['id' => $post->id]) }}">{{$post->title}}</a>
                                    </h2>
                                    @if(isset($post->contentType) && $post->contentType->id == 1)
                                        <div class="post-details__image-wrapper post-photo__image-wrapper">
                                            <img src="{{$post->image}}" alt="" width="760" height="507">
                                            <img src="{{$post->link}}" alt="" width="760" height="507">
                                        </div>
                                    @endif
                                    @if(isset($post->contentType) && $post->contentType->id == 2)
                                        <div class="post-video post-video__block">
                                            <iframe width="100%" height="280px" src="{{$post->video}}" frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
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
                                <footer class="post__footer post__indicators">
                                    <div class="post__buttons">
                                        <form method="POST"
                                              action="{{ route('likes.store', ['post_id' => $post->id]) }}">
                                            @csrf
                                            <button type="submit" class="post__indicator post__indicator--likes button"
                                                    title="Лайк">
                                                <svg class="post__indicator-icon" width="20" height="17">
                                                    <use xlink:href="#icon-heart"></use>
                                                </svg>
                                                <svg class="post__indicator-icon post__indicator-icon--like-active"
                                                     width="20"
                                                     height="17">
                                                    <use xlink:href="#icon-heart-active"></use>
                                                </svg>
                                                <span>{{ $post->likes->count() }}</span>
                                                <span class="visually-hidden">количество лайков</span>
                                            </button>
                                        </form>
                                        <a class="post__indicator post__indicator--comments button"
                                           href="{{ route('comments.show', ['postId' => $post->id]) }}"
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
                                </footer>
                            </article>
                        @endforeach
                    </div>
                </div>
                <ul class="feed__filters filters">
                    <li class="feed__filters-item filters__item">
                        <a class="filters__button filters__button--active"
                           href="{{ route('feed', ['filter' => 'all']) }}">
                            <span>Все</span>
                        </a>
                    </li>
                    <li class="feed__filters-item filters__item">
                        <a class="filters__button filters__button--photo button"
                           href="{{ route('feed', ['filter' => 'photo']) }}">
                            <span class="visually-hidden">Фото</span>
                            <svg class="filters__icon" width="22" height="18">
                                <use xlink:href="#icon-filter-photo"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="feed__filters-item filters__item">
                        <a class="filters__button filters__button--video button"
                           href="{{ route('feed', ['filter' => 'video']) }}">
                            <span class="visually-hidden">Видео</span>
                            <svg class="filters__icon" width="24" height="16">
                                <use xlink:href="#icon-filter-video"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="feed__filters-item filters__item">
                        <a class="filters__button filters__button--text button"
                           href="{{ route('feed', ['filter' => 'text']) }}">
                            <span class="visually-hidden">Текст</span>
                            <svg class="filters__icon" width="20" height="21">
                                <use xlink:href="#icon-filter-text"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="feed__filters-item filters__item">
                        <a class="filters__button filters__button--quote button"
                           href="{{ route('feed', ['filter' => 'quotes']) }}">
                            <span class="visually-hidden">Цитата</span>
                            <svg class="filters__icon" width="21" height="20">
                                <use xlink:href="#icon-filter-quote"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="feed__filters-item filters__item">
                        <a class="filters__button filters__button--link button"
                           href="{{ route('feed', ['filter' => 'link']) }}">
                            <span class="visually-hidden">Ссылка</span>
                            <svg class="filters__icon" width="21" height="18">
                                <use xlink:href="#icon-filter-link"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </section>
            <aside class="promo">
                <article class="promo__block promo__block--barbershop">
                    <h2 class="visually-hidden">Рекламный блок</h2>
                    <p class="promo__text">
                        Все еще сидишь на окладе в офисе? Открой свой барбершоп по нашей франшизе!
                    </p>
                    <a class="promo__link" href="#">
                        Подробнее
                    </a>
                </article>
                <article class="promo__block promo__block--technomart">
                    <h2 class="visually-hidden">Рекламный блок</h2>
                    <p class="promo__text">
                        Товары будущего уже сегодня в онлайн-сторе Техномарт!
                    </p>
                    <a class="promo__link" href="#">
                        Перейти в магазин
                    </a>
                </article>
                <article class="promo__block">
                    <h2 class="visually-hidden">Рекламный блок</h2>
                    <p class="promo__text">
                        Здесь<br> могла быть<br> ваша реклама
                    </p>
                    <a class="promo__link" href="#">
                        Разместить
                    </a>
                </article>
            </aside>
        </div>
    </main>

    <script src="/public/js/main.js"></script>
    <script src="/public/js/templates/filters.js"></script>
@endsection
