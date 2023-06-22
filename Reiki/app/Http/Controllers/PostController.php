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

    public function show()
    {
        $titles = [
            'Origine',
            'État d\'esprit'
        ];


        return view('introduction', compact('titles'));
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
        $contact = [
            'Contactez-moi'
        ];

        return view('contact', compact('contact'));
    }
}
