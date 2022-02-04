<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index() {
        $nome = "matheus";
        $idade = 20;
        $altura = 1.7;

        return view( 'welcome', [
            'nome'  => $nome,
            'idade' => $idade,
            'altura'=> $altura 
        ]);
    }

    public function create() {
        return view('events.create');
    }
}
