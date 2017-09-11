const mix = require('laravel-mix');

mix.disableNotifications()
    .copy('./resources/assets/img/', './public/img/')
    .sass('./resources/assets/scss/style.scss', './public/css/style.css')
