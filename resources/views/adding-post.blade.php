@extends('templates.template')
@section('title', 'Readme: Добавление поста')

@section('styles')
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/libs/normalize-8.0.1.css">
@endsection

@section('content')
    <main class="page__main page__main--adding-post">
        <div class="page__main-section">
            <div class="container">
                <h1 class="page__title page__title--adding-post">Добавить публикацию</h1>
            </div>
            <div class="adding-post container">
                <div class="adding-post__tabs-wrapper tabs">
                    <div class="adding-post__tabs filters">
                        <ul class="adding-post__tabs-list filters__list tabs__list">
                            <li class="adding-post__tabs-item filters__item">
                                <a class="adding-post__tabs-link filters__button filters__button--photo filters__button--active">
                                    <svg class="filters__icon" width="22" height="18">
                                        <use xlink:href="#icon-filter-photo"></use>
                                    </svg>
                                    <span>Фото</span>
                                </a>
                            </li>
                            <li class="adding-post__tabs-item filters__item">
                                <a class="adding-post__tabs-link filters__button filters__button--video" href="#">
                                    <svg class="filters__icon" width="24" height="16">
                                        <use xlink:href="#icon-filter-video"></use>
                                    </svg>
                                    <span>Видео</span>
                                </a>
                            </li>
                            <li class="adding-post__tabs-item filters__item">
                                <a class="adding-post__tabs-link filters__button filters__button--text" href="#">
                                    <svg class="filters__icon" width="20" height="21">
                                        <use xlink:href="#icon-filter-text"></use>
                                    </svg>
                                    <span>Текст</span>
                                </a>
                            </li>
                            <li class="adding-post__tabs-item filters__item">
                                <a class="adding-post__tabs-link filters__button filters__button--quote" href="#">
                                    <svg class="filters__icon" width="21" height="20">
                                        <use xlink:href="#icon-filter-quote"></use>
                                    </svg>
                                    <span>Цитата</span>
                                </a>
                            </li>
                            <li class="adding-post__tabs-item filters__item">
                                <a class="adding-post__tabs-link filters__button filters__button--link" href="#">
                                    <svg class="filters__icon" width="21" height="18">
                                        <use xlink:href="#icon-filter-link"></use>
                                    </svg>
                                    <span>Ссылка</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="adding-post__tab-content" id="photo-form">
                        @include('forms.photo-form', ['id' => 'photo-form'])
                    </div>
                    <div class="adding-post__tab-content visually-hidden" id="video-form">
                        @include('forms.video-form', ['id' => 'video-form'])
                    </div>
                    <div class="adding-post__tab-content visually-hidden" id="text-form">
                        @include('forms.text-form', ['id' => 'text-form'])
                    </div>
                    <div class="adding-post__tab-content visually-hidden" id="quote-form">
                        @include('forms.quote-form', ['id' => 'quote-form'])
                    </div>
                    <div class="adding-post__tab-content visually-hidden" id="link-form">
                        @include('forms.link-form', ['id' => 'link-form'])
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal modal--adding">
        <div class="modal__wrapper">
            <button class="modal__close-button button" type="button">
                <svg class="modal__close-icon" width="18" height="18">
                    <use xlink:href="#icon-close"></use>
                </svg>
                <span class="visually-hidden">Закрыть модальное окно</span>
            </button>
            <div class="modal__content">
                <h1 class="modal__title">Пост добавлен!</h1>
                <p class="modal__desc">
                    Сейчас вы перейдёте к просмотру поста
                </p>
                <div class="modal__buttons">
                    <a class="modal__button button button--main" href="post-details">Перейти к просмотру</a>
                    <a class="modal__button button button--gray" href="adding-post">Добавить ещё пост</a>
                </div>
            </div>
        </div>
    </div>
    <script src="/public/libs/dropzone.js"></script>
    <script src="/public/js/templates/dropzone-settings.js"></script>
    <script src="/public/js/main.js"></script>
    <script src="/public/js/templates/view_form.js"></script>
    <script src="/public/js/templates/filters.js"></script>
    <script src="/public/js/templates/util.js"></script>
    <script src="/public/js/templates/modal.js"></script>
@endsection
