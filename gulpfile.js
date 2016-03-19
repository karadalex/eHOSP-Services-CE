var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin');

// Javascript minification task
// Minify javascript files and put the minified version in the dist folder
gulp.task('js-minify', function(){
    gulp.src('src/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'));
    gulp.src('src/js/foundation/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist/js/foundation'));
    gulp.src('src/js/vendor/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist/js/vendor'));
});

// Image task
// Compress images files
gulp.task('img-minify', function(){
    gulp.src('src/media/img/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/media/img'));
});

// Copying task
// Simple copy content to dist
gulp.task('simple-move', function(){
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
gulp.task('default', ['js-minify', 'simple-move', 'img-minify']);
