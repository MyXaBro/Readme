@extends('templates.template')
@section('title', 'Readme: авторизация')

@section('styles')
    <link rel="stylesheet" href="/public/css/main.css">
@endsection

@section('content')

    <main class="page__main page__main--login">
        <div class="container">
            <h1 class="page__title page__title--login">Вход</h1>
        </div>
        <section class="login container">
            <h2 class="visually-hidden">Форма авторизации</h2>
            {!! Form::open(['route' => 'login', 'class' =>'login__form form']) !!}
            <div class="form__text-inputs-wrapper">
                <div class="form__text-inputs">
                    <div class="login__input-wrapper form__input-wrapper">
                        @csrf
                        {!! htmlspecialchars_decode(Form::label('email' , 'Электронная почта <span class= "form__input-required">*</span>', ['class' =>"login__label form__label"])) !!}
                        <div class="form__input-section">
                            {!! Form::email('email', null, ['class' => 'login__input form__input form__input--error', 'placeholder' => 'Укажите эл.почту']) !!}
                            <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span>
                            </button>
                            <div class="form__error-text">
                                <h3 class="form__error-title">Заголовок сообщения</h3>
                                <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не
                                    так.</p>
                            </div>
                        </div>
                    </div>
                    <div class="login__input-wrapper form__input-wrapper">
                        {!!  htmlspecialchars_decode(Form::label('password', 'Пароль <span class="form__input-required">*</span>', ['class'=>"login__label form__label"])) !!}
                        <div class="form__input-section">
                            {!! Form::password('password', ['class'=>"login__input form__input", 'placeholder' => "Введите пароль"]) !!}
                            <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span>
                            </button>
                            <div class="form__error-text">
                                <h3 class="form__error-title">Заголовок сообщения</h3>
                                <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не
                                    так.</p>
                            </div>
                        </div>
                    </div>
                </div>
                @if($errors->any())
                <div class="form__invalid-block">
                    <b class="form__invalid-slogan">Пожалуйста, исправьте следующие ошибки:</b>
                    @foreach($errors->all() as $message)
                    <ul class="form__invalid-list">
                        <li class="form__invalid-item">{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            {!! Form::submit('Отправить', ['class'=>"login__submit button button--main"]) !!}
            {!! Form::close() !!}
        </section>
    </main>
    <script src="/public/js/main.js"></script>
@endsection
