@foreach ($posts as $post)
    <article class="profile__post post post-text">
        <header class="post__header">
            <div class="post__author">
                <a class="post__author-link" href="#" title="Автор">
                    <div class="post__avatar-wrapper post__avatar-wrapper--repost">
                        <img class="post__author-avatar"
                             src="{{ $post->user->avatar }}"
                             alt="{{ $post->user->name }}">
                    </div>
                    <div class="post__info">
                        <b class="post__author-name">Репост: {{ $post->user->name }}</b>
                        <time class="post__time">{{ $post->created_at->locale('ru')->diffForHumans() }}</time>
                    </div>
                </a>
            </div>
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
                    <form method="POST" action="{{ route('repost', ['id' => $post->id]) }}">
                        @csrf
                        <input type="hidden" name="repost" value="{{ $post }}">
                        <button type="submit" title="Репост" class="post__indicator post__indicator--repost button">
                            <svg class="post__indicator-icon" width="19" height="17">
                                <use xlink:href="#icon-repost"></use>
                            </svg>
                            <span>{{ $post->reposts_count }}</span>
                            <span class="visually-hidden">количество репостов</span>
                        </button>
                    </form>
                </div>
                <time class="post__time">{{ $post->created_at->locale('ru')->diffForHumans() }}</time>
            </div>
        </footer>

        @include('comments')
        @include('components.add-comments')
    </article>
@endforeach
