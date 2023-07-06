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

    public function hola()
    {
       
        return 'hola mundo';
    }

    public function content ()
    {
        $posts = [
            'Imposition par les mains'
        ];

        return view('techniques', compact('posts'));
    }

    public function contact() 
    {
        $join = [
            'Contactez-moi'
        ];

        return view('contact', compact('join'));
    }
}
