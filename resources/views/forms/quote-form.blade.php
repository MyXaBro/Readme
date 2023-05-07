<section class="adding-post__quote tabs__content tabs__content--active">
    <h2 class="visually-hidden">Форма добавления цитаты</h2>
    {!! Form::open(['route' => 'add-quote', 'class' => "adding-post__form form"]) !!}
        <div class="form__text-inputs-wrapper">
            <div class="form__text-inputs">
                <div class="adding-post__input-wrapper form__input-wrapper">
                    {!! htmlspecialchars_decode(Form::label('title', 'Заголовок <span class="form__input-required">*</span></abel>', ['class' => "adding-post__label form__label"])) !!}
                    <div class="form__input-section">
                        {!! Form::text('title', null, ['class' => "adding-post__input form__input", 'placeholder' => "Введите заголовок"]) !!}
                        <button class="form__error-button button" type="button">!<span
                                class="visually-hidden">Информация об ошибке</span></button>
                        <div class="form__error-text">
                            <h3 class="form__error-title">Заголовок сообщения</h3>
                            <p class="form__error-desc">Текст сообщения об ошибке, подробно
                                объясняющий, что не так.</p>
                        </div>
                    </div>
                </div>
                <div class="adding-post__input-wrapper form__textarea-wrapper">
                    {!! htmlspecialchars_decode(Form::label('content', 'Текст цитаты  <span class="form__input-required">*</span>', ['class' => "adding-post__label form__label"]))!!}
                    <div class="form__input-section">
                        {!!  Form::textarea('content', null, ['class' => "adding-post__textarea form__textarea form__input", 'placeholder' => "Текст цитаты"]) !!}
                        <button class="form__error-button button" type="button">!<span
                                class="visually-hidden">Информация об ошибке</span></button>
                        <div class="form__error-text">
                            <h3 class="form__error-title">Заголовок сообщения</h3>
                            <p class="form__error-desc">Текст сообщения об ошибке, подробно
                                объясняющий, что не так.</p>
                        </div>
                    </div>
                </div>
                <div class="adding-post__textarea-wrapper form__input-wrapper">
                    {!! htmlspecialchars_decode(Form::label('quote_author', 'Автор <span class="form__input-required">*</span>', ['class' => "adding-post__label form__label"])) !!}
                    <div class="form__input-section">
                        {!! Form::url('quote_author', null, ['class' => "adding-post__input form__input"]) !!}
                        <button class="form__error-button button" type="button">!<span
                                class="visually-hidden">Информация об ошибке</span></button>
                        <div class="form__error-text">
                            <h3 class="form__error-title">Заголовок сообщения</h3>
                            <p class="form__error-desc">Текст сообщения об ошибке, подробно
                                объясняющий, что не так.</p>
                        </div>
                    </div>
                </div>
                <div class="adding-post__input-wrapper form__input-wrapper">
                    {!! Form::label('hashtags', 'Теги', ['class' => "adding-post__label form__label"]) !!}
                    <div class="form__input-section">
                        {!! Form::text('hashtags', null, ['class' => "adding-post__input form__input", 'placeholder' => "Введите теги"]) !!}
                        <button class="form__error-button button" type="button">!<span
                                class="visually-hidden">Информация об ошибке</span></button>
                        <div class="form__error-text">
                            <h3 class="form__error-title">Заголовок сообщения</h3>
                            <p class="form__error-desc">Текст сообщения об ошибке, подробно
                                объясняющий, что не так.</p>
                        </div>
                    </div>
                </div>
            </div>
            @if($errors->all())
                <div class="form__invalid-block">
                    <b class="form__invalid-slogan">Пожалуйста, исправьте следующие ошибки:</b>
                    <ul class="form__invalid-list">
                        @foreach($errors->all() as $message)
                            <li class="form__invalid-item">{{$message}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    <div class="adding-post__buttons">
        {!! Form::submit('Опубликовать', ['class' => "adding-post__submit button button--main"]) !!}
    </div>
    {!!  Form::close() !!}
</section>
