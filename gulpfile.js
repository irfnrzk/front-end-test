'use strict';
 
var gulp = require('gulp');
var browserSync = require('browser-sync');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var php  = require('gulp-connect-php');
var rename = require('gulp-rename');

var reload  = browserSync.reload;

gulp.task('php', function() {
    php.server({ base: './', port: 8010, keepalive: true});
});
gulp.task('browser-sync',['php'], function() {
    browserSync({
        proxy: '127.0.0.1:8010',
        port: 8080,
        open: true,
        notify: false
    });
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
  return gulp.src("assets/sass/*.scss")
      .pipe(sass())
      .pipe(gulp.dest("dist/css"))
      .pipe(browserSync.stream());
});

gulp.task('minify-css', () => {
  return gulp.src('dist/css/style.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('dist/css/'));
});

gulp.task('default', ['browser-sync','sass','minify-css'], function () {
  gulp.watch("assets/sass/*.scss", ['sass']);
    gulp.watch(['*.php'], [reload]);
});
