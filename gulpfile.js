var elixir = require('laravel-elixir');

require('laravel-elixir-rename');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.copy('resources/assets/bower/jquery/dist/jquery.min.js', 'resources/assets/js/jquery.min.js');
    mix.copy('resources/assets/bower/modernizr/modernizr.js', 'resources/assets/js/modernizr.js');
    mix.copy('resources/assets/bower/detectizr/dist/detectizr.min.js', 'resources/assets/js/detectizr.min.js');
    mix.copy('resources/assets/bower/jquery-easing-original/jquery.easing.min.js', 'resources/assets/js/jquery.easing.min.js');
    mix.copy('resources/assets/bower/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js', 'resources/assets/js/bootstrap-slider.min.js');
    mix.copy('resources/assets/bower/magnific-popup/dist/jquery.magnific-popup.min.js', 'resources/assets/js/jquery.magnific-popup.min.js');
    mix.copy('resources/assets/bower/isotope/dist/isotope.pkgd.min.js', 'resources/assets/js/isotope.pkgd.min.js');
    mix.copy('resources/assets/bower/jquery-waypoints/lib/jquery.waypoints.min.js', 'resources/assets/js/jquery.waypoints.min.js');
    mix.copy('resources/assets/bower/jquery-waypoints/lib/shortcuts/sticky.min.js', 'resources/assets/js/waypoints-sticky.min.js');
    mix.copy('resources/assets/bower/waves/dist/waves.min.js', 'resources/assets/js/waves.min.js');
    mix.copy('resources/assets/bower/velocity/velocity.min.js', 'resources/assets/js/velocity.min.js');
    //mix.copy('resources/assets/bower/pace/pace.min.js', 'resources/assets/js/pace.min.js');
    mix.copy('resources/assets/bower/pace/pace.min.js', 'public/js/pace.min.js');
    mix.copy('resources/assets/bower/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js', 'resources/assets/js/jquery.mCustomScrollbar.js');
    //mix.copy('resources/assets/bower/jquery-mousewheel/jquery.mousewheel.min.js', 'resources/assets/js/jquery.mousewheel.min.js');
    //mix.copy('resources/assets/bower/jquery.kinetic/jquery.kinetic.min.js', 'resources/assets/js/jquery.kinetic.min.js');
    mix.copy('resources/assets/bower/jasny-bootstrap/dist/js/jasny-bootstrap.min.js', 'resources/assets/js/jasny-bootstrap.min.js');

    mix.copy('resources/assets/bower/fontawesome/fonts', 'public/fonts');
    mix.copy('resources/assets/bower/fontawesome/scss', 'resources/assets/sass/');
    mix.copy('resources/assets/bower/jasny-bootstrap/scss', 'resources/assets/sass/jasny-bootstrap');
    mix.copy('resources/assets/bower/bootstrap-sass-official/assets/stylesheets/', 'resources/assets/sass/');
    mix.copy('resources/assets/bower/bootstrap-social/bootstrap-social.scss', 'resources/assets/sass/_bootstrap-social.scss');
    mix.scripts([
        'jquery.min.js',
        'modernizr.js',
        'detectizr.min.js',
        'jquery.easing.min.js',
        'velocity.min.js',
        'bootstrap.min.js',

        'smoothscroll.js',
        'waves.min.js',
        'jquery.waypoints.min.js',
        'waypoints-sticky.min.js',
        'form-plugins.js',
        'jquery.magnific-popup.min.js',
        'jquery.mCustomScrollbar.js',
        'isotope.pkgd.min.js',
        'bootstrap-slider.min.js',
        //'jasny-bootstrap.min.js',
        //'pace.min.js',
        //'waypoint.js',
        'scripts.js'

    ], 'public/js/vendor.js');

    mix.sass("app.scss");
});
