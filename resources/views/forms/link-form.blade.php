<section class="adding-post__link tabs__content tabs__content--active">
    <h2 class="visually-hidden">Форма добавления ссылки</h2>
    {!! Form::open(['route' => 'add-link', 'class' => "adding-post__form form"]) !!}
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
                <div class="adding-post__textarea-wrapper form__input-wrapper">
                    {!! htmlspecialchars_decode(Form::label('link', 'Ссылка <span class="form__input-required">*</span>', ['class' => "adding-post__label form__label"])) !!}
                    <div class="form__input-section @if($errors->any('link')) ? form__input-section--error : @endif">
                        {!! Form::url('link', null, ['class' => "adding-post__input form__input"]) !!}
                        <button class="form__error-button button" type="button">!<span
                                class="visually-hidden">Информация об ошибке</span></button>
                        <div class="form__error-text">
                            <h3 class="form__error-title">Заголовок сообщения</h3>
                            @if($errors->any('link'))
                                @foreach ($errors->get('link') as $error)
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
