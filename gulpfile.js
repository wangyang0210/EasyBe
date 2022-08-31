let gulp = require('gulp');
let minifycss = require('gulp-clean-css');

gulp.task('minify-css', function () {
    return gulp.src('./src/style/simpleMemory.css')
        .pipe(minifycss())
        .pipe(gulp.dest('./easybe'));
});

gulp.task('default', gulp.series('minify-css', done => done()));
