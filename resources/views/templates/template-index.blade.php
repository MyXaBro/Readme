<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- подключаем стили-->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('styles')

</head>
<body class="page">
<!-- контент страницы -->
@yield('content')
</body>
</html>
