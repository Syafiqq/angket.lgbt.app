const gulp     = require('gulp');
const watch    = require('gulp-watch');
const cleanCSS = require('gulp-clean-css');
const rename   = require('gulp-rename');
const uglify   = require('gulp-uglify');
const pump     = require('pump');

gulp.task('minify-js', function (cb) {
    pump([
            gulp.src(['./raw/**/*.js', '!./raw/**/*.min.js'], {dot: true, base: './raw/'})
                .pipe(rename({suffix: ".min", extname: ".js"})),
            uglify(),
            gulp.dest('./assets/')
        ],
        cb
    );
});

gulp.task('minify-css', function () {
    return gulp.src(['./raw/**/*.css', '!./raw/**/*.min.css'], {dot: true, base: './raw/'})
        .pipe(cleanCSS({compatibility: 'ie8', rebase: false}))
        .pipe(rename({suffix: ".min", extname: ".css"}))
        .pipe(gulp.dest('./assets/'));
});

