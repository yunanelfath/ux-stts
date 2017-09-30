var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var elixir = require('laravel-elixir');
var gutil = require('gulp-util');
var compass = require('gulp-compass'); //https://www.npmjs.com/package/gulp-compass
var iOAssets = require('./../resources/assets/input-output-assets.js');
var minifyCss = require('gulp-minify-css');
var Task = elixir.Task;

module.exports = function(){

  new Task('contact compass',function(){
    var compassOptions = {
      image: 'public',
      sass: 'public/desktop',
      style: 'compressed',
      css: 'public/assets',
      comments: true,
    }
    var src = iOAssets.inputFile.main.sass.concat(inputOutputAssetFiles.inputFile.site.feeds.sass);
    return gulp.src(src)
               .pipe(compass(compassOptions).on('error', function(error){
                 console.log(error);
                 this.emit('end')
               }))
               .pipe(concat(inputOutputAssetFiles.outputFile.site.feeds.css.file))
               .pipe(minifyCss())
               .pipe(gulp.dest(inputOutputAssetFiles.outputFile.site.feeds.css.path));
  }).watch(inputOutputAssetFiles.inputFile.main.sass.concat(inputOutputAssetFiles.inputFile.site.feeds.sass));


};
