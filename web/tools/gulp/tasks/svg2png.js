var gulp      = require('gulp');
var yaml      = require('js-yaml');
var fs        = require('fs');
var debug     = require('gulp-debug');
var filter    = require('gulp-filter');
var rename    = require('gulp-rename');
var svg2png   = require('gulp-svg2png');

var c = require('../lib/config.js');
var config = c.get();

gulp.task('svg2png', function () {
    Object.keys(config.svg).forEach(function (key) {
        console.log("Generating png fallback images (" + key + ")");
        gulp.src(config.svg[key].src)
            .pipe(debug({title: 'source icons:'}))
            .pipe(svg2png())
            .pipe(rename({
                prefix: key + '-symbols.svg.'
            }))
            .pipe(gulp.dest(config.svg[key].dst + '/symbol/'));
    });
});