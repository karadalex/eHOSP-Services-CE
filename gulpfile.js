var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    css_minify = require('gulp-clean-css');

var services = ['medical-diagnosis', 'patient-med-profile', 'research-platform', 'surgery-printing'];

// Javascript minification task
// Minify javascript files and put the minified version in the dist folder
gulp.task('js-minify', function(){
    gulp.src('src/js/**')
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'));
    // Dive also into services
    for (var i=0; i<services.length; i++) {
        gulp.src('src/services/'+services[i]+'/js/**')
            .pipe(uglify())
            .pipe(gulp.dest('dist/services/'+services[i]+'/js'));
    }
});

// Image task
// Compress images files
gulp.task('img-minify', function(){
    gulp.src('src/media/img/**')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/media/img'));
    // Dive also into services
    for (var i=0; i<services.length; i++) {
        gulp.src('src/services/'+services[i]+'/media/img/**')
            .pipe(imagemin())
            .pipe(gulp.dest('dist/services/'+services[i]+'/media/img'));
    }
});

// Copying task
// Simple copy content to dist
gulp.task('simply-copy', function(){
    gulp.src('src/core/**')
        .pipe(gulp.dest('dist/core'));
    gulp.src('src/css/**')
        .pipe(gulp.dest('dist/css'));
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
gulp.task('default', ['js-minify', 'simply-copy', 'img-minify']);
