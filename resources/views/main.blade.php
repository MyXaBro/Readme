@extends('templates.template-main')
@section('title', 'Readme: блог, каким он должен быть')

@section('styles')
    <link rel="stylesheet" href="/public/css/main.css">
@endsection

@section('scripts')
    <script src="/public/js/main.js"></script>
@endsection

@section('content')
  <main>
      <h1 class="visually-hidden">Главная страница сайта по созданию микроблога readme</h1>
      <div class="page__main-wrapper page__main-wrapper--intro container">
        <section class="intro">
          <h2 class="visually-hidden">Наши преимущества</h2>
          <b class="intro__slogan">Блог, каким<br> он должен быть</b>
          <ul class="intro__advantages-list">
            <li class="intro__advantage intro__advantage--ease">
              <p class="intro__advantage-text">
                Есть все необходимое для&nbsp;простоты публикации
              </p>
            </li>
            <li class="intro__advantage intro__advantage--no-excess">
              <p class="intro__advantage-text">
                Нет ничего лишнего, отвлекающего от сути
              </p>
            </li>
          </ul>
        </section>
          @include('components.authorization')
      </div>
    </main>

@endsection
