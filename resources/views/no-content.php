<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readme: моя лента (нет публикаций)</title>
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
                <a class="header__page-link header__page-link--active" title="Моя лента">
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
              <li class="header__profile">
                <a class="header__profile-link" href="#">
                  <div class="header__avatar-wrapper">
                    <img class="header__profile-avatar" src="/resources/img/userpic.jpg" alt="Аватар профиля">
                  </div>
                  <div class="header__profile-name">
                    <span>Антон Глуханько</span>
                    <svg class="header__link-arrow" width="10" height="6">
                      <use xlink:href="#icon-arrow-right-ad"></use>
                    </svg>
                  </div>
                </a>
                <div class="header__tooltip-wrapper">
                  <div class="header__profile-tooltip">
                    <ul class="header__profile-nav">
                      <li class="header__profile-nav-item">
                        <a class="header__profile-nav-link" href="#">
                          <span class="header__profile-nav-text">
                            Мой профиль
                          </span>
                        </a>
                      </li>
                      <li class="header__profile-nav-item">
                        <a class="header__profile-nav-link" href="#">
                          <span class="header__profile-nav-text">
                            Сообщения
                            <i class="header__profile-indicator">2</i>
                          </span>
                        </a>
                      </li>
                      <li class="header__profile-nav-item">
                        <a class="header__profile-nav-link" href="#">
                          <span class="header__profile-nav-text">
                            Настройки
                          </span>
                        </a>
                      </li>
                      <li class="header__profile-nav-item">
                        <a class="header__profile-nav-link" href="#">
                          <span class="header__profile-nav-text">
                            Выход
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <a class="header__post-button button button--transparent" href="adding-post.php">Пост</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <main class="page__main page__main--feed">
      <div class="container">
        <h1 class="page__title page__title--feed">Моя лента</h1>
      </div>
      <div class="page__main-wrapper container">
        <section class="feed">
          <h2 class="visually-hidden">Лента</h2>
          <div class="feed__main-wrapper">
            <div class="feed__wrapper">

            </div>
          </div>
          <ul class="feed__filters filters">
            <li class="feed__filters-item filters__item">
              <a class="filters__button filters__button--active" href="#">
                <span>Все</span>
              </a>
            </li>
            <li class="feed__filters-item filters__item">
              <a class="filters__button filters__button--photo button" href="#">
                <span class="visually-hidden">Фото</span>
                <svg class="filters__icon" width="22" height="18">
                  <use xlink:href="#icon-filter-photo"></use>
                </svg>
              </a>
            </li>
            <li class="feed__filters-item filters__item">
              <a class="filters__button filters__button--video button" href="#">
                <span class="visually-hidden">Видео</span>
                <svg class="filters__icon" width="24" height="16">
                  <use xlink:href="#icon-filter-video"></use>
                </svg>
              </a>
            </li>
            <li class="feed__filters-item filters__item">
              <a class="filters__button filters__button--text button" href="#">
                <span class="visually-hidden">Текст</span>
                <svg class="filters__icon" width="20" height="21">
                  <use xlink:href="#icon-filter-text"></use>
                </svg>
              </a>
            </li>
            <li class="feed__filters-item filters__item">
              <a class="filters__button filters__button--quote button" href="#">
                <span class="visually-hidden">Цитата</span>
                <svg class="filters__icon" width="21" height="20">
                  <use xlink:href="#icon-filter-quote"></use>
                </svg>
              </a>
            </li>
            <li class="feed__filters-item filters__item">
              <a class="filters__button filters__button--link button" href="#">
                <span class="visually-hidden">Ссылка</span>
                <svg class="filters__icon" width="21" height="18">
                  <use xlink:href="#icon-filter-link"></use>
                </svg>
              </a>
            </li>
          </ul>
        </section>
        <aside class="promo">
          <article class="promo__block promo__block--barbershop">
            <h2 class="visually-hidden">Рекламный блок</h2>
            <p class="promo__text">
              Все еще сидишь на окладе в офисе? Открой свой барбершоп по нашей франшизе!
            </p>
            <a class="promo__link" href="#">
              Подробнее
            </a>
          </article>
          <article class="promo__block promo__block--technomart">
            <h2 class="visually-hidden">Рекламный блок</h2>
            <p class="promo__text">
              Товары будущего уже сегодня в онлайн-сторе Техномарт!
            </p>
            <a class="promo__link" href="#">
              Перейти в магазин
            </a>
          </article>
          <article class="promo__block">
            <h2 class="visually-hidden">Рекламный блок</h2>
            <p class="promo__text">
              Здесь<br> могла быть<br> ваша реклама
            </p>
            <a class="promo__link" href="#">
              Разместить
            </a>
          </article>
        </aside>
      </div>
    </main>

    //= components/footer.html

    <script src="/public/js/main.js"></script>
  </body>
</html>
