let mix = require('laravel-mix');

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
mix.sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/css/sb-admin-2.css',
    'resources/assets/css/timeline.css'
], 'public/css/main.css');

mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'node_modules/metismenu/dist/metisMenu.js',
], 'public/js/app.js');

mix.scripts([
    'resources/assets/js/sb-admin-2.js',
], 'public/js/main.js');

mix.scripts([
    'node_modules/chart.js/dist/Chart.bundle.js',
    'resources/assets/js/frontend.js',
], 'public/js/chart.js');

mix.js('resources/assets/js/test.js', 'public/js');

if (mix.inProduction()) {
    mix.version();
}
