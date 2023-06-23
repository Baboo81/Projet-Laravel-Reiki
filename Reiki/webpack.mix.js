const mix = require('laravel-mix');

//Le webpack va permettre de compiler le js ainsi que le css se trouvant dans resources 
//pour le placer compilé dans le dossier public:
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);