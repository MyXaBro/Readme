const mix = require('laravel-mix');

mix.js('resources/js/templates/youtube.js', 'public/js/templates')
    .js('resources/js/templates/view_ajax.js', 'public/js/templates');
