var elixir = require('laravel-elixir'),
    util = require('gulp-util').env;
require('./gulp-tasks/home');
require('./gulp-tasks/admin');
require('./gulp-tasks/home-new');
elixir(function(mix) {
    var page = util.page === undefined ? undefined : util.page.split(',');
    var build = page === undefined ? [
    'home_app',
    'home_new',
    'admin_app',
    ] : page;

    for(var i=0;i<= build.length-1;i++){
        if(typeof mix[build[i]] == 'function'){
            mix[build[i]]();
        }
    }
    mix.version([
      'css/home.css',
      'js/home.js',
      'js/home-index.js',
      'css/admin.css',
      'css/application.css',
      'js/admin.js',
      'js/application.js'
    ]);
});
