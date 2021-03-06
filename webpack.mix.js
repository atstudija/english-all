let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.browserSync({proxy:'http://english'});
mix.js('resources/assets/js/app.js', 'public/js')
   	.sass('resources/assets/sass/app.scss', 'public/css')
	.stylus('resources/assets/stylus/app.styl', 'public/css/stylus.css', {
    use: [
      require('rupture')()
    ]
  	})
  	mix.combine(['public/css/sass.css','public/css/stylus.css'], 'public/css/app.css')