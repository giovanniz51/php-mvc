var elixir = require('laravel-elixir');
elixir.config.sourcemaps = false;

var gulp = require('gulp');

elixir(function (mix) {
       //compile sass to css
    mix.sass('resources/assets/sass/app.scss', 'resources/assets/css');

    //combine css file
    mix.styles(
        [
           'resources/assets/css/app.css',
            'node_modules/slick-carousel/slick/slick.css'

        ], 'public/css/all.css', //output file
        './');

    var bowerPath = 'node_modules';
    mix.scripts(
        [
            //Jquery
            bowerPath + '/jquery/dist/jquery.min.js',
            //foundation js
            bowerPath + '/foundation-sites/dist/js/foundation.min.js',
            //other dependencies
            bowerPath + '/slick-carousel/slick/slick.min.js'
        ], 'public/js/all.js', './');
});