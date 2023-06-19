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

    public function show($id)
    {
        $posts = [
            1 => 'Origine',
            2 => 'État d\'esprit'
        ];

        $post = $posts[$id] ?? 'Pas de titre';

        return view('introduction', compact('post'));
    }

    public function content ()
    {
        $posts = [
            'Imposition par les mains'
        ];

        return view('techniques', compact('posts'));
    }

    public function form() 
    {
        $posts = [
            'Contactez-moi'
        ];

        return view('contact', compact('posts'));
    }
}
