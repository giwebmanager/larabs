const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

// JS
mix.js("resources/js/site.js", "public/theme/js/site.js")
    .js("resources/js/admin.js", "public/theme/js/admin/admin.js");

// SASS
mix.sass('resources/sass/site.sass', 'public/theme/css/site.css')
        .options({
            processCssUrls: false,
            postCss: [ tailwindcss('tailwind.config.js') ],
            })
    .sass('resources/sass/admin.sass', 'public/theme/css/admin/admin.css')
        .options({
            processCssUrls: false,
            postCss: [ tailwindcss('tailwind.config.js') ],
        });

// CSS
mix.postCss("resources/css/vendors.css", "public/theme/css/vendors.css", [
    require("tailwindcss"),
]);


