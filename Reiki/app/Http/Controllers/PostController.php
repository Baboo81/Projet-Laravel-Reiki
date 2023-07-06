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
            'Origine'
        ];

        $txt = [
            'Le Reiki date de la fin du XIXe siècle, il fut découvert par un pratiquant spirituel. Le Reiki prends sa source dans les divers courants de la pensée bouddhiste et shintoïste. Considérant les troubles physiques ou psychologiques comme indicateurs d\'une disharmonie interne, le Reiki permet à chacun de canaliser l\'Énergie Universelle et de ainsi à l\'épanouissementpersonnel et spirituel.
            Souvent présenté comme une simple et ordinaire technique de guérison, il est avant tout un art de soigner et une philosophie de vie.'
        ];


        return view('introduction', compact('titles', 'txt'));
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
