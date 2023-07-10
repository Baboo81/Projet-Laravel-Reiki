<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            'Le Reiki',
            'un art de vivre'
        ];
       

        return view('home', compact('posts'));
    }

    public function intro()
    {
        $title = 'Qu\' est-ce que le Reiki ?';
        $content = 'Le Reiki fut découvert à la fin du XIXe siècle par un pratiquant spirituel.
        Le Reiki prend sa source dans divers courants de la pensée bouddhiste et shintoïste. Considérant les troubles physiques ou psychologiques comme indicateurs d\'une disharmonie interne, le Reiki permet à chacun de canaliser l\' Énergie Universelle et de parvenir ainsi à l\' épanouissement personnel et spirituel. Trop souvent présenté comme une simple et ordinaire technique de guérison, il est avant tout un art de soigner et une philosophie de vie.';
       
        return view('introduction', compact('title', 'content'));
    }

    public function tech ()
    {
        $posts = 'Imposition par les mains';
        
        return view('techniques', compact('posts'));
    }

    public function form() 
    {
        $join = 'Contactez-moi';

        return view('contact', compact('join'));
    }

    public function parametros($param_1, $param_2, $param_3)
    {
        $textoFinal1 = 'El parametro 1 vale' . $param_1 . ' . ';
        $textoFinal2 = 'El parametro 2 vale' . $param_2 . ' . ';
        $textoFinal3 = 'El parametro 3 vale' . $param_3 . ' . ';

        return view('parametros', compact('textoFinal1', 'textoFinal2', 'textoFinal3'));
    }
}
