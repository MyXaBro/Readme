@extends('templates.template')
@section('title', 'Readme: результат поиска')

@section('styles')
    <link rel="stylesheet" href="/public/css/main.css">
@endsection

@section('content')

    <main class="page__main page__main--search-results">
      <h1 class="visually-hidden">Страница результатов поиска</h1>
      <section class="search">
        <h2 class="visually-hidden">Результаты поиска</h2>
        <div class="search__query-wrapper">
          <div class="search__query container">
            <span>Вы искали:</span>
            <span class="search__query-text">{{$query}}</span>
          </div>
        </div>
        <div class="search__results-wrapper">
          <div class="container">
            <div class="search__content">
              @if(count($posts) > 0)
                @foreach($posts as $post)
                  <article class="search__post post post-photo">
                    <header class="post__header post__author">
                      <a class="post__author-link" href="{{ route('profile', ['id' => $post->user->id]) }}">
                        <div class="post__avatar-wrapper">
                          <img class="post__author-avatar" src="{{ $post->user->avatar }}" alt="" width="60" height="60">
                        </div>
                        <div class="post__info">
                          <b class="post__author-name">{{ $post->user->name }}</b>
                          <span class="post__time">{{ $post->created_at->locale('ru')->diffForHumans() }}</span>
                        </div>
                      </a>
                    </header>
                    <div class="post__main">
                      <h2><a href="#">{{ $post->title }}</a></h2>
                      <div class="post-photo__image-wrapper">
                        @if(isset($post->image))
                          <div class="post-details__image-wrapper post-photo__image-wrapper">
                            <img src="{{$post->image}}" alt="" width="760" height="507">
                          </div>
                        @endif
                        @if(isset($post->video))
                          <div class="post-video post-video__block">
                            <iframe width="100%" height="280px" src="{{$post->video}}" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                        @endif
                        @if(isset($post->content))
                          <div class="post__main">
                            <p>{{$post->content}}</p>
                          </div>
                        @endif
                        @if(isset($post->quote_author))
                          <div class="post__author post__author-link post-text__more-link">
                            {{$post->quote_author}}
                          </div>
                        @endif
                        @if(isset($post->link))
                          <div class="post-text__more-link">
                            {{$post->link}}
                          </div>
                        @endif
                        @if(isset($hashtags))
                          <div class="post__tags">
                            @foreach($hashtags as $hashtag)
                              <li>{{ $hashtag->name }}</li>
                            @endforeach
                          </div>
                        @endif
                      </div>
                    </div>
                <footer class="post__footer post__indicators">
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
                  </div>
                </footer>
              </article>
                @endforeach
                @else
                  @include('components.no-results')
              @endif
            </div>
          </div>
        </div>
      </section>
    </main>

    <script src="/public/js/main.js"></script>
@endsection
