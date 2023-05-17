
    <div class="comments__list-wrapper">
        <ul class="comments__list">
            @foreach ($comments as $comment)
                <li class="comments__item user">
                    <div class="comments__avatar">
                        <a class="user__avatar-link" href="{{ route('profile', ['id' => $comment->user->id]) }}">
                            <img class="comments__picture" src="{{$user->avatar}}" alt="">
                        </a>
                    </div>
                    <div class="comments__info">
                        <div class="comments__name-wrapper">
                            <a class="comments__user-name" href="{{ route('profile', ['id' => $comment->user->id]) }}">
                                {{ $comment->user->name }}
                            </a>
                            <time class="comments__time">{{$comment->created_at->locale('ru')->diffForHumans()}}</time>
                        </div>
                        <p class="comments__text">{{$comment->content}}</p>
                    </div>
                </li>
            @endforeach
        </ul>
        <a class="comments__more-link" href="#">
            <span>Показать все комментарии</span>
            <sup class="comments__amount">{{ $comments->count() }}</sup>
        </a>
    </div>

