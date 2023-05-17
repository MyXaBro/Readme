@extends('templates.template-index')
@section('title', 'Readme: блог, каким он должен быть')

@section('styles')
    <link rel="stylesheet" href="/public/css/main.css">
@endsection

@section('content')
  <main>
    <ul>
      <li>
        <a href="/public/main">Главная</a>
      </li>
      <li>
        <a href="{{route('login')}}">Вход</a>
      </li>
      <li>
        <a href="/public/feed">Моя лента</a>
      </li>
      <li>
        <a href="/public/no-content">[Демонстрация] Моя лента (нет публикаций)</a>
      </li>
      <li>
        <a href="/public/messages">Личные сообщения</a>
      </li>
      <li>
        <a href="/public/no-results">Результаты поиска (нет результатов)</a>
      </li>
      <li>
        <a href="/public/popular">Популярное</a>
      </li>
      <li>
        <a href="/public/post-details">Публикация</a>
      </li>
      <li>
        <a href="/public/profile">Профиль</a>
      </li>
      <li>
        <a href="/public/search-results">Результаты поиска</a>
      </li>
      <li>
        <a href="/public/registration">Регистрация</a>
      </li>
      <li>
        <a href="/public/adding-post">Форма добавления поста</a>
      </li>
      <li>
        <a href="/public/modal">[Демонстрация] Модальное окно</a>
      </li>
      <li>
        <a href="/public/reg-validation">[Демонстрация] Непройденная валидация (форма регистрации)</a>
      </li>
      <li>
        <a href="/public/login-validation">[Демонстрация] Непройденная валидация (форма авторизации на главной)</a>
      </li>
    </ul>
  </main>
@endsection
