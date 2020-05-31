const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

function style(){
    return gulp.src('./scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./css'))
    .pipe(browserSync.stream());
}

function watch(){
    browserSync.init({
        proxy: 'http://localhost:8080/find/'
    });
    gulp.watch('./scss/**/*.scss', style);
    gulp.watch('./*.php').on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;