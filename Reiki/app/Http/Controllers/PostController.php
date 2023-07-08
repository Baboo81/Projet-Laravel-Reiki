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
       
        return view('introduction', compact('title'));
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
