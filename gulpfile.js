var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    css_minify = require('gulp-clean-css'),
    gutil = require('gulp-util'),
    plumber = require('gulp-plumber');

var services = ['medical-diagnosis', 'patient-med-profile', 'research-platform', 'surgery-printing', 'genetic-code', 'med-gis'];

// Javascript minification task
// Minify javascript files and put the minified version in the dist folder
gulp.task('js-minify', function(){
    gulp.src('src/js/**')
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'));

    // Leaflet vendor
    gulp.src('src/vendor/leaflet/leaflet.js')
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest('dist/vendor/leaflet/leaflet.js'));
});

// Image task
// Compress images files
gulp.task('img-minify', function(){
    gulp.src('src/media/img/**')
        .pipe(plumber())
        .pipe(imagemin())
        .pipe(gulp.dest('dist/media/img'));

    // Leaflet vendor
    gulp.src('src/vendor/leaflet/images/**')
        .pipe(plumber())
        .pipe(imagemin())
        .pipe(gulp.dest('dist/vendor/leaflet/images/'));
});

// CSS task
// Minify CSS code
gulp.task('minify-css', function() {
    gulp.src('src/css/*.css')
        .pipe(plumber())
        .pipe(css_minify({compatibility: 'ie8'}))
        .pipe(gulp.dest('dist/css'));

    // Leaflet vendor
    gulp.src('src/vendor/leaflet/*.css')
        .pipe(plumber())
        .pipe(css_minify({compatibility: 'ie8'}))
        .pipe(gulp.dest('dist/vendor/leaflet'));
});

// Copying task
// Simple copy content to dist
gulp.task('simply-copy', function(){
    gulp.src('src/core/**')
        .pipe(plumber())
        .pipe(gulp.dest('dist/core'));
    gulp.src('src/includes/**')
        .pipe(plumber())
        .pipe(gulp.dest('dist/includes'));
    gulp.src('src/services/**')
        .pipe(plumber())
        .pipe(gulp.dest('dist/services'));
    gulp.src('src/*.php')
        .pipe(plumber())
        .pipe(gulp.dest('dist'));
    gulp.src('src/*.txt')
        .pipe(plumber())
        .pipe(gulp.dest('dist'));
    gulp.src('src/*.ico')
        .pipe(plumber())
        .pipe(gulp.dest('dist'));
});

// Default task to run all of the above tasks
gulp.task('default', ['js-minify', 'minify-css', 'simply-copy', 'img-minify']);
