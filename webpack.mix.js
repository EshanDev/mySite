const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/ui.js', 'public/js')
    .sass('resources/sass/ui_bootstrap.scss', 'public/css')
    .sass('resources/sass/ui.scss', 'public/css')
    .options({
        processCssUrls: true
    });
mix.browserSync('http://127.0.0.1:8000');