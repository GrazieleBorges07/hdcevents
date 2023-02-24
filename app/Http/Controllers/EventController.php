<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $nome = "Graziele";
        $idade = 24;
        $arr = [10, 20, 30, 40];

        return view('welcome', 
            [
            'name' => $nome,
            'idade' => $idade,
            'profissao' => 'Programador',
            'arr' => $arr
            ]
        );
    }

    public function create(){
        return view('events.create');
    }
}
