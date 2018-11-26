var gulp = require('gulp');
var svgSprite = require('gulp-svg-sprite');
var c = require('../lib/config.js');
var config = c.get();

gulp.task('svg', function () {
    Object.keys(config.svg).forEach(function (key) {
        console.log("Processing svg images (" + key + ")");
        gulp.src(config.svg[key].src)
            .pipe(svgSprite(config.svg[key].config))
            .pipe(gulp.dest(config.svg[key].dst));
    });
});