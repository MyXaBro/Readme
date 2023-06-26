@extends('templates.template-index')
@section('title', 'Readme: блог, каким он должен быть')

@section('styles')
    <link rel="stylesheet" href="/public/css/main.css">
@endsection
@section('content')
  <main>
    <ul>
      <li>
        <a href="{{route('main')}}">Главная</a>
      </li>
      <li>
        <a href="{{route('login')}}">Вход</a>
      </li>
      <li>
        <a href="{{route('register')}}">Регистрация</a>
      </li>
    </ul>
  </main>
@endsection
