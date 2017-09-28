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

mix.sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/dashboard.scss', 'public/css')
    .sass('resources/assets/sass/tables.scss', 'public/css')
    .sass('resources/assets/sass/modal.scss', 'public/css')
    .sass('resources/assets/sass/surgDesign-interface.scss', 'public/css')
    .sass('resources/assets/sass/forms.scss', 'public/css');

mix.js('resources/assets/js/lib/dashboard.js', 'public/js')
    .js('resources/assets/js/lib/video-chat.js', 'public/js')
    .js('resources/assets/js/lib/maps.js', 'public/js')
    .js('resources/assets/js/lib/nxt-events.js', 'public/js')
    .js('resources/assets/js/lib/nxt-ui.js', 'public/js')
    .js('resources/assets/js/lib/diagnosis-form.js', 'public/js')
    .js('resources/assets/js/lib/patient-med-profile.js', 'public/js')
    .js('resources/assets/js/components.js', 'public/js')
    .js('resources/assets/js/sw.js', 'public/sw.js')
    .scripts([
        'resources/assets/js/main/jquery-scripts.js'
    ], 'public/js/app.js');

