var gulp = require('gulp');
var compass = require('gulp-compass');
var del = require('del');
var shell = require('gulp-shell');
var nunjucksRender = require('gulp-nunjucks-render');
var rename = require('gulp-rename');
var uglify = require('gulp-uglifyjs');
var eol = require('gulp-eol');
var htmlmin = require('gulp-htmlmin');

// Ensure correct line endings in all dev files
gulp.task('eol', function() {
  return gulp.src(['./*.js', './*.html', './*.php'])
  .pipe(eol())
  .pipe(gulp.dest('./'));
});

// Delete the deploy folder
gulp.task('clean', function() {
  return del(['deploy']);
});

// Use Compass to compile SASS to CSS
gulp.task('css', function() {
  gulp.src('./sass/*.scss')
  .pipe(compass({
    css: 'deploy/css',
    image: 'img',
    style: 'compressed',
    sourcemap: true,
    require: ['bootstrap-sass']
  }))
  .on('error', function(error) {
    console.log(error);
    this.emit('end');
  })
});

// Concatenate and minify Javascript
gulp.task('js', function() {
  gulp.src('js/*.js')
  .pipe(uglify('maxweddingcars.min.js', {
    outSourceMap: true,
    mangle: true,
  }))
  .pipe(gulp.dest('deploy/js'))
});

// Copy files to deploy directly directly
gulp.task('copy', function() {
  // Copy whole directories
  gulp.src(['fb/*', 'img/**', 'fonts/*', 'owl-carousel/*'], {base:"."}).pipe(gulp.dest('deploy'));
  // Copy directory contents to root
  gulp.src(['static/*', 'static/.*']).pipe(gulp.dest('deploy'));
});

// Get all Facebook reviews and images using the get_reviews Python script
gulp.task('facebook', shell.task([
  'python get_reviews.py'
], {verbose: true}))

// Build HTML/PHP files from Nunjucks templates
gulp.task('html', function () {
  nunjucksRender.nunjucks.configure(['./templates/'], {watch: false});
  return gulp.src('./templates/*.php')
  .pipe(nunjucksRender())
  .pipe(htmlmin({collapseWhitespace: true}))
  .pipe(rename(function (path) {path.extname = ".php"}))
  .pipe(gulp.dest('deploy'));
});

// Watch for updates to files in development
gulp.task('watch', function () {
  gulp.watch('js/*.js', ['js']);
  gulp.watch('sass/*.scss', ['css']);
  gulp.watch('templates/*', ['html']);
});

gulp.task('default', ['css', 'html', 'js', 'copy']);

gulp.task('build', ['clean'], function () {
  gulp.run('default');
  gulp.run('facebook');
});
