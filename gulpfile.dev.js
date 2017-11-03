const gulp     = require('gulp');
const watch    = require('gulp-watch');
const rename   = require('gulp-rename');
const pump     = require('pump');

gulp.task('minify-js', function (cb) {
    pump([
            gulp.src(['./raw/**/*.js', '!./raw/**/*.min.js'], {dot: true, base: './raw/'})
                .pipe(rename({suffix: ".min", extname: ".js"})),
            gulp.dest('./assets/')
        ],
        cb
    );
});

gulp.task('minify-css', function () {
    return gulp.src(['./raw/**/*.css', '!./raw/**/*.min.css'], {dot: true, base: './raw/'})
        .pipe(rename({suffix: ".min", extname: ".css"}))
        .pipe(gulp.dest('./assets/'));
});

gulp.task('watch-minify-js', function () {
    return watch(['./raw/**/*.js', '!./raw/**/*.min.js'], function (cb) {
        pump([
                gulp.src(['./raw/**/*.js', '!./raw/**/*.min.js'], {dot: true, base: './raw/'})
                    .pipe(rename({suffix: ".min", extname: ".js"})),
                gulp.dest('./assets/')
            ],
            cb
        );
    });
});

gulp.task('watch-minify-css', function () {
    return watch(['./raw/**/*.css', '!./raw/**/*.min.css'], function () {
        return gulp.src(['./raw/**/*.css', '!./raw/**/*.min.css'], {dot: true, base: './raw/'})
            .pipe(rename({suffix: ".min", extname: ".css"}))
            .pipe(gulp.dest('./assets/'));
    });
});
