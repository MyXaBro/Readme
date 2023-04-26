<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readme: авторизация</title>
    <link rel="stylesheet" href="/public/css/main.css">
  </head>
  <body class="page">
    //= components/sprite.html

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
                <a class="header__user-button header__user-button--active header__authorization-button button">Вход</a>
              </li>
              <li>
                <a class="header__user-button header__register-button button">Регистрация</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

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

     <?php
    require_once(__DIR__ . '/components/footer.php');
    ?>

    <script src="/public/js/main.js"></script>
  </body>
</html>
