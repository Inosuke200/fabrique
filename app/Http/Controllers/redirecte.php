<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class redirecte extends Controller
{
    public function inscrire(){
        return view('inscription');
    }
    public function connect(){
        return view('connexion');
    }
}

 