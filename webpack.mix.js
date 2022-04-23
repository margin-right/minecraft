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

mix.scripts(['node_modules/bootstrap/dist/js/bootstrap.js'], 'public/js/bootstrap.js')
    .sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css')
    .sass('node_modules/bootstrap-icons/font/bootstrap-icons.scss', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss')
    ]);
