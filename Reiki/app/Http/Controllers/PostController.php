<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $articles = [
        [
           'title' => 'Mon premier article',
           'content' => 'Voici un magnifique bonsaï' 
        ],
        [
            'title' => 'Mon deuxième article',
            'content' => 'Voici notre belle labradorite'
        ],
        [
            'title' => 'Mon troisième article',
            'content' => 'Voici mon livre de chevet'
        ],
    ];
 

    return view('home', [
        'articles' => $articles
    ]);
    }
}
