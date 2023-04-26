<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readme: публикация</title>
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
                <a class="header__page-link header__page-link--active" title="Популярный контент">
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

    <main class="page__main page__main--publication">
      <div class="container">
        <h1 class="page__title page__title--publication">Наконец, обработала фотки!</h1>
        <section class="post-details">
          <h2 class="visually-hidden">Публикация</h2>
          <div class="post-details__wrapper post-photo">
            <div class="post-details__main-block post post--details">
              <div class="post-details__image-wrapper post-photo__image-wrapper">
                <img src="/resources/img/rock-default.jpg" alt="Фото от пользователя" width="760" height="507">
              </div>
              <div class="post__indicators">
                <div class="post__buttons">
                  <a class="post__indicator post__indicator--likes button" href="#" title="Лайк">
                    <svg class="post__indicator-icon" width="20" height="17">
                      <use xlink:href="#icon-heart"></use>
                    </svg>
                    <svg class="post__indicator-icon post__indicator-icon--like-active" width="20" height="17">
                      <use xlink:href="#icon-heart-active"></use>
                    </svg>
                    <span>250</span>
                    <span class="visually-hidden">количество лайков</span>
                  </a>
                  <a class="post__indicator post__indicator--comments button" href="#" title="Комментарии">
                    <svg class="post__indicator-icon" width="19" height="17">
                      <use xlink:href="#icon-comment"></use>
                    </svg>
                    <span>25</span>
                    <span class="visually-hidden">количество комментариев</span>
                  </a>
                  <a class="post__indicator post__indicator--repost button" href="#" title="Репост">
                    <svg class="post__indicator-icon" width="19" height="17">
                      <use xlink:href="#icon-repost"></use>
                    </svg>
                    <span>5</span>
                    <span class="visually-hidden">количество репостов</span>
                  </a>
                </div>
                <span class="post__view">500 просмотров</span>
              </div>
              <div class="comments">
                <form class="comments__form form" action="#" method="post">
                  <div class="comments__my-avatar">
                    <img class="comments__picture" src="/resources/img/userpic.jpg" alt="Аватар пользователя">
                  </div>
                  <div class="form__input-section form__input-section--error">
                      <label>
                        <textarea class="comments__textarea form__textarea form__input"
                            placeholder="Ваш комментарий"></textarea>
                      </label>
                      <label class="visually-hidden">Ваш комментарий</label>
                    <button class="form__error-button button" type="button">!</button>
                    <div class="form__error-text">
                      <h3 class="form__error-title">Ошибка валидации</h3>
                      <p class="form__error-desc">Это поле обязательно к заполнению</p>
                    </div>
                  </div>
                  <button class="comments__submit button button--green" type="submit">Отправить</button>
                </form>
                <div class="comments__list-wrapper">
                  <ul class="comments__list">
                    <li class="comments__item user">
                      <div class="comments__avatar">
                        <a class="user__avatar-link" href="#">
                          <img class="comments__picture" src="/resources/img/userpic-larisa.jpg" alt="Аватар пользователя">
                        </a>
                      </div>
                      <div class="comments__info">
                        <div class="comments__name-wrapper">
                          <a class="comments__user-name" href="#">
                            <span>Лариса Роговая</span>
                          </a>
                          <time class="comments__time" datetime="2019-03-20">1 ч назад</time>
                        </div>
                        <p class="comments__text">
                          Красота!!!1!
                        </p>
                      </div>
                    </li>
                    <li class="comments__item user">
                      <div class="comments__avatar">
                        <a class="user__avatar-link" href="#">
                          <img class="comments__picture" src="/resources/img/userpic-larisa.jpg" alt="Аватар пользователя">
                        </a>
                      </div>
                      <div class="comments__info">
                        <div class="comments__name-wrapper">
                          <a class="comments__user-name" href="#">
                            <span>Лариса Роговая</span>
                          </a>
                          <time class="comments__time" datetime="2019-03-18">2 дня назад</time>
                        </div>
                        <p class="comments__text">
                          Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                        </p>
                      </div>
                    </li>
                  </ul>
                  <a class="comments__more-link" href="#">
                    <span>Показать все комментарии</span>
                    <sup class="comments__amount">45</sup>
                  </a>
                </div>
              </div>
            </div>
            <div class="post-details__user user">
              <div class="post-details__user-info user__info">
                <div class="post-details__avatar user__avatar">
                  <a class="post-details__avatar-link user__avatar-link" href="#">
                    <img class="post-details__picture user__picture" src="/resources/img/userpic-elvira.jpg" alt="Аватар пользователя">
                  </a>
                </div>
                <div class="post-details__name-wrapper user__name-wrapper">
                  <a class="post-details__name user__name" href="#">
                    <span>Эльвира Хайпулинова</span>
                  </a>
                  <time class="post-details__time user__time" datetime="2014-03-20">5 лет на сайте</time>
                </div>
              </div>
              <div class="post-details__rating user__rating">
                <p class="post-details__rating-item user__rating-item user__rating-item--subscribers">
                  <span class="post-details__rating-amount user__rating-amount">1856</span>
                  <span class="post-details__rating-text user__rating-text">подписчиков</span>
                </p>
                <p class="post-details__rating-item user__rating-item user__rating-item--publications">
                  <span class="post-details__rating-amount user__rating-amount">556</span>
                  <span class="post-details__rating-text user__rating-text">публикаций</span>
                </p>
              </div>
              <div class="post-details__user-buttons user__buttons">
                <button class="user__button user__button--subscription button button--main" type="button">Подписаться</button>
                <a class="user__button user__button--writing button button--green" href="#">Сообщение</a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>

    //= components/footer.html

    <script src="/public/js/main.js"></script>
  </body>
</html>
