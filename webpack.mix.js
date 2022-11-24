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


 mix.scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js/bootstrap.js')
 .scripts('resources/js/custom.js', 'public/js/script.js')
 .scripts('resources/js/dashboard.js', 'public/js/dashboard.js')
 .scripts('node_modules/chart.js/dist/chart.js', 'public/js/chart.js')
 .sass('resources/scss/style.scss', 'public/css/bootstrap.css')
 .styles(['resources/css/reset.css','resources/css/style.css'], 'public/css/style.css')

 
