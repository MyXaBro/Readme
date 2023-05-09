<section class="adding-post__photo tabs__content tabs__content--active" id="photo">
    <h2 class="visually-hidden">Форма добавления фото</h2>
    {!! Form::open(['route' => 'add-photo', 'enctype' => 'multipart/form-data']) !!}
    <div class="form__text-inputs-wrapper">
        <div class="form__text-inputs">
            <div class="adding-post__input-wrapper form__input-wrapper">
                @csrf
                {!! htmlspecialchars_decode(Form::label('title', 'Заголовок <span class="form__input-required">*</span></label>', ['class' => "adding-post__label form__label"])) !!}
                <div class="form__input-section @if($errors->any('title')) ? form__input-section--error : @endif">
                    {!! Form::text('title', null , ['class' => "adding-post__input form__input", 'placeholder' => "Введите заголовок"]) !!}
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
            <div class="adding-post__input-wrapper form__input-wrapper">
                {!! Form::label('link', 'Ссылка из
                    интернета', ['class' => "adding-post__label form__label"]) !!}
                <div class="form__input-section @if($errors->any('link')) ? form__input-section--error : @endif">
                    {!! Form::url('link', null, ['class' => "adding-post__input form__input", 'placeholder' => "Введите ссылку"]) !!}
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
                    {!! Form::text('hashtags',null, ['class' => 'adding-post__input form__input', 'multiple' => 'multiple', 'placeholder' => 'Введите теги', 'data-tags' => 'true']) !!}
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
        @if($errors->any())
        <div class="form__invalid-block">
            <b class="form__invalid-slogan">Пожалуйста, исправьте следующие ошибки:</b>
            <ul class="form__invalid-list">
                @foreach($errors->all() as $message)
                <li class="form__invalid-item"> {{$message}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div
        class="adding-post__input-file-container form__input-container form__input-container--file">
        <div class="adding-post__input-file-wrapper form__input-file-wrapper">
            <div
                class="adding-post__file-zone adding-post__file-zone--photo form__file-zone dropzone">
                <input class="adding-post__input-file form__input-file"
                       id="userpic-file-photo"
                       type="file" name="image" title="Добавление фото">
                <div class="form__file-zone-text">
                    <span>Перетащите фото сюда</span>
                </div>
            </div>
            <button
                class="adding-post__input-file-button form__input-file-button form__input-file-button--photo button"
                type="button">
                <span>Выбрать фото</span>
                <svg class="adding-post__attach-icon form__attach-icon" width="10"
                     height="20">
                    <use xlink:href="#icon-attach"></use>
                </svg>
            </button>
        </div>
        <div
            class="adding-post__file adding-post__file--photo form__file dropzone-previews">

        </div>
    </div>
    <div class="adding-post__buttons">
     {!! Form::submit('Опубликовать', ['class' => "adding-post__submit button button--main"]) !!}
    </div>
    {!!  Form::close() !!}
</section>
