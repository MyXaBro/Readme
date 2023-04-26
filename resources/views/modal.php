<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readme: добавление публикации</title>
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
            <img class="header__logo" src="/resources//resources/img/logo.svg" alt="Логотип readme" width="128" height="24">
          </a>
          <p class="header__topic">
            micro blogging
          </p>
        </div>
        <form class="header__search-form form" action="#" method="get">
          <div class="header__search">
            <label class="visually-hidden">Поиск</label>
            <input class="header__search-input form__input" type="search">
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
                <a class="header__post-button header__post-button--active button button--transparent" href="#">Закрыть</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <main class="page__main page__main--adding-post">
      <div class="container">
        <h1 class="page__title page__title--adding-post">Добавить публикацию</h1>
      </div>
      <div class="adding-post container">
        <div class="adding-post__tabs-wrapper tabs">
          <div class="adding-post__tabs filters">
            <ul class="adding-post__tabs-list filters__list tabs__list">
              <li class="adding-post__tabs-item filters__item tabs__item">
                <a class="adding-post__tabs-link filters__button filters__button--photo filters__button--active button">
                  <svg class="filters__icon" width="22" height="18">
                    <use xlink:href="#icon-filter-photo"></use>
                  </svg>
                  <span>Фото</span>
                </a>
              </li>
              <li class="adding-post__tabs-item filters__item tabs__item">
                <a class="adding-post__tabs-link filters__button filters__button--video button" href="#">
                  <svg class="filters__icon" width="24" height="16">
                    <use xlink:href="#icon-filter-video"></use>
                  </svg>
                  <span>Видео</span>
                </a>
              </li>
              <li class="adding-post__tabs-item filters__item tabs__item">
                <a class="adding-post__tabs-link filters__button filters__button--text button" href="#">
                  <svg class="filters__icon" width="20" height="21">
                    <use xlink:href="#icon-filter-text"></use>
                  </svg>
                  <span>Текст</span>
                </a>
              </li>
              <li class="adding-post__tabs-item filters__item tabs__item">
                <a class="adding-post__tabs-link filters__button filters__button--quote button" href="#">
                  <svg class="filters__icon" width="21" height="20">
                    <use xlink:href="#icon-filter-quote"></use>
                  </svg>
                  <span>Цитата</span>
                </a>
              </li>
              <li class="adding-post__tabs-item filters__item tabs__item">
                <a class="adding-post__tabs-link filters__button filters__button--link button" href="#">
                  <svg class="filters__icon" width="21" height="18">
                    <use xlink:href="#icon-filter-link"></use>
                  </svg>
                  <span>Ссылка</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="adding-post__tab-content">
            <section class="adding-post__photo tabs__content tabs__content--active">
              <h2 class="visually-hidden">Форма добавления фото</h2>
              <form class="adding-post__form form" action="#" method="post" enctype="multipart/form-data">
                <div class="adding-post__input-wrapper form__input-wrapper">
                  <label class="adding-post__label form__label" for="photo-heading">Заголовок</label>
                  <div class="form__input-section">
                    <input class="adding-post__input form__input" id="photo-heading" type="text" name="photo-heading" placeholder="Введите заголовок">
                    <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                    <div class="form__error-text">
                      <h3 class="form__error-title">Заголовок сообщения</h3>
                      <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                    </div>
                  </div>
                </div>
                <div class="adding-post__input-file-container form__input-container">
                  <div class="adding-post__input-file-wrapper form__input-file-wrapper">
                    <label class="adding-post__file-zone form__file-zone" for="userpic-file-photo">
                      <span class="form__file-zone-text">Перетащите фото сюда</span>
                    </label>
                    <div class="adding-post__input-file-button form__input-file-button">
                      <input class="adding-post__input-file form__input-file" id="userpic-file-photo" type="file" name="userpic-file-photo">
                      <span class="adding-post__input-file-text form__input-file-text">Выбрать фото</span>
                      <svg class="adding-post__attach-icon form__attach-icon" width="10" height="20">
                        <use xlink:href="#icon-attach"></use>
                      </svg>
                    </div>
                  </div>
                  <div class="adding-post__file form__file">
                    <div class="adding-post__image-wrapper form__image-wrapper">
                      <img class="adding-post__image form__image" src="/resources/img/rock-adding.png" alt="Загруженное фото" width="360" height="250">
                    </div>
                    <div class="adding-post__file-data form__file-data">
                      <span class="adding-post__file-name form__file-name">dsc666.jpg</span>
                      <button class="adding-post__delete-button form__delete-button button" type="button">
                        <span>Удалить</span>
                        <svg class="adding-post__delete-icon form__delete-icon" width="12" height="12">
                          <use xlink:href="#icon-close"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="adding-post__buttons">
                  <button class="adding-post__submit button button--main" type="submit">Опубликовать</button>
                  <a class="adding-post__close" href="#">Закрыть</a>
                </div>
              </form>
            </section>

            <section class="adding-post__video tabs__content">
              <h2 class="visually-hidden">Форма добавления видео</h2>
              <form class="adding-post__form form" action="#" method="post" enctype="multipart/form-data">
                <div class="adding-post__input-wrapper form__input-wrapper">
                  <label class="adding-post__label form__label" for="video-heading">Заголовок</label>
                  <div class="form__input-section">
                    <input class="adding-post__input form__input" id="video-heading" type="text" name="video-heading" placeholder="Введите заголовок">
                    <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                    <div class="form__error-text">
                      <h3 class="form__error-title">Заголовок сообщения</h3>
                      <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                    </div>
                  </div>
                </div>
                <div class="adding-post__input-file-container form__input-container">
                  <div class="adding-post__input-file-wrapper form__input-file-wrapper">
                    <label class="adding-post__file-zone form__file-zone" for="userpic-file-video">
                      <span class="form__file-zone-text">Перетащите видео сюда</span>
                    </label>
                    <div class="adding-post__input-file-button form__input-file-button">
                      <input class="adding-post__input-file form__input-file" id="userpic-file-video" type="file" name="userpic-file-video">
                      <span class="adding-post__input-file-text form__input-file-text form__input-file-text--video">Выбрать видео</span>
                      <svg class="adding-post__attach-icon form__attach-icon" width="10" height="20">
                        <use xlink:href="#icon-attach"></use>
                      </svg>
                    </div>
                  </div>
                  <div class="adding-post__file form__file">
                    <div class="adding-post__image-wrapper form__image-wrapper">
                      <img class="adding-post__image form__image" src="/resources/img/coast-adding.png" alt="Загруженное фото" width="360" height="250">
                    </div>
                    <div class="adding-post__file-data form__file-data">
                      <span class="adding-post__file-name form__file-name">dji777.mov</span>
                      <button class="adding-post__delete-button form__delete-button button" type="button">
                        <span>Удалить</span>
                        <svg class="adding-post__delete-icon form__delete-icon" width="12" height="12">
                          <use xlink:href="#icon-close"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="adding-post__buttons">
                  <button class="adding-post__submit button button--main" type="submit">Опубликовать</button>
                  <a class="adding-post__close" href="#">Закрыть</a>
                </div>
              </form>
            </section>

            <section class="adding-post__text tabs__content">
              <h2 class="visually-hidden">Форма добавления текста</h2>
              <form class="adding-post__form form" action="#" method="post">
                <div class="adding-post__input-wrapper form__input-wrapper">
                  <label class="adding-post__label form__label" for="text-heading">Заголовок<span class="form__input-required">*</span></label>
                  <div class="form__input-section">
                    <input class="adding-post__input form__input" id="text-heading" type="text" name="text-heading" placeholder="Введите заголовок">
                    <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                    <div class="form__error-text">
                      <h3 class="form__error-title">Заголовок сообщения</h3>
                      <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                    </div>
                  </div>
                </div>
                <div class="adding-post__textarea-wrapper form__textarea-wrapper">
                  <label class="adding-post__label form__label" for="post-text">Текст поста <span class="form__input-required">*</span></label>
                  <div class="form__input-section">
                    <textarea class="adding-post__textarea form__textarea form__input" id="post-text" placeholder="Введите текст публикации"></textarea>
                    <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                    <div class="form__error-text">
                      <h3 class="form__error-title">Заголовок сообщения</h3>
                      <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                    </div>
                  </div>
                </div>
                <div class="adding-post__buttons">
                  <button class="adding-post__submit button button--main" type="submit">Опубликовать</button>
                  <a class="adding-post__close" href="#">Закрыть</a>
                </div>
              </form>
            </section>

            <section class="adding-post__quote tabs__content">
              <h2 class="visually-hidden">Форма добавления цитаты</h2>
              <form class="adding-post__form form" action="#" method="post">
                <div class="adding-post__input-wrapper form__input-wrapper">
                  <label class="adding-post__label form__label" for="quote-heading">Заголовок</label>
                  <div class="form__input-section">
                    <input class="adding-post__input form__input" id="quote-heading" type="text" name="quote-heading" placeholder="Введите заголовок">
                    <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                    <div class="form__error-text">
                      <h3 class="form__error-title">Заголовок сообщения</h3>
                      <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                    </div>
                  </div>
                </div>
                <div class="adding-post__textarea-container form__input-container">
                  <div class="adding-post__input-wrapper form__textarea-wrapper">
                    <label class="adding-post__label form__label" for="post-text">Текст цитаты</label>
                    <div class="form__input-section">
                      <textarea class="adding-post__textarea adding-post__textarea--quote form__textarea form__input" id="post-text" placeholder="Плейсхолдер инпута"></textarea>
                      <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                      <div class="form__error-text">
                        <h3 class="form__error-title">Заголовок сообщения</h3>
                        <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                      </div>
                    </div>
                  </div>
                  <div class="adding-post__detail form__detail">
                    <p class="adding-post__detail-text form__detail-text">
                      Желательно не превышать длину в 70 знаков, тогда цитата будет выводиться крупным шрифтом.
                    </p>
                  </div>
                </div>
                <div class="adding-post__textarea-wrapper form__input-wrapper">
                  <label class="adding-post__label form__label" for="quote-author">Автор</label>
                  <div class="form__input-section">
                    <input class="adding-post__input form__input" id="quote-author" type="text" name="quote-author">
                    <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                    <div class="form__error-text">
                      <h3 class="form__error-title">Заголовок сообщения</h3>
                      <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                    </div>
                  </div>
                </div>
                <div class="adding-post__buttons">
                  <button class="adding-post__submit button button--main" type="submit">Опубликовать</button>
                  <a class="adding-post__close" href="#">Закрыть</a>
                </div>
              </form>
            </section>

            <section class="adding-post__link tabs__content">
              <h2 class="visually-hidden">Форма добавления ссылки</h2>
              <form class="adding-post__form form" action="#" method="post">
                <div class="adding-post__input-wrapper form__input-wrapper">
                  <label class="adding-post__label form__label" for="link-heading">Заголовок</label>
                  <div class="form__input-section">
                    <input class="adding-post__input form__input" id="link-heading" type="text" name="link-heading" placeholder="Введите заголовок">
                    <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                    <div class="form__error-text">
                      <h3 class="form__error-title">Заголовок сообщения</h3>
                      <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                    </div>
                  </div>
                </div>
                <div class="adding-post__textarea-wrapper form__input-wrapper">
                  <label class="adding-post__label form__label" for="post-link">Ссылка</label>
                  <div class="form__input-section">
                    <input class="adding-post__input form__input" id="post-link" type="text" name="post-link">
                    <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span></button>
                    <div class="form__error-text">
                      <h3 class="form__error-title">Заголовок сообщения</h3>
                      <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                    </div>
                  </div>
                </div>
                <div class="adding-post__buttons">
                  <button class="adding-post__submit button button--main" type="submit">Опубликовать</button>
                  <a class="adding-post__close" href="#">Закрыть</a>
                </div>
              </form>
            </section>
          </div>
        </div>
      </div>
    </main>

    //= components/footer.html

    <div class="modal modal--adding modal--active">
      <div class="modal__wrapper">
        <button class="modal__close-button button" type="button">
          <svg class="modal__close-icon" width="18" height="18">
            <use xlink:href="#icon-close"></use>
          </svg>
          <span class="visually-hidden">Закрыть модальное окно</span></button>
        <div class="modal__content">
          <h1 class="modal__title">Пост добавлен</h1>
          <p class="modal__desc">
            Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сефтью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий.
          </p>
          <div class="modal__buttons">
            <a class="modal__button button button--main" href="#">Синяя кнопка</a>
            <a class="modal__button button button--gray" href="#">Серая кнопка</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
