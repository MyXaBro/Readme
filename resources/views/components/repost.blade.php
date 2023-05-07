@foreach ($user->reposts as $repost)
    <article class="profile__post post post-text">
        <header class="post__header">
            <div class="post__author">
                <a class="post__author-link" href="#" title="Автор">
                    <div class="post__avatar-wrapper post__avatar-wrapper--repost">
                        <img class="post__author-avatar"
                             src="{{ $repost->post->user->avatar }}"
                             alt="{{ $repost->post->user->name }}">
                    </div>
                    <div class="post__info">
                        <b class="post__author-name">Репост: {{ $repost->post->user->name }}</b>
                        <time class="post__time">{{ $repost->created_at->local('ru')->diffForHumans() }}</time>
                    </div>
                </a>
            </div>
        </header>
        <div class="post__main">
            <h2><a href="#">{{$repost->title}}</a></h2>
            <p>
                {{$repost->content}}
            </p>
            <a class="post-text__more-link" href="#">Читать далее</a>
        </div>
        <footer class="post__footer">
            <div class="post__indicators">
                <div class="post__buttons">
                    <a class="post__indicator post__indicator--likes button" href="#"
                       title="Лайк">
                        <svg class="post__indicator-icon" width="20" height="17">
                            <use xlink:href="#icon-heart"></use>
                        </svg>
                        <svg class="post__indicator-icon post__indicator-icon--like-active"
                             width="20" height="17">
                            <use xlink:href="#icon-heart-active"></use>
                        </svg>
                        <span>250</span>
                        <span class="visually-hidden">количество лайков</span>
                    </a>
                    <a class="post__indicator post__indicator--repost button" href="#"
                       title="Репост">
                        <svg class="post__indicator-icon" width="19" height="17">
                            <use xlink:href="#icon-repost"></use>
                        </svg>
                        <span>5</span>
                        <span class="visually-hidden">количество репостов</span>
                    </a>
                </div>
                <time class="post__time">{{ $repost->created_at->local('ru')->diffForHumans() }}</time>
            </div>
            <ul class="post__tags">

                <li><a href="#">#nature</a></li>

            </ul>
        </footer>

        @include('comments')
        @include('components.add-comments')
    </article>
@endforeach