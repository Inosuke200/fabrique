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


     public function insertData(Request $req){

        $member= new utilisateur;// A ce niveau je crée un objet ($member) de la classe utilisateur qui se trouve dans le model
        $member->name = $req->name;
        $member->forname = $req->forname;
        $member->email = $req->email;
        $member->password =Hash::make($req->password);
        $member->role = $req->role;
        $member->save(); // save() permet d'enregister dans la base de données

        return redirect('message')->with('Succès', 'votre compte a été bien crée');

    }

    public function delete(Request $request){
        $req = $request->input('email');// A ce niveau je recupère le input du fichier inscrit qui à le name email
        $delete = DB::delete('delete from utilisateurs where email = ?',[$req]); // A ce niveau c'est une requete SQL qui permet de séléctionner dans la table utilisateurs email
        return redirect('inscrit'); // Et on redirige la page apres suppression sur la meme page inscrit
    }

    public function validation(Request $request){
        $req = $request->input('validate');
        $validate = DB::update('update utilisateurs set statut = 1 where email= ?', [$req]);
        return redirect('inscrit');
    }
}
