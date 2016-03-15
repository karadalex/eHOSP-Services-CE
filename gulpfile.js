var gulp = require('gulp')
    uglify = require('gulp-uglify');

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

// Deafult task to run all of the above tasks
gulp.task('default', ['js-minify']);
