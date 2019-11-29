const mix = require('laravel-mix');

const tailwindcss = require('tailwindcss');


mix.setPublicPath('./');

mix.js('resources/js/app.js', './assets/js')
    .sass('resources/sass/app.scss', './assets/css').options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    });
mix.browserSync('play.local');

mix.browserSync({
    proxy: 'play.local',
    files: [
        '**/*.php',
        'js/**/*',
        'css/**/*',
    ],
});