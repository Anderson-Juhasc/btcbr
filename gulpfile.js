var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    sass = require('gulp-sass'),
    browserify = require('gulp-browserify'),
    browserSync = require('browser-sync');


//task that fires up php server at port 8001
gulp.task('connect', function(callback) {
  connect.server({
    port: 8001
  }, callback);
});


//task that fires up browserSync proxy after connect server has started
gulp.task('browser-sync',['connect'], function() {
    browserSync({
      proxy: '127.0.0.1:8001',
      port: 8910
  });
});

gulp.task('sass', function () {
  gulp.src('./assets/sass/**/*.{sass,scss}')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./assets/css'));
});


// Basic usage
gulp.task('scripts', function() {
    // Single entry point to browserify
    gulp.src('./app/app.js')
    .pipe(browserify({
      insertGlobals : true,
      debug : !gulp.env.production
    }))
    .pipe(gulp.dest('./app/bundle/'));
});


//default task that runs task browser-sync ones and then watches php files to change. If they change browserSync is reloaded
gulp.task('default', ['browser-sync', 'sass'], function () {
  gulp.watch(['**/*.php'], browserSync.reload);
  gulp.watch(['**/*.html'], browserSync.reload);
  gulp.watch('./assets/sass/**/*.sass', ['sass']);
  gulp.watch('./app/*.js', ['scripts']);
});
