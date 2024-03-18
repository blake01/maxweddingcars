var gulp = require("gulp");
var sass = require("gulp-sass")(require('sass'));
var notify = require("gulp-notify");
var nunjucksRender = require("gulp-nunjucks-render");
var rename = require("gulp-rename");
var uglify = require("gulp-uglifyjs");
var autoprefixer = require("gulp-autoprefixer");
var sourcemaps = require("gulp-sourcemaps");
var nano = require("gulp-cssnano");
var gulpif = require("gulp-if");
var imagemin = require("gulp-imagemin");
// Adds dependencies on imagemagick & graphicsmagick
var imageResize = require("gulp-image-resize");

var pjson = require("./package.json");

// Enviroment may be 'dev' (development) or 'prod' (production).
var env = process.env.NODE_ENV;

// Compile SASS to CSS and autoprefix.
// If production, minify. If development, write sourcemaps.
gulp.task("css", function() {
  return gulp.src("./app/sass/*.scss")
  .pipe(gulpif(env !== "prod", sourcemaps.init()))
  .pipe(sass({includePaths: ["./node_modules"]}))
  .pipe(autoprefixer({remove: false}))
  .pipe(gulpif(env === "prod", nano()))
  .pipe(gulpif(env !== "prod", sourcemaps.write(".")))
  .on("error", notify.onError(function (error) {
    return "Error: " + error.message;
  }))
  .pipe(gulp.dest("deploy/css"));
});

// Losslessly compress images
gulp.task("img", function() {
  return gulp.src("app/img/**")
  .pipe(imagemin([
      imagemin.svgo({
          progressive: true,
          plugins: [
              {removeViewBox: true}          ]
      })
  ]))
  .pipe(gulp.dest("deploy/img"));
});

// Make thumbnails of all images
gulp.task("img-small", function() {
  return gulp.src("app/img/**")
  .pipe(imageResize({
    width: 540,
    quality: 1
  }))
  .pipe(imagemin([
      imagemin.svgo({
          progressive: true,
          plugins: [
              {removeViewBox: true}          ]
      })
  ]))
  .pipe(gulp.dest("deploy/img/small"));
});

// Concatenate and minify Javascript. Write soucemaps if development.
gulp.task("js", function(done) {
  gulp.src("./app/js/*.js")
  .pipe(uglify("maxweddingcars.min.js", {
    outSourceMap: env !== "prod",
    mangle: true,
  }))
  .pipe(gulp.dest("deploy/js"));
  done();
});

// Copy Assets to deploy directly directly
gulp.task("copy", function(done) {
  gulp.src(["app/assets/**", "app/assets/.*"], {base:"app/assets/"})
  .pipe(gulp.dest("deploy"));
  done();
});

// Build HTML/PHP files from Nunjucks templates
gulp.task("html", function () {
  return gulp.src("./app/templates/*.php")
  .pipe(nunjucksRender({version: pjson.version, path: "./app/templates/"}))
  .pipe(rename(function (path) {path.extname = ".php";}))
  .pipe(gulp.dest("deploy"));
});

// Watch for updates to files in development
gulp.task("watch", function () {
  gulp.watch("app/js/*.js", gulp.series("js"));
  gulp.watch("app/sass/*.scss", gulp.series("css"));
  gulp.watch("app/templates/*", gulp.series("html"));
  gulp.watch("app/assets/**", gulp.series("copy"));
});

// Standard development build. Run simultaneously.
gulp.task("default", gulp.series("css", "html", "js", "copy"), function(done) {
  console.log("default completed")
  done();
});
gulp.task("images", gulp.series("img", "img-small"), function(done) {
  console.log("images completed")
  done();
});
