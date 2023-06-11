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

    public function introduction($id)
    {
        $posts = [
            1 => 'Origine',
            2 => 'État d\'esprit'
        ];

        $post = $posts[$id];

        return view('introduction', [
            'posts' => $post
        ]);
    }

    public function techniques ()
    {
        $techTitle = [
            'Imposition par les mains'
        ];

        return view('techniques');
    }
}
