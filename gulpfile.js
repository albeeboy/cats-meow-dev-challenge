import gulp from "gulp";
import { deleteSync } from "del";
import dartSass from "sass";
import gulpSass from "gulp-sass";
import autoprefixer from "autoprefixer";
import postcss from "gulp-postcss";

const sass = gulpSass(dartSass);

const clean = (cb) => {
  deleteSync(["./dist/**"]);
  cb();
};

const styles = (cb) => {
  const plugins = [autoprefixer()];
  gulp
    .src(["./src/scss/styles.scss"])
    .pipe(sass().on("error", sass.logError))
    .pipe(postcss(plugins))
    .pipe(gulp.dest("./dist/css"));
  cb();
};

const scripts = () => {
  return gulp.src(["./src/js/**/*.js"]).pipe(gulp.dest("./dist/js"));
};

const copyImages = () => {
  return gulp
    .src(["./src/images/**/*.{png,gif,jpg,svg}"])
    .pipe(gulp.dest("./dist/images"));
};

const copyFiles = () => {
  return gulp.src(["./src/php/**/*.php"]).pipe(gulp.dest("./dist"));
};

const build = gulp.series(
  clean,
  gulp.parallel(styles, scripts, copyImages, copyFiles)
);

const watchFiles = () => {
  gulp.watch(
    [
      "./src/php/**/*.php",
      "./src/js/**/*.js",
      "./src/scss/**/*.scss",
      "./src/images/**/*/.{png,gif,jpg,svg}",
    ],
    (cb) => {
      build();
      cb();
    }
  );
};

export { clean, styles, scripts, copyImages, copyFiles, build };
export default watchFiles;
