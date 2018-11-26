// main gulp file, includes tasks from ./tasks
var requireDir = require('require-dir');
var c = require('./lib/config.js');
var config = c.get();
requireDir('./tasks', {recurse: true});



