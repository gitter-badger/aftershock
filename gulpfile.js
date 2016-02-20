var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass(['vendor.scss'], 'public/css/vendor.css');

	mix.copy('resources/assets/img', 'public/img')
       .copy([
    		'node_modules/bootstrap/dist/js/bootstrap.min.js', 
    		'node_modules/jquery/dist/jquery.min.js',
    		'node_modules/select2/dist/js/select2.min.js',
    	], 'public/js');
    
    mix.version(['css/vendor.css']);
});
