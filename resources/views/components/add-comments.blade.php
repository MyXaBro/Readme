<form class="comments__form form" action="{{ isset($post) ? route('comments.store', $post->id) : '#' }}" method="post">
@csrf
    <div class="comments__my-avatar">
        <img class="comments__picture" src="{{$user->avatar}}" alt="">
    </div>

    <div class="form__input-section {{ $errors->has('content') ? 'form__input-section--error' : '' }}">
        <label>
            <textarea name="content" class="comments__textarea form__textarea form__input" placeholder="Ваш комментарий"></textarea>
        </label>
        @if($errors->has('content'))
            <label class="visually-hidden">Ваш комментарий</label>
            <button class="form__error-button button" type="button">!</button>
            <div class="form__error-text">
                <h3 class="form__error-title">Ошибка валидации</h3>
                <p class="form__error-desc">{{ $errors->first('content') }}</p>
            </div>
        @endif
    </div>
    <button class="comments__submit button button--green" type="submit">Отправить</button>
</form>

