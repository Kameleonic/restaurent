const mix = require('laravel-mix');
const tailwindcss = require("tailwindcss");
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
    .sass('resources/scss/app.scss', 'public/css')
    .sass('resources/scss/custom.scss', 'public/css')
    .sass('resources/scss/partials/admin.scss', 'public/css')
    .sass('resources/scss/partials/sidebar.scss', 'public/css')
    .sass('resources/scss/partials/variables.scss', 'public/css')

    // .postCss('resources/css/custom.css', 'public/css')

    .options({
        processCssUrls: false,
        postCss: [tailwindcss("tailwind.config.js")],
    });
// mix.js("resources/js/app.js", "public/js")

//     .sass("resources/css/app.css", "public/css")

//     .options({
//         processCssUrls: false,
//         postCss: [tailwindcss("tailwind.config.js")],

//     })
//     ;

mix.webpackConfig({
    stats: {
        children: true,
    },
});
