<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readme: популярное</title>
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

    <section class="page__main page__main--popular">
      <div class="container">
        <h1 class="page__title page__title--popular">Популярное</h1>
      </div>
      <div class="popular container">
        <div class="popular__filters-wrapper">
          <div class="popular__sorting sorting">
            <b class="popular__sorting-caption sorting__caption">Сортировка:</b>
            <ul class="popular__sorting-list sorting__list">
              <li class="sorting__item sorting__item--popular">
                <a class="sorting__link sorting__link--active" href="#">
                  <span>Популярность</span>
                  <svg class="sorting__icon" width="10" height="12">
                    <use xlink:href="#icon-sort"></use>
                  </svg>
                </a>
              </li>
              <li class="sorting__item">
                <a class="sorting__link" href="#">
                  <span>Лайки</span>
                  <svg class="sorting__icon" width="10" height="12">
                    <use xlink:href="#icon-sort"></use>
                  </svg>
                </a>
              </li>
              <li class="sorting__item">
                <a class="sorting__link" href="#">
                  <span>Дата</span>
                  <svg class="sorting__icon" width="10" height="12">
                    <use xlink:href="#icon-sort"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
          <div class="popular__filters filters">
            <b class="popular__filters-caption filters__caption">Тип контента:</b>
            <ul class="popular__filters-list filters__list">
              <li class="popular__filters-item popular__filters-item--all filters__item filters__item--all">
                <a class="filters__button filters__button--ellipse filters__button--all filters__button--active" href="#">
                  <span>Все</span>
                </a>
              </li>
              <li class="popular__filters-item filters__item">
                <a class="filters__button filters__button--photo button" href="#">
                  <span class="visually-hidden">Фото</span>
                  <svg class="filters__icon" width="22" height="18">
                    <use xlink:href="#icon-filter-photo"></use>
                  </svg>
                </a>
              </li>
              <li class="popular__filters-item filters__item">
                <a class="filters__button filters__button--video button" href="#">
                  <span class="visually-hidden">Видео</span>
                  <svg class="filters__icon" width="24" height="16">
                    <use xlink:href="#icon-filter-video"></use>
                  </svg>
                </a>
              </li>
              <li class="popular__filters-item filters__item">
                <a class="filters__button filters__button--text button" href="#">
                  <span class="visually-hidden">Текст</span>
                  <svg class="filters__icon" width="20" height="21">
                    <use xlink:href="#icon-filter-text"></use>
                  </svg>
                </a>
              </li>
              <li class="popular__filters-item filters__item">
                <a class="filters__button filters__button--quote button" href="#">
                  <span class="visually-hidden">Цитата</span>
                  <svg class="filters__icon" width="21" height="20">
                    <use xlink:href="#icon-filter-quote"></use>
                  </svg>
                </a>
              </li>
              <li class="popular__filters-item filters__item">
                <a class="filters__button filters__button--link button" href="#">
                  <span class="visually-hidden">Ссылка</span>
                  <svg class="filters__icon" width="21" height="18">
                    <use xlink:href="#icon-filter-link"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="popular__posts">
          <article class="popular__post post post-quote">
            <header class="post__header">
              <h2><a href="#">Цитата дня</a></h2>
            </header>
            <div class="post__main">
              <blockquote>
                <p>
                  Тысячи людей живут без любви, но никто — без воды.
                </p>
                <cite>Xью Оден</cite>
              </blockquote>
            </div>
            <footer class="post__footer">
              <div class="post__author">
                <a class="post__author-link" href="#" title="Автор">
                  <div class="post__avatar-wrapper">
                    <img class="post__author-avatar" src="/resources/img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                  </div>
                  <div class="post__info">
                    <b class="post__author-name">Лариса Роговая</b>
                    <time class="post__time" datetime="2019-03-30" title="30.03.2019 15:34">Месяц назад</time>
                  </div>
                </a>
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
                </div>
              </div>
            </footer>
          </article>

          <article class="popular__post post post-video">
            <header class="post__header">
              <h2><a href="#">Полезный пост про Байкал</a></h2>
            </header>
            <div class="post__main">
              <div class="post-video__block">
                <div class="post-video__preview">
                  <img src="/resources/img/coast-medium.jpg" alt="Превью к видео" width="360" height="188">
                </div>
                <div class="post-video__control">
                  <button class="post-video__play post-video__play--paused button button--video" type="button"><span class="visually-hidden">Запустить видео</span></button>
                  <div class="post-video__scale-wrapper">
                    <div class="post-video__scale">
                      <div class="post-video__bar">
                        <div class="post-video__toggle"></div>
                      </div>
                    </div>
                  </div>
                  <button class="post-video__fullscreen post-video__fullscreen--inactive button button--video" type="button"><span class="visually-hidden">Полноэкранный режим</span></button>
                </div>
                <button class="post-video__play-big button" type="button">
                  <svg class="post-video__play-big-icon" width="14" height="14">
                    <use xlink:href="#icon-video-play-big"></use>
                  </svg>
                  <span class="visually-hidden">Запустить проигрыватель</span>
                </button>
              </div>
            </div>
            <footer class="post__footer">
              <div class="post__author">
                <a class="post__author-link" href="#" title="Автор">
                  <div class="post__avatar-wrapper">
                    <img class="post__author-avatar" src="/resources/img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                  </div>
                  <div class="post__info">
                    <b class="post__author-name">Лариса Роговая</b>
                    <time class="post__time" datetime="2019-03-30">Месяц назад</time>
                  </div>
                </a>
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
                </div>
              </div>
            </footer>
          </article>

          <article class="popular__post post post-text">
            <header class="post__header">
              <h2><a href="#">Полезный пост про Байкал</a></h2>
            </header>
            <div class="post__main">
              <p>
                Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
              </p>
              <div class="post-text__more-link-wrapper">
                <a class="post-text__more-link" href="#">Читать далее</a>
              </div>
            </div>
            <footer class="post__footer">
              <div class="post__author">
                <a class="post__author-link" href="#" title="Автор">
                  <div class="post__avatar-wrapper">
                    <img class="post__author-avatar" src="/resources/img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                  </div>
                  <div class="post__info">
                    <b class="post__author-name">Лариса Роговая</b>
                    <time class="post__time" datetime="2019-03-30">Месяц назад</time>
                  </div>
                </a>
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
                </div>
              </div>
            </footer>
          </article>

          <article class="popular__post post post-link">
            <header class="post__header">
              <h2><a href="#">Делюсь с вами ссылочкой</a></h2>
            </header>
            <div class="post__main">
              <div class="post-link__wrapper">
                <a class="post-link__external" href="http://www.vitadental.ru" title="Перейти по ссылке">
                  <div class="post-link__info-wrapper">
                    <div class="post-link__icon-wrapper">
                      <img src="/resources/img/logo-vita.jpg" alt="Иконка">
                    </div>
                    <div class="post-link__info">
                      <h3>Стоматология «Вита»</h3>
                      <p>Семейная стоматология в Адлере</p>
                    </div>
                  </div>
                  <span>www.vitadental.ru</span>
                </a>
              </div>
            </div>
            <footer class="post__footer">
              <div class="post__author">
                <a class="post__author-link" href="#" title="Автор">
                  <div class="post__avatar-wrapper">
                    <img class="post__author-avatar" src="/resources/img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                  </div>
                  <div class="post__info">
                    <b class="post__author-name">Лариса Роговая</b>
                    <time class="post__time" datetime="2019-03-30">Месяц назад</time>
                  </div>
                </a>
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
                </div>
              </div>
            </footer>
          </article>

          <article class="popular__post post post-photo">
            <header class="post__header">
              <h2><a href="#">Наконец, обработал фотки!</a></h2>
            </header>
            <div class="post__main">
              <div class="post-photo__image-wrapper">
                <img src="/resources/img/rock-medium.jpg" alt="Фото от пользователя" width="360" height="240">
              </div>
            </div>
            <footer class="post__footer">
              <div class="post__author">
                <a class="post__author-link" href="#" title="Автор">
                  <div class="post__avatar-wrapper">
                    <img class="post__author-avatar" src="/resources/img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                  </div>
                  <div class="post__info">
                    <b class="post__author-name">Лариса Роговая</b>
                    <time class="post__time" datetime="2019-03-30">Месяц назад</time>
                  </div>
                </a>
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
                </div>
              </div>
            </footer>
          </article>

          <article class="popular__post post post-quote">
            <header class="post__header">
              <h2><a href="#">Цитата дня</a></h2>
            </header>
            <div class="post__main">
              <blockquote>
                <p>
                  Тысячи людей живут без любви, но никто — без воды.
                </p>
                <cite>Xью Оден</cite>
              </blockquote>
            </div>
            <footer class="post__footer">
              <div class="post__author">
                <a class="post__author-link" href="#" title="Автор">
                  <div class="post__avatar-wrapper">
                    <img class="post__author-avatar" src="/resources/img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                  </div>
                  <div class="post__info">
                    <b class="post__author-name">Лариса Роговая</b>
                    <time class="post__time" datetime="2019-03-30">Месяц назад</time>
                  </div>
                </a>
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
                </div>
              </div>
            </footer>
          </article>
        </div>
        <div class="popular__page-links">
          <a class="popular__page-link popular__page-link--prev button button--gray" href="#">Предыдущая страница</a>
          <a class="popular__page-link popular__page-link--next button button--gray" href="#">Следующая страница</a>
        </div>
      </div>
    </section>

    //= components/footer.html

    <script src="/public/js/main.js"></script>
  </body>
</html>
