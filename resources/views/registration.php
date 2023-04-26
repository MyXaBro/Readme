<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readme: регистрация</title>
    <link rel="stylesheet" href="/public/css/main.css">
  </head>
  <body class="page">
     <?php
    require_once(__DIR__ . '/components/sprite.php');
    ?>

    <header class="header">
      <div class="header__wrapper container">
        <div class="header__logo-wrapper">
          <a class="header__logo-link" href="main.php">
            <img class="header__logo" src="/resources/img/logo.svg" alt="Логотип readme" width="128" height="24">
          </a>
          <p class="header__topic">
            micro blogging
          </p>
        </div>
        <form class="header__search-form form" action="#" method="get">
          <div class="header__search">
            <label class="visually-hidden">Поиск</label>
              <label>
                  <input class="header__search-input form__input" type="search">
              </label>
              <button class="header__search-button button" type="submit">
              <svg class="header__search-icon" width="18" height="18">
                <use xlink:href="#icon-search"></use>
              </svg>
              <span class="visually-hidden">Начать поиск</span>
            </button>
          </div>
        </form>
        <div class="header__nav-wrapper">
          <nav class="header__nav">
            <ul class="header__my-nav">
              <li class="header__my-page header__my-page--popular">
                <a class="header__page-link" href="popular.php" title="Популярный контент">
                  <span class="visually-hidden">Популярный контент</span>
                </a>
              </li>
              <li class="header__my-page header__my-page--feed">
                <a class="header__page-link" href="feed.php" title="Моя лента">
                  <span class="visually-hidden">Моя лента</span>
                </a>
              </li>
              <li class="header__my-page header__my-page--messages">
                <a class="header__page-link" href="messages.php" title="Личные сообщения">
                  <span class="visually-hidden">Личные сообщения</span>
                </a>
              </li>
            </ul>
            <ul class="header__user-nav">
              <li class="header__authorization">
                <a class="header__user-button header__authorization-button button" href="login.php">Вход</a>
              </li>
              <li>
                <a class="header__user-button header__user-button--active header__register-button button">Регистрация</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <main class="page__main page__main--registration">
      <div class="container">
        <h1 class="page__title page__title--registration">Регистрация</h1>
      </div>
      <section class="registration container">
        <h2 class="visually-hidden">Форма регистрации</h2>
        <form class="registration__form form" action="#" method="post" enctype="multipart/form-data">
          <div class="form__text-inputs-wrapper">
            <div class="form__text-inputs">
              <div class="registration__input-wrapper form__input-wrapper">
                <label class="registration__label form__label" for="registration-email">Электронная почта <span class="form__input-required">*</span></label>
                <div class="form__input-section">
                  <input class="registration__input form__input" id="registration-email" type="email" name="email" placeholder="Укажите эл.почту">
                  <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                  <div class="form__error-text">
                    <h3 class="form__error-title">Заголовок сообщения</h3>
                    <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                  </div>
                </div>
              </div>
              <div class="registration__input-wrapper form__input-wrapper">
                <label class="registration__label form__label" for="registration-login">Логин <span class="form__input-required">*</span></label>
                <div class="form__input-section">
                  <input class="registration__input form__input" id="registration-login" type="text" name="login"
                         placeholder="Укажите логин">
                  <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                  <div class="form__error-text">
                    <h3 class="form__error-title">Заголовок сообщения</h3>
                    <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                  </div>
                </div>
              </div>
              <div class="registration__input-wrapper form__input-wrapper">
                <label class="registration__label form__label" for="registration-password">Пароль<span class="form__input-required">*</span></label>
                <div class="form__input-section">
                  <input class="registration__input form__input" id="registration-password" type="password" name="password" placeholder="Придумайте пароль">
                  <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                  <div class="form__error-text">
                    <h3 class="form__error-title">Заголовок сообщения</h3>
                    <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                  </div>
                </div>
              </div>
              <div class="registration__input-wrapper form__input-wrapper">
                <label class="registration__label form__label" for="registration-password-repeat">Повтор пароля<span class="form__input-required">*</span></label>
                <div class="form__input-section">
                  <input class="registration__input form__input" id="registration-password-repeat" type="password" name="password-repeat" placeholder="Повторите пароль">
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
                <li class="form__invalid-item">Цитата. Она не должна превышать 70 знаков.</li>
              </ul>
            </div>
          </div>
          <div class="registration__input-file-container form__input-container form__input-container--file">
            <div class="registration__input-file-wrapper form__input-file-wrapper">
              <div class="registration__file-zone form__file-zone dropzone">
                <input class="registration__input-file form__input-file" id="userpic-file" type="file" name="userpic-file" title=" ">
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
          <button class="registration__submit button button--main" type="submit">Отправить</button>
        </form>
      </section>
    </main>

    //= components/footer.html

    <script src="/resources/libs/dropzone.js"></script>
    <script src="/resources/js/templates/dropzone-settings.js"></script>
    <script src="/resources/js/main.js"></script>
  </body>
</html>
