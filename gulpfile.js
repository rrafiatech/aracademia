var gulp = require("gulp");
var gutil = require("gulp-util");
var sass = require("gulp-sass");
var autoprefix = require("gulp-autoprefixer");
var coffee = require("gulp-coffee");
var minifyCSS = require("gulp-minify-css");
var minifyJS = require("gulp-uglify");

var sassDir = 'app/assets/sass';
var targetCssDir = 'public/css';

var jsDir = 'app/assets/js';
var targetJsDir = 'public/js';


gulp.task('css', function()
{
    gulp.src(sassDir + '/mainAracademia.scss')
        .pipe(sass())
        .pipe(autoprefix('last 11 versions'))
        .pipe(minifyCSS())
        .pipe(gulp.dest(targetCssDir))
});

gulp.task('js', function()
{
    gulp.src(jsDir+'/aracademia.js')
        .pipe(minifyJS())
        .pipe(gulp.dest(targetJsDir))
});

gulp.task('watch', function()
{
    gulp.watch(sassDir+'/**/*.scss', ['css']);
    gulp.watch(jsDir+'/**/*.js', ['js']);
});

gulp.task('default', ['css','js','watch']);