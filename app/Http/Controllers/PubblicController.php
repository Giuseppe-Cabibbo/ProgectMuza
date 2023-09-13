<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PubblicController extends Controller
{
    public function home () {
        return view('welcome');
    }

    public function index(){
    return view('auth.register'); // Percorso corretto per la vista "register"
    }

}


