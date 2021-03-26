<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\programme;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UtilisateursController extends Controller
{



    

    public function liste(){
        $liste = programme::all();//on accéde à la constante all dpuis l'exterieur de la classe en utilisant le nom de la table utilisateur de ma base donnée et ::
        return view('liste', compact('liste'));
    }

    public function programme(){
        $programme = programme::all();//on accéde à la constante all dpuis l'exterieur de la classe en utilisant le nom de la table utilisateur de ma base donnée et ::
        return view('programmeliste', compact('programme'));
    }


    public function program(Request $prog)
    {
       // $utilisateur = Utilisteurs::all();
       //return view('inscription', compact('utilisateur','utilisateur'));
        $member= new programme;// A ce niveau je crée un objet ($member) de la classe Programme qui se trouve dans le model
        $member->date = $prog->date;
        $member->jours = $prog->jours;
        $member->debut = $prog->debut;
        $member->fin = $prog->fin;
        $member->places = $prog->places;
        $member->save(); // save() permet d'enregister dans la base de données
        return redirect('programmeliste');
    }


    //create a function inscription and return file inscription
    public function inscription(){
       // return view('inscription');
    }

}
