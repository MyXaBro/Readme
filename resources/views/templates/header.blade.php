<header class="header">
    <div class="header__wrapper container">
        <div class="header__logo-wrapper">
            <a class="header__logo-link" href="{{route('main')}}">
                <img class="header__logo" src="/resources/img/logo.svg" alt="Логотип readme" width="128" height="24">
            </a>
            <p class="header__topic">
                micro blogging
            </p>
        </div>
        <form class="header__search-form form" action="{{ route('search.index') }}" method="get">
            <div class="header__search">
                <label class="visually-hidden">Поиск</label>
                <label>
                    <input class="header__search-input form__input" type="search" name="query"
                           value="{{ old('query') }}">
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
                        <a class="header__page-link" href="{{route('popular')}}" title="Популярный контент">
                            <span class="visually-hidden">Популярный контент</span>
                        </a>
                    </li>
                    <li class="header__my-page header__my-page--feed">
                        <a class="header__page-link" href="{{route('feed')}}" title="Моя лента">
                            <span class="visually-hidden">Моя лента</span>
                        </a>
                    </li>
                    <li class="header__my-page header__my-page--messages">
                        <a class="header__page-link" href="{{route('messages')}}" title="Личные сообщения">
                            <span class="visually-hidden">Личные сообщения</span>
                        </a>
                    </li>
                </ul>
                @if(Auth::check())
                    <a class="header__post-button header__post-button--active button button--transparent"
                       href="{{route('adding-post')}}">Добавить пост</a>
                    <ul class="header__user-nav">
                        <li class="header__profile">
                            <a class="header__profile-link" href="#">
                                <div class="header__avatar-wrapper">
                                    <img class="header__profile-avatar" src="{{Auth::user()->avatar }}" alt="">
                                </div>
                                <div class="header__profile-name">
                                    <span>{{ Auth::user()->name }}</span>
                                    <svg class="header__link-arrow" width="10" height="6">
                                        <use xlink:href="#icon-arrow-right-ad"></use>
                                    </svg>
                                </div>
                            </a>
                            <div class="header__tooltip-wrapper">
                                <div class="header__profile-tooltip">
                                    <ul class="header__profile-nav">
                                        <li class="header__profile-nav-item">
                                            <a class="header__profile-nav-link"
                                               href="{{ route('profile', ['id' => Auth::user()->id]) }}">
                          <span class="header__profile-nav-text">
Мой профиль
</span>
                                            </a>
                                        </li>
                                        <li class="header__profile-nav-item">
                                            <a class="header__profile-nav-link" href="{{route('messages')}}">
                          <span class="header__profile-nav-text">
Сообщения
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
                                            <a class="header__profile-nav-link" href="{{ route('logout') }}">
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
                            @elseif(!Auth::check())
                                <a class="header__post-button header__post-button--active button button--transparent"
                                   href="{{route('login')}}">Войти</a>
                                <a class="header__post-button header__post-button--active button button--transparent"
                                   href="{{route('register')}}">Регистрация</a>
                        </li>
                        @endif

                    </ul>
            </nav>
        </div>
    </div>
</header>
