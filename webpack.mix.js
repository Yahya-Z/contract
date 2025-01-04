// filepath: /C:/Users/Yahya/contractApp/webpack.mix.js
const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
     tailwindcss,
   ]);