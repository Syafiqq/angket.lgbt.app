var gulp     = require('gulp');
var watch    = require('gulp-watch');
var cleanCSS = require('gulp-clean-css');
var rename   = require('gulp-rename');
var uglify   = require('gulp-uglify');
var pump     = require('pump');

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

gulp.task('watch-minify-js', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch(['./raw/**/*.js', '!./raw/**/*.min.js'], function (cb) {
        pump([
                gulp.src(['./raw/**/*.js', '!./raw/**/*.min.js'], {dot: true, base: './raw/'})
                    .pipe(rename({suffix: ".min", extname: ".js"})),
                uglify(),
                gulp.dest('./assets/')
            ],
            cb
        );
    });
});

gulp.task('watch-minify-css', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch(['./raw/**/*.css', '!./raw/**/*.min.css'], function () {
        return gulp.src(['./raw/**/*.css', '!./raw/**/*.min.css'], {dot: true, base: './raw/'})
            .pipe(cleanCSS({compatibility: 'ie8', rebase: false}))
            .pipe(rename({suffix: ".min", extname: ".css"}))
            .pipe(gulp.dest('./assets/'));
    });
});
