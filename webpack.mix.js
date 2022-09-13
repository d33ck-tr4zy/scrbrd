const mix = require('laravel-mix');
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
mix.autoload({
    jquery: ['$', 'jQuery', 'window.jQuery'],
});

mix.webpackConfig({
    stats: {
        children: true,
    },

})

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/head.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps(true, 'source-map')
    .version();

mix.browserSync({
    proxy: "scrbrd.test",
    host: "scrbrd.test",
    // port: 80,
    open: "external",
});
