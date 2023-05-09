<section class="adding-post__quote tabs__content tabs__content--active">
    <h2 class="visually-hidden">Форма добавления цитаты</h2>
    {!! Form::open(['route' => 'add-quote', 'class' => "adding-post__form form"]) !!}
        <div class="form__text-inputs-wrapper">
            <div class="form__text-inputs">
                <div class="adding-post__input-wrapper form__input-wrapper">
                    {!! htmlspecialchars_decode(Form::label('title', 'Заголовок <span class="form__input-required">*</span></abel>', ['class' => "adding-post__label form__label"])) !!}
                    <div class="form__input-section @if($errors->any('title')) ? form__input-section--error : @endif">
                        {!! Form::text('title', null, ['class' => "adding-post__input form__input", 'placeholder' => "Введите заголовок"]) !!}
                        <button class="form__error-button button" type="button">!<span
                                class="visually-hidden">Информация об ошибке</span></button>
                        <div class="form__error-text">
                            <h3 class="form__error-title">Заголовок сообщения</h3>
                            @if($errors->any('title'))
                                @foreach ($errors->get('title') as $error)
                                    <p class="form__error-desc">{{ $error }}</p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="adding-post__input-wrapper form__textarea-wrapper">
                    {!! htmlspecialchars_decode(Form::label('content', 'Текст цитаты  <span class="form__input-required">*</span>', ['class' => "adding-post__label form__label"]))!!}
                    <div class="form__input-section @if($errors->any('content')) ? form__input-section--error : @endif">
                        {!!  Form::textarea('content', null, ['class' => "adding-post__textarea form__textarea form__input", 'placeholder' => "Текст цитаты"]) !!}
                        <button class="form__error-button button" type="button">!<span
                                class="visually-hidden">Информация об ошибке</span></button>
                        <div class="form__error-text">
                            <h3 class="form__error-title">Заголовок сообщения</h3>
                            @if($errors->any('content'))
                                @foreach ($errors->get('content') as $error)
                                    <p class="form__error-desc">{{ $error }}</p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="adding-post__textarea-wrapper form__input-wrapper">
                    {!! htmlspecialchars_decode(Form::label('quote_author', 'Автор <span class="form__input-required">*</span>', ['class' => "adding-post__label form__label"])) !!}
                    <div class="form__input-section @if($errors->any('quote_author')) ? form__input-section--error : @endif">
                        {!! Form::url('quote_author', null, ['class' => "adding-post__input form__input"]) !!}
                        <button class="form__error-button button" type="button">!<span
                                class="visually-hidden">Информация об ошибке</span></button>
                        <div class="form__error-text">
                            <h3 class="form__error-title">Заголовок сообщения</h3>
                            @if($errors->any('quote_author'))
                                @foreach ($errors->get('quote_author') as $error)
                                    <p class="form__error-desc">{{ $error }}</p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="adding-post__input-wrapper form__input-wrapper">
                    {!! Form::label('hashtags', 'Теги', ['class' => "adding-post__label form__label"]) !!}
                    <div class="form__input-section @if($errors->any('hashtags')) ? form__input-section--error : @endif">
                        {!! Form::text('hashtags', null, ['class' => "adding-post__input form__input", 'placeholder' => "Введите теги"]) !!}
                        <button class="form__error-button button" type="button">!<span
                                class="visually-hidden">Информация об ошибке</span></button>
                        <div class="form__error-text">
                            <h3 class="form__error-title">Заголовок сообщения</h3>
                            @if($errors->any('hashtags'))
                                @foreach ($errors->get('hashtags') as $error)
                                    <p class="form__error-desc">{{ $error }}</p>
                                @endforeach
                            @endif
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
