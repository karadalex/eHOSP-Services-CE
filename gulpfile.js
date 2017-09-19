const elixir = require('laravel-elixir');
const gulp = require('gulp');
const zip = require('gulp-zip');

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
      .webpack('components.js')
      .webpack('sw.js', 'public/sw.js');

    mix.browserSync({
       proxy: 'localhost:8000',
       files: ['./*', '!public/']
    });
});


/*
 |--------------------------------------------------------------------------
 | Custom Gulp Tasks
 |--------------------------------------------------------------------------
 |
 */

gulp.task('zip', () =>
    gulp.src([
        './**', 
        '!node_modules/**', '!node_modules', 
        '!./.*',
        '!tests/**', '!tests',
        '!docker/**', '!docker',
        '!build/**', '!build',
        '!*.yml', '!*.js*', '!*.md', '!*.png', '!*file', '!*ph*',
        '.env'
    ])
        .pipe(zip(`build-${Date.now()}.zip`))
        .pipe(gulp.dest('build'))
);

gulp.task('production', ['zip']);