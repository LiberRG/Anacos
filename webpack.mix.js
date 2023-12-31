const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ])
    .copyDirectory('resources/img', 'public/img')
    .copyDirectory('resources/fonts', 'public/fonts')
    .copy('resources/js/wordfind.js', 'public/js/wordfind.js')
    .copy('resources/js/wordfindgame.js', 'public/js/wordfindgame.js')

if (mix.inProduction()) {
    mix.version();
}