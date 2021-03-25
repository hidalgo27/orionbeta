const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/main.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])

mix.postCss('resources/css/plugins/plugins.css', 'public/css')
// mix.postCss('resources/css/vendor/library.css', 'public/css')

mix.scripts([
    // 'resources/js/vendor/OwlCarousel/owl.carousel.min.js',
    // 'resources/js/vendor/bootstrap/js/bootstrap.bundle.js',
    // 'resources/js/vendor/bootstrap/js/bootstrap.bundle.js',
    // 'resources/js/vendor/bootstrap/js/bootstrap.bundle.min.js',
    'resources/js/vendor/semantic/semantic.min.js',
    'resources/js/library/jquery.countdown.min.js',
    // 'resources/js/library/custom.js',
    'resources/js/library/product.thumbnail.slider.js',
    'resources/js/library/offset_overlay.js',
    'resources/js/library/night-mode.js',
], 'public/js/plugins.js');

if (mix.inProduction()) {
    mix.version();
}

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();
