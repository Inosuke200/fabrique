<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\utilisateur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class MemberUser extends Controller
{


    public function inscrit(){
        $utilisateur = utilisateur::all();
        return view('inscrit', compact('utilisateur'));
    }


    function insertData(Request $req){

        $member= new utilisateur;// A ce niveau je crée un objet ($member) de la classe utilisateur qui se trouve dans le model
        $member->name = $req->name;
        $member->forname = $req->forname;
        $member->email = $req->email;
        $member->password =Hash::make($req->password);
        $member->role = $req->role;
        $member->save(); // save() permet d'enregister dans la base de données

        return redirect('connexion')->with('Succès', 'votre compte a été bien crée');

    }
}
