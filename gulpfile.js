var gulp = require("gulp");
var sass = require("gulp-sass");
var notify = require("gulp-notify");
var nunjucksRender = require("gulp-nunjucks-render");
var rename = require("gulp-rename");
var uglify = require("gulp-uglifyjs");
var autoprefixer = require("gulp-autoprefixer");
var sourcemaps = require("gulp-sourcemaps");
var nano = require("gulp-cssnano");
var gulpif = require("gulp-if");
var imagemin = require("gulp-imagemin");

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
  .pipe(imagemin({
    progressive: true,
    svgoPlugins: [{removeViewBox: false}]
  }))
  .pipe(gulp.dest("deploy/img"));
});

// Concatenate and minify Javascript. Write soucemaps if development.
gulp.task("js", function() {
  gulp.src("./app/js/*.js")
  .pipe(uglify("maxweddingcars.min.js", {
    outSourceMap: env !== "prod",
    mangle: true,
  }))
  .pipe(gulp.dest("deploy/js"));
});

// Copy Assets to deploy directly directly
gulp.task("copy", function() {
  gulp.src(["app/assets/**", "app/assets/.*"], {base:"app/assets/"})
  .pipe(gulp.dest("deploy"));
});

// Build HTML/PHP files from Nunjucks templates
gulp.task("html", function () {
  nunjucksRender.nunjucks.configure(["./app/templates/"], {watch: false});
  return gulp.src("./app/templates/*.php")
  .pipe(nunjucksRender({version: pjson.version}))
  .pipe(rename(function (path) {path.extname = ".php";}))
  .pipe(gulp.dest("deploy"));
});

// Watch for updates to files in development
gulp.task("watch", function () {
  gulp.watch("app/js/*.js", ["js"]);
  gulp.watch("app/sass/*.scss", ["css"]);
  gulp.watch("app/templates/*", ["html"]);
  gulp.watch("app/assets/**", ["copy"]);
});

// Standard development build. Run simultaneously.
gulp.task("default", ["css", "img", "html", "js", "copy"]);
