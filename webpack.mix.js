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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/bootstrap.js', 'public/js')
    .js('resources/js/navMobile.js', 'public/js')
    .js('resources/js/navPerfil.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/_variables.scss', 'public/css')
    .sass('resources/scss/header.scss', 'public/css')
    .sass('resources/scss/login.scss', 'public/css')
    .sass('resources/scss/register.scss', 'public/css')
    .sass('resources/scss/index.scss', 'public/css')
    .sass('resources/scss/products.scss', 'public/css')
    .sass('resources/scss/createProduct.scss', 'public/css')
    .sass('resources/scss/product.scss', 'public/css')
    .sass('resources/scss/adminUsers.scss', 'public/css')
    .sass('resources/scss/comingSoon.scss', 'public/css')
    .sass('resources/scss/notification.scss', 'public/css')
    .sourceMaps();
