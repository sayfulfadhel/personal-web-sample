const mix = require('laravel-mix');

mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts');
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/main.sass', 'public/css')
    .sourceMaps();