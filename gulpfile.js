var gulp = require("gulp");
var sass = require("gulp-sass");
var notify = require("gulp-notify");
var del = require("del");
var shell = require("gulp-shell");
var nunjucksRender = require("gulp-nunjucks-render");
var rename = require("gulp-rename");
var uglify = require("gulp-uglifyjs");
var htmlmin = require("gulp-htmlmin");
var autoprefixer = require("gulp-autoprefixer");
var sourcemaps = require("gulp-sourcemaps");
var nano = require("gulp-cssnano");
var gulpif = require("gulp-if");
var rsync = require("gulp-rsync");
var runSequence = require("run-sequence");

var pjson = require("./package.json");

// Enviroment may be 'dev' (development) or 'prod' (production).
var env = process.env.NODE_ENV;
// Default to dev (overwritten by build:prod)
env = "dev";

// Delete the deploy folder and other unversioned assets
gulp.task("clean", function() {
  return del(
    ["deploy", "*.pyc", ".sass-cache/*", "templates/reviews_partial.html"]
  );
});

// Compile SASS to CSS and autoprefix.
// If production, minify. If development, write sourcemaps.
gulp.task("css", function() {
  return gulp.src("./sass/*.scss")
  .pipe(gulpif(env === "dev", sourcemaps.init()))
  .pipe(sass({includePaths: ["./node_modules"]}))
  .pipe(autoprefixer({remove: false}))
  .pipe(gulpif(env === "prod", nano()))
  .pipe(gulpif(env === "dev", sourcemaps.write(".")))
  .on("error", notify.onError(function (error) {
    return "Error: " + error.message;
  }))
  .pipe(gulp.dest("deploy/css"));
});

// Concatenate and minify Javascript. Write soucemaps if development.
gulp.task("js", function() {
  gulp.src("js/*.js")
  .pipe(uglify("maxweddingcars.min.js", {
    outSourceMap: env === "dev",
    mangle: true,
  }))
  .pipe(gulp.dest("deploy/js"));
});

// Copy files to deploy directly directly
gulp.task("copy", function() {
  // Copy whole directories in-place
  gulp.src(["fb/*", "img/**", "fonts/*", "owl-carousel/*"], {base:"."})
  .pipe(gulp.dest("deploy"));
  // Copy 'static' directory contents to root
  gulp.src(["static/*", "static/.*"])
  .pipe(gulp.dest("deploy"));
});

// Get all Facebook reviews and images using the get_reviews Python script
gulp.task("facebook", shell.task(["python get_reviews.py"]));

// Build HTML/PHP files from Nunjucks templates
gulp.task("html", function () {
  nunjucksRender.nunjucks.configure(["./templates/"], {watch: false});
  return gulp.src("./templates/*.php")
  .pipe(nunjucksRender({version: pjson.version}))
  .pipe(htmlmin({collapseWhitespace: env === "prod"}))
  .pipe(rename(function (path) {path.extname = ".php";}))
  .pipe(gulp.dest("deploy"));
});

// Watch for updates to files in development
gulp.task("watch", function () {
  gulp.watch("js/*.js", ["js"]);
  gulp.watch("sass/*.scss", ["css"]);
  gulp.watch("templates/*", ["html"]);
  gulp.watch(["fb/*", "img/**", "fonts/*", "owl-carousel/*", "static/*"],
    ["copy"]);
});

// Standard development build. Run simultaneously.
gulp.task("default", ["css", "html", "js", "copy"]);

// Full development build with pre-clean and fresh Facebook download
gulp.task("build", function (cb) {
  runSequence("clean", "facebook", "default", cb);
});

// Full production build with asset minification and no source mapping
gulp.task("build:prod", function (cb) {
  env = "prod";
  runSequence("build", cb);
});

// Server-side synchronisation of deploy folder and live files
gulp.task("sync", function() {
  return gulp.src("deploy")
  .pipe(rsync({
    root: "deploy",
    destination: "/home/blake01/webapps/maxweddingcars",
    recursive: true,
    clean: true,
  }));
});

// The Full Works - build and deploy
gulp.task("deploy", function (cb) {
  runSequence("build:prod", "sync", cb);
});
