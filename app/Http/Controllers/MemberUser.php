<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use App\Models\utilisateur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class MemberUser extends Controller
{


    public function inscrit(){
        $utilisateur = DB::select('select name, forname, email, statut from utilisateurs where statut = 0 ');
        return view('inscrit', compact('utilisateur'));
    }



    // public function insertData(){

    //     request()->validate(
    //         [
    //             'nom'=> ['required','string'],
    //             'prenom'=> ['required','string'],
    //             'email'=> ['required','email'],
    //             'password'=> ['required','confirmed','min:3','max:6'],
    //             'password_confirmation'=> ['required'],
    //         ]
    //         );
            
    // $utilisateur = utilisateur::create([
    //             'nom' => request('nom'),
    //             'prenom' => request('prenom'),
    //             'email' => request('email'),
    //             'password' => bcrypt(request('password')),
               
    //     ]) ;

    //              Mail::to($utilisateur)->send(new TestMail($utilisateur));
    //              return view ('message');

    // }





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
        return redirect ()->route('inscrit');
    }
   
}
