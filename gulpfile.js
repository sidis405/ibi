var elixir = require('laravel-elixir');

require('elixir-juice'); 

elixir(function(mix) {
    mix.less('style.less').scripts('main.js');

     mix.bower({
        src: './resources/bower_components',
        output: './resources/assets/vendor'
    });

    mix.scripts('./resources/assets/vendor/**/*.js', 'public/js/vendor.js');
    mix.styles('./resources/assets/vendor/**/*.css', 'public/css/vendor.css');
});
