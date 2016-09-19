const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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

elixir(mix => {
    // mix.sass('app.scss')
    //    .webpack('app.js');

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
      .webpack('components.js');

    mix.browserSync({
       proxy: 'localhost:8000',
    });
});
