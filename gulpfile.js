var gulp = require('gulp')
    uglify = require('gulp-uglify');

// Minify javascript files and put the minified version in the dist folder
gulp.task('default', function(){
    gulp.src('src/js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('dist/js'));
});
