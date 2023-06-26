<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- подключаем стили -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('styles')
</head>
<body class="page">
<!-- подключаем хедер -->
@include('templates.header')
<!-- контент страницы -->
@yield('content')
<!-- подключаем футер -->
@include('templates.footer')

<!-- подключаем скрипты -->
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/templates/dropzone-settings.js') }}"></script>
<script src="{{ asset('js/templates/filters.js') }}"></script>
<script src="{{ asset('js/templates/modal.js') }}"></script>
<script src="{{ asset('js/templates/sorting.js') }}"></script>
<script src="{{ asset('js/templates/tabs.js') }}"></script>
<script src="{{ asset('js/templates/util.js') }}"></script>
<script src="{{ asset('js/templates/view_ajax.js') }}"></script>
<script src="{{ asset('js/templates/view_form.js') }}"></script>
<script src="{{ asset('js/templates/youtube.js') }}"></script>
@yield('scripts')
</body>
</html>
