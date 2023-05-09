@extends('templates.template')
@section('title', 'Readme:  популярное')

@section('styles')
    <link rel="stylesheet" href="/public/css/main.css">
@endsection

@section('content')

    <section class="page__main page__main--popular">
        <div class="container">
            <h1 class="page__title page__title--popular">Популярное</h1>
        </div>
        <div class="popular container">
            <div class="popular__filters-wrapper">
                <div class="popular__sorting sorting">
                    <b class="popular__sorting-caption sorting__caption">Сортировка:</b>
                    <ul class="popular__sorting-list sorting__list">
                        <li class="sorting__item sorting__item--popular">
                            <a class="sorting__link sorting__link--active" href="{{ route('popular.sort', ['sort' => 'popular']) }}">
                                <span>Популярность</span>
                                <svg class="sorting__icon" width="10" height="12">
                                    <use xlink:href="#icon-sort"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="sorting__item">
                            <a class="sorting__link" href="{{ route('popular.sort', ['sort' => 'likes']) }}">
                                <span>Лайки</span>
                                <svg class="sorting__icon" width="10" height="12">
                                    <use xlink:href="#icon-sort"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="sorting__item">
                            <a class="sorting__link" href="{{ route('popular.sort', ['sort' => 'date']) }}">
                                <span>Дата</span>
                                <svg class="sorting__icon" width="10" height="12">
                                    <use xlink:href="#icon-sort"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="popular__filters filters">
                    <b class="popular__filters-caption filters__caption">Тип контента:</b>
                    <ul class="popular__filters-list filters__list">
                        <li class="popular__filters-item popular__filters-item--all filters__item filters__item--all">
                            <a class="filters__button filters__button--ellipse filters__button--all filters__button--active"
                               href="{{ route('popular.filter', 'all') }}">
                                <span>Все</span>
                            </a>
                        </li>
                        <li class="popular__filters-item filters__item">
                            <a class="filters__button filters__button--photo button" href="{{ route('popular.filter', 'photo') }}">
                                <span class="visually-hidden">Фото</span>
                                <svg class="filters__icon" width="22" height="18">
                                    <use xlink:href="#icon-filter-photo"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="popular__filters-item filters__item">
                            <a class="filters__button filters__button--video button" href="{{ route('popular.filter', 'video') }}">
                                <span class="visually-hidden">Видео</span>
                                <svg class="filters__icon" width="24" height="16">
                                    <use xlink:href="#icon-filter-video"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="popular__filters-item filters__item">
                            <a class="filters__button filters__button--text button" href="{{ route('popular.filter', 'text') }}">
                                <span class="visually-hidden">Текст</span>

                                <svg class="filters__icon" width="20" height="21">
                                    <use xlink:href="#icon-filter-text"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="popular__filters-item filters__item">
                            <a class="filters__button filters__button--quote button" href="{{ route('popular.filter', 'quote') }}">
                                <span class="visually-hidden">Цитата</span>
                                <svg class="filters__icon" width="21" height="20">
                                    <use xlink:href="#icon-filter-quote"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="popular__filters-item filters__item">
                            <a class="filters__button filters__button--link button" href="{{ route('popular.filter', 'link') }}">
                                <span class="visually-hidden">Ссылка</span>
                                <svg class="filters__icon" width="21" height="18">
                                    <use xlink:href="#icon-filter-link"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="popular__posts">
                @foreach($posts as $post)
                    @if(isset($post->contentType) && $post->contentType->id == 4)
                        <article class="popular__post post post-quote">
                            <header class="post__header">
                                <h2><a href="{{ route('post-details', ['id' => $post->id]) }}">{{$post->title}}</a></h2>
                            </header>
                            <div class="post__main">
                                <blockquote>
                                    <p>
                                        {{$post->content}}
                                    </p>
                                    <cite>{{$post->quote_author}}</cite>
                                </blockquote>
                            </div>
                            <footer class="post__footer">
                                <div class="post__author">
                                    <a class="post__author-link" href="/public/profile/{{$post->user->id}}"
                                       title="Автор">
                                        <div class="post__avatar-wrapper">
                                            <img class="post__author-avatar" src="{{$post->user->avatar}}" alt="">
                                        </div>
                                        <div class="post__info">
                                            <b class="post__author-name">{{$post->user->name}}</b>
                                            <time
                                                class="post__time"> {{$post->created_at->locale('ru')->diffForHumans()}}</time>
                                        </div>
                                    </a>
                                </div>
                                <div class="post__indicators">
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
                                    </div>
                                </div>
                            </footer>
                        </article>
                    @endif
                        @if(isset($post->contentType) && $post->contentType->id == 2)
                        <article class="popular__post post post-video">
                            <header class="post__header">
                                <h2><a href="{{ route('post-details', ['id' => $post->id]) }}">{{$post->title}}</a></h2>
                            </header>
                            <div class="post__main">
                                <div class="post-video__block">
                                    <div class="post-video__preview">
                                        <iframe width="360" height="188" src="{{$post->video}}"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                    </div>
                                    <div class="post-video__control">
                                        <button class="post-video__play post-video__play--paused button button--video"
                                                type="button"><span class="visually-hidden">Запустить видео</span>
                                        </button>
                                        <div class="post-video__scale-wrapper">
                                            <div class="post-video__scale">
                                                <div class="post-video__bar">
                                                    <div class="post-video__toggle"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <button
                                            class="post-video__fullscreen post-video__fullscreen--inactive button button--video"
                                            type="button"><span class="visually-hidden">Полноэкранный режим</span>
                                        </button>
                                    </div>
                                    <button class="post-video__play-big button" type="button">
                                        <svg class="post-video__play-big-icon" width="14" height="14">
                                            <use xlink:href="#icon-video-play-big"></use>
                                        </svg>
                                        <span class="visually-hidden">Запустить проигрыватель</span>
                                    </button>
                                </div>
                            </div>
                            <footer class="post__footer">
                                <div class="post__author">
                                    <a class="post__author-link" href="/public/profile/{{$post->user->id}}"
                                       title="Автор">
                                        <div class="post__avatar-wrapper">
                                            <img class="post__author-avatar" src="{{$post->user->avatar}}" alt="">
                                        </div>
                                        <div class="post__info">
                                            <b class="post__author-name">{{$post->user->name}}</b>
                                            <time
                                                class="post__time">{{$post->created_at->locale('ru')->diffForHumans()}}</time>
                                        </div>
                                    </a>
                                </div>
                                <div class="post__indicators">
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
                                    </div>
                                </div>
                            </footer>
                        </article>
                    @endif
                        @if(isset($post->contentType) && $post->contentType->id == 3)
                        <article class="popular__post post post-text">
                            <header class="post__header">
                                <h2><a href="{{ route('post-details', ['id' => $post->id]) }}">{{$post->title}}</a></h2>
                            </header>
                            <div class="post__main">
                                <p>
                                    {{$post->title}}
                                </p>
                                <div class="post-text__more-link-wrapper">
                                    <a class="post-text__more-link" href="#">Читать далее</a>
                                </div>
                            </div>
                            <footer class="post__footer">
                                <div class="post__author">
                                    <a class="post__author-link" href="/public/profile/{{$post->user->id}}"
                                       title="Автор">
                                        <div class="post__avatar-wrapper">
                                            <img class="post__author-avatar" src="{{$post->user->avatar}}" alt="">
                                        </div>
                                        <div class="post__info">
                                            <b class="post__author-name">{{$post->user->name}}</b>
                                            <time
                                                class="post__time">{{$post->created_at->locale('ru')->diffForHumans()}}</time>
                                        </div>
                                    </a>
                                </div>
                                <div class="post__indicators">
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
                                    </div>
                                </div>
                            </footer>
                        </article>
                    @endif
                        @if(isset($post->contentType) && $post->contentType->id == 5)
                        <article class="popular__post post post-link">
                            <header class="post__header">
                                <h2><a href="{{ route('post-details', ['id' => $post->id]) }}">{{$post->title}}</a></h2>
                            </header>
                            <div class="post__main">
                                <div class="post-link__wrapper">
                                    <a class="post-link__external" href="{{$post->link}}" title="Перейти по ссылке">
                                        <div class="post-link__info-wrapper">
                                            <div class="post-link__info">
                                                <h3>{{$post->title}}</h3>
                                            </div>
                                        </div>
                                        <span>{{$post->link}}</span>
                                    </a>
                                </div>
                            </div>
                            <footer class="post__footer">
                                <div class="post__author">
                                    <a class="post__author-link" href="/public/profile/{{$post->user->id}}"
                                       title="Автор">
                                        <div class="post__avatar-wrapper">
                                            <img class="post__author-avatar" src="{{$post->user->avatar}}" alt="">
                                        </div>
                                        <div class="post__info">
                                            <b class="post__author-name">{{$post->user->name}}</b>
                                            <time
                                                class="post__time">{{$post->created_at->locale('ru')->diffForHumans()}}</time>
                                        </div>
                                    </a>
                                </div>
                                <div class="post__indicators">
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
                                    </div>
                                </div>
                            </footer>
                        </article>
                    @endif
                        @if(isset($post->contentType) && $post->contentType->id == 1)
                        <article class="popular__post post post-photo">
                            <header class="post__header">
                                <h2><a href="{{ route('post-details', ['id' => $post->id]) }}">{{$post->title}}</a></h2>
                            </header>
                            <div class="post__main">
                                <div class="post-photo__image-wrapper">
                                    <img src="{{$post->image}}" alt="Фото от пользователя" width="360" height="240">
                                </div>
                            </div>
                            <footer class="post__footer">
                                <div class="post__author">
                                    <a class="post__author-link" href="/public/profile/{{$post->user->id}}"
                                       title="Автор">
                                        <div class="post__avatar-wrapper">
                                            <img class="post__author-avatar" src="{{$post->user->avatar}}" alt="">
                                        </div>
                                        <div class="post__info">
                                            <b class="post__author-name">{{$post->user->name}}</b>
                                            <time
                                                class="post__time">{{$post->created_at->locale('ru')->diffForHumans()}}</time>
                                        </div>
                                    </a>
                                </div>
                                <div class="post__indicators">
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
                                    </div>
                                </div>
                            </footer>
                        </article>
                    @endif
                @endforeach
            </div>
            <div class="popular__page-links">
                @if ($posts->previousPageUrl())
                    <a class="popular__page-link popular__page-link--prev button button--gray" href="{{ $posts->previousPageUrl() }}">Предыдущая страница</a>
                @endif

                @if ($posts->nextPageUrl())
                    <a class="popular__page-link popular__page-link--next button button--gray" href="{{ $posts->nextPageUrl() }}">Следующая страница</a>
                @endif

                <div class="pagination">
                    @for ($i = 1; $i <= $posts->lastPage(); $i++)
                        <a href="{{ $posts->url($i) }}" class="{{ $posts->currentPage() === $i ? 'active' : '' }}">{{ $i }}</a>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <script src="/public/js/main.js"></script>
    <script src="/public/js/templates/sorting.js"></script>
    <script src="/public/js/templates/filters.js"></script>
@endsection
