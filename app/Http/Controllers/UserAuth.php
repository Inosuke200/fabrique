<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function userConnexion(Request $req){
        $data = $req-> input();
        $req-> session()->put('connexion',$data['email']);
        echo session('email');
        return redirect('liste');

    }
}
