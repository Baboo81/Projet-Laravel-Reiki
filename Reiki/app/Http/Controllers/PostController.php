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
}
