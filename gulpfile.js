'use strict';
 
var gulp = require('gulp');
var browserSync = require('browser-sync');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var php  = require('gulp-connect-php');
var minify = require('gulp-minify');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
const purgecss = require('gulp-purgecss');
var reload  = browserSync.reload;

var browserSyncWatchFiles = [
    './dist/css/*.css',
    '*.php'
];

var browserSyncOptions = {
    proxy: '127.0.0.1:8010',
    port: 8080,
    open: true,
    notify: false
};

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
  return gulp.src("assets/stylesheets/style.scss")
      .pipe(sass())
      .pipe(gulp.dest("assets/stylesheets/"));
});

gulp.task('watch', function () {
    gulp.watch('assets/stylesheets/*.scss', ['sass']);
    gulp.watch('./dist/css/*.css', ['pack-css']);
});

gulp.task('purgecss', () => {
    return gulp.src('./dist/css/*.css')
        .pipe(purgecss({
            content: ["*.php"]
        }))
        .pipe(rename({            
            suffix: ".min"
        }))
        .pipe(gulp.dest('./dist/css/'))
})

gulp.task('pack-css', function() {
    return gulp.src([    
      './bower_components/featherlight/src/featherlight.css',
      './bower_components/slick-carousel/slick/slick.css',
      './bower_components/slick-carousel/slick/slick-theme.css',
      './bower_components/bootstrap-datepicker/css/datepicker.css',
      './assets/stylesheets/style.css'])
      .pipe(concat('stylesheet.css'))
      .pipe(cleanCSS())
      .pipe(gulp.dest('./dist/css/'))
      .pipe(reload({stream: true}));
  });

gulp.task('php', function() {
    php.server({ base: './', port: 8010, keepalive: true});
});

gulp.task('browser-sync',['php'], function() {
    browserSync.init(browserSyncWatchFiles, browserSyncOptions);
});

gulp.task('pack-js', function() {
    return gulp.src([
    './bower_components/jquery/dist/jquery.min.js',
    './bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
    './bower_components/jquery-migrate/jquery-migrate.min.js',
    './bower_components/featherlight/release/featherlight.min.js',
    './bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js',
    './bower_components/slick-carousel/slick/slick.min.js',
    './bower_components/isotope-layout/dist/isotope.pkgd.min.js',
    './assets/scripts/script.js'])
    .pipe(concat('bundle.js'))
    .pipe(minify())
    .pipe(gulp.dest('./dist/js/'));
});

gulp.task('default', ['pack-js', 'purgecss', 'browser-sync', 'watch', 'pack-css'], function () {});


 
