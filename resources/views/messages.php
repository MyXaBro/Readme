<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readme: личные сообщения</title>
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
                <a class="header__page-link header__page-link--active" title="Личные сообщения">
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

    <main class="page__main page__main--messages">
      <h1 class="visually-hidden">Личные сообщения</h1>
      <section class="messages tabs">
        <h2 class="visually-hidden">Сообщения</h2>
        <div class="messages__contacts">
          <ul class="messages__contacts-list tabs__list">
            <li class="messages__contacts-item">
              <a class="messages__contacts-tab messages__contacts-tab--active tabs__item tabs__item--active" href="#">
                <div class="messages__avatar-wrapper">
                  <img class="messages__avatar" src="/resources/img/userpic-larisa.jpg" alt="Аватар пользователя">
                </div>
                <div class="messages__info">
                  <span class="messages__contact-name">
                    Лариса Роговая
                  </span>
                  <div class="messages__preview">
                    <p class="messages__preview-text">
                      Озеро Байкал – огромное
                    </p>
                    <time class="messages__preview-time" datetime="2019-05-01T14:40">
                      14:40
                    </time>
                  </div>
                </div>
              </a>
            </li>
            <li class="messages__contacts-item messages__contacts-item--new">
              <a class="messages__contacts-tab tabs__item" href="#">
                <div class="messages__avatar-wrapper">
                  <img class="messages__avatar" src="/resources/img/userpic-petro.jpg" alt="Аватар пользователя">
                  <i class="messages__indicator">2</i>
                </div>
                <div class="messages__info">
                  <span class="messages__contact-name">
                    Петр Демин
                  </span>
                  <div class="messages__preview">
                    <p class="messages__preview-text">
                      Ок, бро! По рукам
                    </p>
                    <time class="messages__preview-time" datetime="2019-05-01T00:15">
                      00:15
                    </time>
                  </div>
                </div>
              </a>
            </li>
            <li class="messages__contacts-item">
              <a class="messages__contacts-tab tabs__item" href="#">
                <div class="messages__avatar-wrapper">
                  <img class="messages__avatar" src="/resources/img/userpic-mark.jpg" alt="Аватар пользователя">
                </div>
                <div class="messages__info">
                  <span class="messages__contact-name">
                    Марк Смолов
                  </span>
                  <div class="messages__preview">
                    <p class="messages__preview-text">
                      Вы: Марк, ждем тебя
                    </p>
                    <time class="messages__preview-time" datetime="2019-01-02T14:40">
                      2 янв
                    </time>
                  </div>
                </div>
              </a>
            </li>
            <li class="messages__contacts-item">
              <a class="messages__contacts-tab tabs__item" href="#">
                <div class="messages__avatar-wrapper">
                  <img class="messages__avatar" src="/resources/img/userpic-tanya.jpg" alt="Аватар пользователя">
                </div>
                <div class="messages__info">
                  <span class="messages__contact-name">
                    Таня Фирсова
                  </span>
                  <div class="messages__preview">
                    <p class="messages__preview-text">
                      Вы: Девушка не
                    </p>
                    <time class="messages__preview-time" datetime="2018-09-30T14:40">
                      31 сент
                    </time>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="messages__chat">
          <div class="messages__chat-wrapper">
            <ul class="messages__list tabs__content tabs__content--active">
              <li class="messages__item">
                <div class="messages__info-wrapper">
                  <div class="messages__item-avatar">
                    <a class="messages__author-link" href="#">
                      <img class="messages__avatar" src="/resources/img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                    </a>
                  </div>
                  <div class="messages__item-info">
                    <a class="messages__author" href="#">
                      Лариса Роговая
                    </a>
                    <time class="messages__time" datetime="2019-05-01T14:40">
                      1 ч назад
                    </time>
                  </div>
                </div>
                <p class="messages__text">
                  Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                </p>
              </li>
              <li class="messages__item messages__item--my">
                <div class="messages__info-wrapper">
                  <div class="messages__item-avatar">
                    <a class="messages__author-link" href="#">
                      <img class="messages__avatar" src="/resources/img/userpic.jpg" alt="Аватар пользователя">
                    </a>
                  </div>
                  <div class="messages__item-info">
                    <a class="messages__author" href="#">
                      Антон Глуханько
                    </a>
                    <time class="messages__time" datetime="2019-05-01T14:39">
                      1 ч назад
                    </time>
                  </div>
                </div>
                <p class="messages__text">
                  Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                </p>
              </li>
              <li class="messages__item">
                <div class="messages__info-wrapper">
                  <div class="messages__item-avatar">
                    <a class="messages__author-link" href="#">
                      <img class="messages__avatar" src="/resources/img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                    </a>
                  </div>
                  <div class="messages__item-info">
                    <a class="messages__author" href="#">
                      Лариса Роговая
                    </a>
                    <time class="messages__time" datetime="2019-05-01T14:39">
                      1 ч назад
                    </time>
                  </div>
                </div>
                <p class="messages__text">
                  Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                </p>
              </li>
            </ul>

            <ul class="messages__list tabs__content">
              <li class="messages__item">
                <div class="messages__info-wrapper">
                  <div class="messages__item-avatar">
                    <a class="messages__author-link" href="#">
                      <img class="messages__avatar" src="/resources/img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                    </a>
                  </div>
                  <div class="messages__item-info">
                    <a class="messages__author" href="#">
                      Лариса Роговая
                    </a>
                    <time class="messages__time" datetime="2019-05-01T14:40">
                      1 ч назад
                    </time>
                  </div>
                </div>
                <p class="messages__text">
                  Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                </p>
              </li>
              <li class="messages__item messages__item--my">
                <div class="messages__info-wrapper">
                  <div class="messages__item-avatar">
                    <a class="messages__author-link" href="#">
                      <img class="messages__avatar" src="/resources/img/userpic.jpg" alt="Аватар пользователя">
                    </a>
                  </div>
                  <div class="messages__item-info">
                    <a class="messages__author" href="#">
                      Антон Глуханько
                    </a>
                    <time class="messages__time" datetime="2019-05-01T14:39">
                      1 ч назад
                    </time>
                  </div>
                </div>
                <p class="messages__text">
                  Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                </p>
              </li>
              <li class="messages__item">
                <div class="messages__info-wrapper">
                  <div class="messages__item-avatar">
                    <a class="messages__author-link" href="#">
                      <img class="messages__avatar" src="/resources/img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                    </a>
                  </div>
                  <div class="messages__item-info">
                    <a class="messages__author" href="#">
                      Лариса Роговая
                    </a>
                    <time class="messages__time" datetime="2019-05-01T14:39">
                      1 ч назад
                    </time>
                  </div>
                </div>
                <p class="messages__text">
                  Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                </p>
              </li>
            </ul>

            <ul class="messages__list tabs__content">
              <li class="messages__item">
                <div class="messages__info-wrapper">
                  <div class="messages__item-avatar">
                    <a class="messages__author-link" href="#">
                      <img class="messages__avatar" src="/resources/img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                    </a>
                  </div>
                  <div class="messages__item-info">
                    <a class="messages__author" href="#">
                      Лариса Роговая
                    </a>
                    <time class="messages__time" datetime="2019-05-01T14:40">
                      1 ч назад
                    </time>
                  </div>
                </div>
                <p class="messages__text">
                  Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                </p>
              </li>
              <li class="messages__item messages__item--my">
                <div class="messages__info-wrapper">
                  <div class="messages__item-avatar">
                    <a class="messages__author-link" href="#">
                      <img class="messages__avatar" src="/resources/img/userpic.jpg" alt="Аватар пользователя">
                    </a>
                  </div>
                  <div class="messages__item-info">
                    <a class="messages__author" href="#">
                      Антон Глуханько
                    </a>
                    <time class="messages__time" datetime="2019-05-01T14:39">
                      1 ч назад
                    </time>
                  </div>
                </div>
                <p class="messages__text">
                  Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                </p>
              </li>
              <li class="messages__item">
                <div class="messages__info-wrapper">
                  <div class="messages__item-avatar">
                    <a class="messages__author-link" href="#">
                      <img class="messages__avatar" src="/resources/img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                    </a>
                  </div>
                  <div class="messages__item-info">
                    <a class="messages__author" href="#">
                      Лариса Роговая
                    </a>
                    <time class="messages__time" datetime="2019-05-01T14:39">
                      1 ч назад
                    </time>
                  </div>
                </div>
                <p class="messages__text">
                  Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                </p>
              </li>
            </ul>

            <ul class="messages__list tabs__content">
              <li class="messages__item">
                <div class="messages__info-wrapper">
                  <div class="messages__item-avatar">
                    <a class="messages__author-link" href="#">
                      <img class="messages__avatar" src="/resources/img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                    </a>
                  </div>
                  <div class="messages__item-info">
                    <a class="messages__author" href="#">
                      Лариса Роговая
                    </a>
                    <time class="messages__time" datetime="2019-05-01T14:40">
                      1 ч назад
                    </time>
                  </div>
                </div>
                <p class="messages__text">
                  Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                </p>
              </li>
              <li class="messages__item messages__item--my">
                <div class="messages__info-wrapper">
                  <div class="messages__item-avatar">
                    <a class="messages__author-link" href="#">
                      <img class="messages__avatar" src="/resources/img/userpic.jpg" alt="Аватар пользователя">
                    </a>
                  </div>
                  <div class="messages__item-info">
                    <a class="messages__author" href="#">
                      Антон Глуханько
                    </a>
                    <time class="messages__time" datetime="2019-05-01T14:39">
                      1 ч назад
                    </time>
                  </div>
                </div>
                <p class="messages__text">
                  Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                </p>
              </li>
              <li class="messages__item">
                <div class="messages__info-wrapper">
                  <div class="messages__item-avatar">
                    <a class="messages__author-link" href="#">
                      <img class="messages__avatar" src="/resources/img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                    </a>
                  </div>
                  <div class="messages__item-info">
                    <a class="messages__author" href="#">
                      Лариса Роговая
                    </a>
                    <time class="messages__time" datetime="2019-05-01T14:39">
                      1 ч назад
                    </time>
                  </div>
                </div>
                <p class="messages__text">
                  Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                </p>
              </li>
            </ul>
          </div>
          <div class="comments">
            <form class="comments__form form" action="#" method="post">
              <div class="comments__my-avatar">
                <img class="comments__picture" src="/resources/img/userpic.jpg" alt="Аватар пользователя">
              </div>
                <label>
                    <textarea class="comments__textarea form__textarea" placeholder="Ваше сообщение"></textarea>
                </label>
                <label class="visually-hidden">Ваше сообщение</label>
              <button class="comments__submit button button--green" type="submit">Отправить</button>
            </form>
          </div>
        </div>
      </section>
    </main>

  <?php
  require_once(__DIR__ . '/components/footer.php');
  ?>

    <script src="/public/js/main.js"></script>
  </body>
</html>
