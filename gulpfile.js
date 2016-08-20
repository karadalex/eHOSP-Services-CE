var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
       .sass('dashboard.scss')
       .sass('tables.scss')
       .sass('modal.scss')
       .sass('surgDesign-interface.scss')
       .sass('forms.scss');

    mix.scripts('main/*.js', 'public/js/app.js')
       .scripts('extra/dashboard.js')
       .scripts('extra/video-chat.js')
       .scripts('extra/maps.js')
       .scripts('extra/nxt-events.js')
       .scripts('extra/nxt-ui.js')
       .scripts('extra/diagnosis-form.js')
       .scripts('extra/patient-med-profile.js');

    mix.browserSync({
        proxy: 'localhost:8000',
    });
});
