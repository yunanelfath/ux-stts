var gulp = require('gulp'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    elixir      = require('laravel-elixir'),
    gutil       = require('gulp-util'),
    compass     = require('gulp-compass'), //https://www.npmjs.com/package/gulp-compass
    minifyCss   = require('gulp-minify-css'),
    babel       = require('gulp-babel'),
    strip = require('gulp-strip-comments'),
    modernizr   = require('gulp-modernizr'),
    sass        = require('gulp-ruby-sass'),
    webpackStream = require('webpack-stream'),
    webpack = require('webpack'),
    path = require('path'),
    requireFile = require('gulp-require-file');
var removeFile = require('gulp-clean');
var Task       = elixir.Task;
var assets = {
  input: {
    output:{
      jsPath: 'public/js',
      jsDesktop: 'home-index.js',
      // cssPath: 'public/css',
      // cssDesktop: 'editor-cardquiz.css'
    },
    desktop: {
      js: 'resources/assets/js/components/home-wrapper.cjsx',
    }
  }
}

elixir.extend('home_new', function(message){
  new Task('editor_cardquiz-scripts',function(){
    return gulp.src(assets.input.desktop.js)
      .pipe(webpackStream({
        output: {
          filename: assets.input.output.jsDesktop
        },
        module: {
          loaders: [
            {
              test: /\.(png|woff|woff2|eot|ttf|svg|jpg|jpeg)$/,
              use: [
                {
                  loader: 'ignore-loader'
                }
              ]
            },
            {
              test: /\.s?css$/,
              exclude: /node_modules/,
              // loaders: ['style-loader','css-loader','sass-loader?modules=true']
              use: [
                {
                  loader: 'style-loader',
                  options: {
                    modules: true,
                    localIdentName: '___[hash:base64:5]',
                    minimize: true
                  }
                },
                {
                  loader: 'css-loader',
                  options: {
                    modules: true,
                    localIdentName: '___[hash:base64:5]',
                    minimize: true
                  }
                },
                {
                  loader: 'ruby-sass-loader',
                  options: {
                    modules: true,
                    compass: true,
                    localIdentName: '___[hash:base64:5]',
                    minimize: true
                  }
                }
              ]
            },
            {
              query: {
                  presets: ['es2015']
              },
              test: /\.cjsx$/, loader: "coffee-jsx-loader",// all you have to do is just load this loader
            }
          ]
        },
        plugins: [
          // new webpack.ProvidePlugin({
          //     $: "jquery",
          //     jQuery: "jquery",
          //     _: 'underscore',
          //     "window.jQuery": "jquery"
          //   }),
          // new webpack.optimize.UglifyJsPlugin({
          //     compress: {
          //         warnings: false
          //     },
          //     comments: false,
          //     sourceMap: true
          // })
        ],
      }))
      .pipe(gulp.dest(assets.input.output.jsPath));
  }).watch(['resources/assets/**/*.js', 'resources/assets/**/*.cjsx', 'resources/assets/**/*.scss']);

})
