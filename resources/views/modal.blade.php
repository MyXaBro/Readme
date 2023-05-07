@extends('templates.template')
@section('title', 'Readme: добавление публикаций')

@section('styles')
    <link rel="stylesheet" href="/public/css/main.css">
@endsection

@section('content')

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
@endsection

@section('scripts')
    <script src="/public/js/main.js"></script>
    <script src="/public/libs/dropzone.js"></script>
    <script src="/public/js/templates/dropzone-settings.js"></script>
    <script src="/public/js/templates/sorting.js"></script>
    <script src="/public/js/templates/tabs.js"></script>
    <script src="/public/js/templates/util.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            'use script';

            (function () {
                var activeModal = document.querySelector('.modal--active');
                var modal = document.querySelector('.modal');
                var modalAdding = document.querySelector('.modal--adding');
                var addingPostSubmit = document.querySelector('.adding-post__submit');
                var scrollbarWidth = window.util.getScrollbarWidth() + 'px';
                var pageMainSection = document.querySelector('.page__main-section');
                var footerWrapper = document.querySelector('.footer__wrapper');

                var showModal = function (openButton, modal) {
                    var closeButton = modal.querySelector('.modal__close-button');

                    var onPopupEscPress = function (evt) {
                        window.util.isEscEvent(evt, closeModal);
                    };

                    var closeModal = function (evt) {
                        modal.classList.remove('modal--active');
                        activeModal = false;
                        document.removeEventListener('keydown', onPopupEscPress);
                        document.documentElement.style.overflowY = 'auto';
                        pageMainSection.style.paddingRight = '0';
                        footerWrapper.style.paddingRight = '0';
                    }

                    var openModal = function (evt) {
                        if (activeModal) {
                            activeModal.classList.remove('modal--active');
                        }

                        modal.classList.add('modal--active');
                        activeModal = modal;
                        document.documentElement.style.overflowY = 'hidden';
                        pageMainSection.style.paddingRight = scrollbarWidth;
                        footerWrapper.style.paddingRight = scrollbarWidth;
                        closeButton.focus();

                        closeButton.addEventListener('click', function (evt) {
                            evt.preventDefault();
                            closeModal();
                        });

                        modal.addEventListener('click', function (evt) {
                            if (evt.target === modal) {
                                closeModal();
                            }
                        })

                        document.addEventListener('keydown', onPopupEscPress);
                    }

                    openButton.addEventListener('click', function (evt) {
                        openModal();
                    });
                }

                if (modal) {
                    showModal(addingPostSubmit, modalAdding);
                }
            })();

        });
    </script>
    <script>
        $(function () {
            // Обработка отправки формы при помощи AJAX
            $('.add-photo-form, .add-video-form, .add-text-form, .add-quote-form, .add-link-form').on('submit', function (event) {
                event.preventDefault();

                var form = $(this);
                var url = form.attr('action');
                var method = form.attr('method');
                var data = new FormData(form[0]);

                $.ajax({
                    url: url,
                    type: method,
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        // Обработка успешного ответа сервера
                        if (response.success) {
                            var post = response.post;

                            // Обновление содержимого страницы
                            // TODO: Реализовать обновление содержимого страницы
                        }
                    },
                    error: function (xhr, status, error) {
                        // Обработка ошибки сервера
                        console.error(error);
                    }
                });
            });
        });

    </script>

@endsection
