var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var elixir = require('laravel-elixir');
var gutil = require('gulp-util');
var compass = require('gulp-compass'); //https://www.npmjs.com/package/gulp-compass
var minifyCss = require('gulp-minify-css');
var Task = elixir.Task;
var sources = {
  scss: [
    'resources/assets/sass/home.scss'
  ],
  js: [

  ],
  images: [
    'resources/assets/images/fronts.jpg',
    'resources/assets/images/logo-stts.png'
  ]
};

elixir.extend('home_app',function(){

    new Task('home app',function(){
      var compassOptions = {
        image: 'public',
        sass: 'resources/assets', // sources
        style: 'compressed',
        css: 'public', // output
        comments: true,
      }
      gulp.task('copy_background', function(){
        console.log('copying..')
        return gulp.src(sources.images)
                   .pipe(gulp.dest('./public/build/img'))
      });
      return gulp.src(sources.scss)
                 .pipe(compass(compassOptions).on('error', function(error){
                   console.log(error);
                   this.emit('end')
                 }))
                 .pipe(concat('home.css')) // ouput into public/sass
                 .pipe(minifyCss())
                 .pipe(gulp.dest('public/css')) // ouput into publi/css
                 .on('end',function(){
                   gulp.start(['copy_background']);
                 });
    }).watch(sources.scss);
})
