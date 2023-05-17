@extends('templates.template')
@section('title', 'Readme: регистрация')

@section('styles')
    <link rel="stylesheet" href="/public/css/main.css">
@endsection

@section('content')

    <main class="page__main page__main--registration">
      <div class="container">
        <h1 class="page__title page__title--registration">Регистрация</h1>
      </div>
      <section class="registration container">
        <h2 class="visually-hidden">Форма регистрации</h2>
          {!! Form::open(['route' => 'register', 'enctype' => 'multipart/form-data']) !!}
          <div class="form__text-inputs-wrapper">
            <div class="form__text-inputs">
              <div class="registration__input-wrapper form__input-wrapper">
                  @csrf
                  {!! htmlspecialchars_decode(Form::label('email' , 'Электронная почта <span class= "form__input-required">*</span>', ['class' => 'registration__label form__label'])) !!}
                <div class="form__input-section @if($errors->any('email')) ? form__input-section--error : @endif">
                    {!! Form::email('email', null, ['class' => 'registration__input form__input form__input--error', 'placeholder' => 'Укажите эл.почту']) !!}
                  <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                  <div class="form__error-text">
                    <h3 class="form__error-title">Заголовок сообщения</h3>
                      @if($errors->any('email'))
                          @foreach ($errors->get('email') as $error)
                              <p class="form__error-desc">{{ $error }}</p>
                          @endforeach
                      @endif
                  </div>
                </div>
              </div>
                <div class="registration__input-wrapper form__input-wrapper">
                    {!! htmlspecialchars_decode(Form::label('name', 'Логин <span class="form__input-required">*</span>', ['class' =>"registration__label form__label"])) !!}
                    <div class="form__input-section  @if($errors->any('name')) ? form__input-section--error : @endif">
                        {!! Form::text('name', null, ['class' => "registration__input form__input", 'placeholder' => "Укажите логин"]) !!}
                        <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span>
                        </button>
                        <div class="form__error-text">
                            <h3 class="form__error-title">Заголовок сообщения</h3>
                            @if($errors->any('name'))
                                @foreach ($errors->get('name') as $error)
                                    <p class="form__error-desc">{{ $error }}</p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
              <div class="registration__input-wrapper form__input-wrapper">
                  {!!  htmlspecialchars_decode(Form::label('password', 'Пароль <span class="form__input-required">*</span>', ['class'=>"registration__label form__label"])) !!}
                <div class="form__input-section  @if($errors->any('password')) ? form__input-section--error : @endif">
                    {!! Form::password('password', ['class'=>"registration__input form__input", 'placeholder' => "Придумайте пароль"]) !!}
                  <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                  <div class="form__error-text">
                    <h3 class="form__error-title">Заголовок сообщения</h3>
                      @if($errors->any('password'))
                          @foreach ($errors->get('password') as $error)
                              <p class="form__error-desc">{{ $error }}</p>
                          @endforeach
                      @endif
                  </div>
                </div>
              </div>
              <div class="registration__input-wrapper form__input-wrapper">
                  {!! htmlspecialchars_decode(Form::label('password_confirmation', 'Повтор пароля <span class="form__input-required">*</span>', ['class' => "registration__label form__label" ])); !!}
                  <div class="form__input-section  @if($errors->any('password_confirmation')) ? form__input-section--error : @endif">
                      {!! Form::password('password_confirmation', ['class'=> "registration__input form__input", 'placeholder' => "Повторите пароль"]);!!}
                  <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                  <div class="form__error-text">
                    <h3 class="form__error-title">Заголовок сообщения</h3>
                      @if($errors->any('password_confirmation'))
                          @foreach ($errors->get('password_confirmation') as $error)
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
                      @foreach($errors->all() as $message)
                          <ul class="form__invalid-list">
                              <li class="form__invalid-item">
                                  {{$message}}
                              </li>
                              @endforeach
                          </ul>
                  </div>
              @endif
          </div>
          <div class="registration__input-file-container form__input-container form__input-container--file">
            <div class="registration__input-file-wrapper form__input-file-wrapper">
              <div class="registration__file-zone form__file-zone" for="userpic-file">
                  {!! Form::file('avatar', ['class' => 'registration__input-file form__input-file', 'name' => 'avatar']) !!}
                  <div class="form__file-zone-text">
                      <span>Перетащите фото сюда</span>
                  </div>
              </div>
                <button class="registration__input-file-button form__input-file-button button" type="button">
                    <span>Выбрать фото</span>
                    <svg class="registration__attach-icon form__attach-icon" width="10" height="20">
                        <use xlink:href="#icon-attach"></use>
                    </svg>
                </button>
            </div>
              <div class="registration__file form__file dropzone-previews">

              </div>
          </div>
          {!! Form::submit('Отправить', ['class' => "registration__submit button button--main"]);!!}
          {!! Form::close(); !!}
      </section>
    </main>
    <script src="/public/js/main.js"></script>
@endsection
