<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readme: страница результатов поиска</title>
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
                <a class="header__post-button button button--transparent" href="#">Пост</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <main class="page__main page__main--search-results">
      <h1 class="visually-hidden">Страница результатов поиска</h1>
      <section class="search">
        <h2 class="visually-hidden">Результаты поиска</h2>
        <div class="search__query-wrapper">
          <div class="search__query container">
            <span>Вы искали:</span>
            <span class="search__query-text">#photooftheday</span>
          </div>
        </div>
        <div class="search__results-wrapper">
          <div class="container">
            <div class="search__content">
              <article class="search__post post post-photo">
                <header class="post__header post__author">
                  <a class="post__author-link" href="#" title="Автор">
                    <div class="post__avatar-wrapper">
                      <img class="post__author-avatar" src="/resources/img/userpic-elvira.jpg" alt="Аватар пользователя" width="60" height="60">
                    </div>
                    <div class="post__info">
                      <b class="post__author-name">Эльвира Хайпулинова</b>
                      <span class="post__time">15 минут назад</span>
                    </div>
                  </a>
                </header>
                <div class="post__main">
                  <h2><a href="#">Наконец, обработала фотки!</a></h2>
                  <div class="post-photo__image-wrapper">
                    <img src="/resources/img/rock.jpg" alt="Фото от пользователя" width="760" height="396">
                  </div>
                </div>
                <footer class="post__footer post__indicators">
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
                </footer>
              </article>

              <article class="search__post post post-text">
                <header class="post__header post__author">
                  <a class="post__author-link" href="#" title="Автор">
                    <div class="post__avatar-wrapper">
                      <img class="post__author-avatar" src="/resources/img/userpic-tanya.jpg" alt="Аватар пользователя">
                    </div>
                    <div class="post__info">
                      <b class="post__author-name">Таня Фирсова</b>
                      <span class="post__time">25 минут назад</span>
                    </div>
                  </a>
                </header>
                <div class="post__main">
                  <h2><a href="#">Полезный пост про Байкал</a></h2>
                  <p>
                    Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                  </p>
                  <a class="post-text__more-link" href="#">Читать далее</a>
                </div>
                <footer class="post__footer post__indicators">
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
                </footer>
              </article>

              <article class="search__post post post-video">
                <header class="post__header post__author">
                  <a class="post__author-link" href="#" title="Автор">
                    <div class="post__avatar-wrapper">
                      <img class="post__author-avatar" src="/resources/img/userpic-petro.jpg" alt="Аватар пользователя">
                    </div>
                    <div class="post__info">
                      <b class="post__author-name">Петр Демин</b>
                      <span class="post__time">5 часов назад</span>
                    </div>
                  </a>
                </header>
                <div class="post__main">
                  <div class="post-video__block">
                    <div class="post-video__preview">
                      <img src="/resources/img/coast.jpg" alt="Превью к видео" width="760" height="396">
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
                      <svg class="post-video__play-big-icon" width="27" height="28">
                        <use xlink:href="#icon-video-play-big"></use>
                      </svg>
                      <span class="visually-hidden">Запустить проигрыватель</span>
                    </button>
                  </div>
                </div>
                <footer class="post__footer post__indicators">
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
                </footer>
              </article>

              <article class="search__post post post-quote">
                <header class="post__header post__author">
                  <a class="post__author-link" href="#" title="Автор">
                    <div class="post__avatar-wrapper">
                      <img class="post__author-avatar" src="/resources/img/userpic-mark.jpg" alt="Аватар пользователя">
                    </div>
                    <div class="post__info">
                      <b class="post__author-name">Марк Смолов</b>
                      <span class="post__time">2 дня назад</span>
                    </div>
                  </a>
                </header>
                <div class="post__main">
                  <blockquote>
                    <p>
                      Тысячи людей живут без любви, но никто — без воды.
                    </p>
                    <cite>Xью Оден</cite>
                  </blockquote>
                </div>
                <footer class="post__footer post__indicators">
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
                </footer>
              </article>

              <article class="search__post post post-link">
                <header class="post__header post__author">
                  <a class="post__author-link" href="#" title="Автор">
                    <div class="post__avatar-wrapper">
                      <img class="post__author-avatar" src="/resources/img/userpic-larisa.jpg" alt="Аватар пользователя">
                    </div>
                    <div class="post__info">
                      <b class="post__author-name">Лариса Роговая</b>
                      <span class="post__time">Месяц назад</span>
                    </div>
                  </a>
                </header>
                <div class="post__main">
                  <div class="post-link__wrapper">
                    <a class="post-link__external" href="http://www.vitadental.ru" title="Перейти по ссылке">
                      <div class="post-link__icon-wrapper">
                        <img src="/resources/img/logo-vita.jpg" alt="Иконка">
                      </div>
                      <div class="post-link__info">
                        <h3>Стоматология «Вита»</h3>
                        <p>Семейная стоматология в Адлере</p>
                        <span>www.vitadental.ru</span>
                      </div>
                      <svg class="post-link__arrow" width="11" height="16">
                        <use xlink:href="#icon-arrow-right-ad"></use>
                      </svg>
                    </a>
                  </div>
                </div>
                <footer class="post__footer post__indicators">
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
                </footer>
              </article>
            </div>
          </div>
        </div>
      </section>
    </main>

    //= components/footer.html

    <script src="/public/js/main.js"></script>
  </body>
</html>
