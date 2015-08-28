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

/*
elixir(function(mix) {
    mix.sass('app.scss');
});
*/

// javascript development libs
elixir(function(mix) {

    // jeditable
    mix.copy(
        'resources/assets/vendor/jeditable/jquery.jeditable.js',
        'public/js/plugins/jeditable/jquery.jeditable.js'
    );

    // jquery-nestable
    mix.copy(
        'resources/assets/vendor/jquery-nestable/jquery.nestable.js',
        'public/js/plugins/nestable/jquery.nestable.js'
    );
    
    // jquery-validation
    mix.copy(
        'resources/assets/vendor/jquery-validation/dist/jquery.validate.js',
        'public/js/plugins/validate/jquery.validate.js'
    );
    mix.copy(
        'resources/assets/vendor/jquery-validation/dist/additional-methods.js',
        'public/js/plugins/validate/jquery.validate.additional-methods.js'
    );

    // toastr
    mix.copy(
        'resources/assets/vendor/toastr/toastr.js',
        'public/js/plugins/toastr/jquery.toastr.js'
    );
        
    // pace
    mix.copy(
        'resources/assets/vendor/pace/pace.js',
        'public/js/plugins/pace/jquery.pace.js'
    );

    // metisMenu
    mix.copy(
        'resources/assets/vendor/metisMenu/dist/metisMenu.js',
        'public/js/plugins/metisMenu/jquery.metisMenu.js'
    );
});