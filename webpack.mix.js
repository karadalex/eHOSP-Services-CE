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

mix.sass('app.scss')
    .sass('dashboard.scss')
    .sass('tables.scss')
    .sass('modal.scss')
    .sass('surgDesign-interface.scss')
    .sass('forms.scss');

mix.scripts('main/*.js', 'public/js/app.js')
    .scripts('lib/dashboard.js')
    .scripts('lib/video-chat.js')
    .scripts('lib/maps.js')
    .scripts('lib/nxt-events.js')
    .scripts('lib/nxt-ui.js')
    .scripts('lib/diagnosis-form.js')
    .scripts('lib/patient-med-profile.js')
    .webpack('components.js')
    .webpack('sw.js', 'public/sw.js');

mix.browserSync({
    proxy: 'localhost:8000',
    files: ['./*', '!public/']
});
