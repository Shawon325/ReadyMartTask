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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');


mix.styles([
    'public/backend_assets/css/bootstrap.min.css',
    'public/backend_assets/css/londinium-theme.css',
    'public/backend_assets/css/styles.css',
    'public/backend_assets/css/icons.css'
], 'public/css/all.css');

mix.scripts([
    'public/backend_assets/js/plugins/charts/sparkline.min.js',
    'public/backend_assets/js/plugins/forms/uniform.min.js',
    'public/backend_assets/js/plugins/forms/select2.min.js',
    'public/backend_assets/js/plugins/forms/inputmask.js',
    'public/backend_assets/js/plugins/forms/autosize.js',
    'public/backend_assets/js/plugins/forms/inputlimit.min.js',
    'public/backend_assets/js/plugins/forms/listbox.js',
    'public/backend_assets/js/plugins/forms/multiselect.js',
    'public/backend_assets/js/plugins/forms/validate.min.js',
    'public/backend_assets/js/plugins/forms/tags.min.js',
    'public/backend_assets/js/plugins/forms/switch.min.js',
    'public/backend_assets/js/plugins/forms/uploader/plupload.full.min.js',
    'public/backend_assets/js/plugins/forms/uploader/plupload.queue.min.js',
    'public/backend_assets/js/plugins/forms/wysihtml5/wysihtml5.min.js',
    'public/backend_assets/js/plugins/forms/wysihtml5/toolbar.js',
    'public/backend_assets/js/plugins/interface/daterangepicker.js',
    'public/backend_assets/js/plugins/interface/fancybox.min.js',
    'public/backend_assets/js/plugins/interface/moment.js',
    'public/backend_assets/js/plugins/interface/jgrowl.min.js',
    'public/backend_assets/js/plugins/interface/datatables.min.js',
    'public/backend_assets/js/plugins/interface/fullcalendar.min.js',
    'public/backend_assets/js/plugins/interface/timepicker.min.js',
    'public/backend_assets/js/bootstrap.min.js',
    'public/backend_assets/js/application.js',
], 'public/js/all.js');
