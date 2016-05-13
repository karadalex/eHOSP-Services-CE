var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    css_minify = require('gulp-clean-css');

var services = ['medical-diagnosis', 'patient-med-profile', 'research-platform', 'surgery-printing', 'genetic-code', 'med-gis'];

// Javascript minification task
// Minify javascript files and put the minified version in the dist folder
gulp.task('js-minify', function(){
    gulp.src('src/js/**')
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'));

    // Leaflet vendor
    gulp.src('src/vendor/leaflet/leaflet.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist/vendor/leaflet/leaflet.js'));
    }
});

// Image task
// Compress images files
gulp.task('img-minify', function(){
    gulp.src('src/media/img/**')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/media/img'));

    // Leaflet vendor
    gulp.src('src/vendor/leaflet/images/**')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/vendor/leaflet/images/'));
});

// CSS task
// Minify CSS code
gulp.task('minify-css', function() {
    gulp.src('src/css/*.css')
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('dist/css'));

    // Leaflet vendor
    gulp.src('src/vendor/leaflet/*.css')
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('dist/vendor/leaflet'));
});

// Copying task
// Simple copy content to dist
gulp.task('simply-copy', function(){
    gulp.src('src/core/**')
        .pipe(gulp.dest('dist/core'));
    gulp.src('src/includes/**')
        .pipe(gulp.dest('dist/includes'));
    gulp.src('src/services/**')
        .pipe(gulp.dest('dist/services'));
    gulp.src('src/*.php')
        .pipe(gulp.dest('dist'));
    gulp.src('src/*.txt')
        .pipe(gulp.dest('dist'));
    gulp.src('src/*.ico')
        .pipe(gulp.dest('dist'));
});

// Default task to run all of the above tasks
gulp.task('default', ['js-minify', 'minify-css', 'simply-copy', 'img-minify']);
