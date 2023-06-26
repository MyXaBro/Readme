<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- подключаем стили и скрипты -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('styles')
    @yield('scripts')

</head>
<body class="page">
<!-- подключаем хедер -->
@include('components.header--main')
<!-- контент страницы -->
@yield('content')
<!-- подключаем футер -->
@include('templates.footer')
</body>
</html>
