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
        //
    ])
    .styles([
        'resources/theme/assets/css/bootstrap.min.css',
        'resources/theme/assets/css/icons.min.css',
        'resources/theme/assets/css/app.min.css',
        'resources/css/style.css'
    ], 'public/css/admin.css')
    .scripts([
        'resources/theme/assets/libs/jquery/jquery.min.js',
        'resources/theme/assets/libs/bootstrap/js/bootstrap.bundle.min.js',
        'resources/theme/assets/libs/metismenu/metisMenu.min.js',
        'resources/theme/assets/libs/simplebar/simplebar.min.js',
        'resources/theme/assets/libs/node-waves/waves.min.js',
        'resources/theme/assets/js/app.js'
    ], 'public/js/admin.js')
    .copyDirectory('resources/theme/assets/fonts', 'public/fonts')
    .copyDirectory('resources/theme/assets/images', 'public/images');
