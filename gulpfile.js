const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const gzip = require('gulp-gzip');

gulp.task('minify-css', function () {
    return gulp.src('./src/style/simple-memory.css')
        .pipe(cleanCSS())
        .pipe(gulp.dest('./easybe'));
});

gulp.task('minify-style', function () {
    return gulp.src('easybe/style/*.css')
        .pipe(cleanCSS())
        .pipe(gulp.dest('./easybe/style/'));
});

gulp.task('minify-simple', function () {
    return gulp.src('easybe/*.js')
        .pipe(uglify())
        .pipe(gzip())
        .pipe(gulp.dest('./easybe'));
});


gulp.task('minify-script', function () {
    return gulp.src('easybe/script/*.js')
        .pipe(uglify())
        .pipe(gzip())
        .pipe(gulp.dest('./easybe/script/'));
});

gulp.task('default', gulp.series(['minify-css', 'minify-simple', 'minify-script', 'minify-style'], done => done()));
