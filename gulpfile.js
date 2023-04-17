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

const copyFiles = () => {
  return gulp.src(["./src/php/**/*.php"]).pipe(gulp.dest("./dist"));
};

const build = gulp.series(clean, gulp.parallel(styles, copyFiles));

const watchFiles = () => {
  gulp.watch(["./src/php/**/*.php", "./src/scss/**/*.scss"], (cb) => {
    build();
    cb();
  });
};

export { clean, styles, copyFiles, build };
export default watchFiles;
