const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css')
    .options({
        processCssUrls: false // Webpack перестанет проверять наличие картинок и шрифтов
    });
