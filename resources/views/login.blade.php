@extends('templates.template')
@section('title', 'Readme: авторизация')

@section('styles')
    <link rel="stylesheet" href="/public/css/main.css">
@endsection

@section('scripts')
    <script src="/public/js/main.js"></script>
@endsection

@section('content')

    <main class="page__main page__main--login">
      <div class="container">
        <h1 class="page__title page__title--login">Вход</h1>
      </div>
      <section class="login container">
        <h2 class="visually-hidden">Форма авторизации</h2>
        <form class="login__form form" action="#" method="post">
          <div class="form__text-inputs-wrapper">
            <div class="form__text-inputs">
              <div class="login__input-wrapper form__input-wrapper">
                <label class="login__label form__label" for="login-email">Электронная почта <span class="form__input-required">*</span></label>
                <div class="form__input-section">
                  <input class="login__input form__input" id="login-email" type="email" name="email" placeholder="Укажите эл.почту">
                  <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                  <div class="form__error-text">
                    <h3 class="form__error-title">Заголовок сообщения</h3>
                    <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                  </div>
                </div>
              </div>
              <div class="login__input-wrapper form__input-wrapper">
                <label class="login__label form__label" for="login-password">Пароль <span class="form__input-required">*</span></label>
                <div class="form__input-section">
                  <input class="login__input form__input" id="login-password" type="password" name="password" placeholder="Введите пароль">
                  <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                  <div class="form__error-text">
                    <h3 class="form__error-title">Заголовок сообщения</h3>
                    <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="form__invalid-block">
              <b class="form__invalid-slogan">Пожалуйста, исправьте следующие ошибки:</b>
              <ul class="form__invalid-list">
                <li class="form__invalid-item">Заголовок. Это поле должно быть заполнено.</li>
              </ul>
            </div>
          </div>
          <button class="login__submit button button--main" type="submit">Отправить</button>
        </form>
      </section>
    </main>
@endsection
