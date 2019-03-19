var gulp = require('gulp');
var concat = require('gulp-concat');
var cssnano = require('gulp-cssnano');
var sass = require('gulp-sass');
var gutil = require('gulp-util');
var sourcemaps = require('gulp-sourcemaps');
const babel = require('gulp-babel');
var uglify_es = require('gulp-uglify-es').default;




gulp.task("default", function(){
    gulp.watch("resources/assets/styles/scss/**/*.scss",["sass"]);
    gulp.watch("resources/assets/scripts/**/*.js",["js"]);
});

gulp.task("js", function(){
    gulp.src("resources/assets/scripts/**/*.js")
    .pipe(sourcemaps.init())
    .pipe(babel({
        // presets: ['@babel/env']
    }))
    .pipe(uglify_es())
    .pipe(concat("home.js"))
    .on('error', function (err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); })
    .pipe(sourcemaps.write())
    .pipe(gulp.dest("public/assets/js/"));
});

gulp.task("sass", function(){
    gulp.src("resources/assets/styles/scss/**/*.scss")
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(gulp.dest("public/assets/css/"));
});

gulp.task("css", function(){
    gulp.src("resources/assets/styles/css/**/*.css")
    .pipe(cssnano())
    .pipe(gulp.dest("public/assets/css/"));
});