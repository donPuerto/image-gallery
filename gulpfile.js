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
    //mix.sass('app.scss');
    mix.styles([
        //"normalize.css"
        "bootstrap.min.css",
        "ripples.css",
        "material.css",
        "roboto.css",
        "lightbox.css",
        "main.css"
    ]);

    mix.scripts([
        "lightbox.js",
        "app.js"

    ]);

    mix.version(["css/all.css","js/all.js"]);
});
