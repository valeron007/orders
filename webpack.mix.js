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


mix.autoload({
    'jquery': ['$', 'window.jQuery', 'jQuery'],
    'vue': ['Vue','window.Vue'],
    'moment': ['moment','window.moment'],
});

mix.js(['resources/js/app.js',
    'node_modules/jquery/dist/jquery.js',
    'node_modules/bootstrap-datepicker/js/bootstrap-datepicker.js',
    'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js'
], 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

