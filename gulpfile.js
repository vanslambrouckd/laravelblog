var elixir = require('laravel-elixir');
process.env.DISABLE_NOTIFIER = true; //omdat  gulp-notify: [Error in notifier] Error in plugin 'gulp-notify' op windows
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
    /*
    cli: gulp watch
    cli: gulp tdd (voor phpunit)
     */
    //via CLI gulp --production zet je minify aan
    mix.less('app.less', 'resources/css').coffee();

    mix.styles([
        'app.css',
        'libs/select2.min.css'
    ]);

    mix.scripts([
       'libs/jquery.min.js',
        'libs/bootstrap.min.js',
        'libs/select2.min.js'
    ]);
    /*
     webserver kan file cache hebben,
     via .version() leg je cachebuster aan, zorgt dat caching van files afligt op de server
     output is public/build/css/output + identifier.css
     in de view gebruik je dan href="{{ elixir('css/output.css') }}" om de unieke output css te linken
     */
    //mix.version('public/css/app.css');
    mix.phpUnit().phpSpec();

    /*
    mix.styles([
        'normalize.css',
        'app.css'
    ], $outPutDir.$filename, $sourceDir); //concat files

    //idem voor
    mix.scripts([
    ]);

    mix.phpUnit();
    */
    //mix.sass('app.scss').coffee();
});
