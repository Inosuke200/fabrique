<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;// Dans ce cas on fait appelle au classe TestMail qui est  dans le dossier Mail 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Ici on fait appelle au dossier Mail via les Facades

class MailController extends Controller
{
    public function sendEmail(){// ici je crée une fonction avec le nom sendMail
            $details = [
                'title' => 'Fabrique Simplon Burkina',
                'body' => 'Votre inscription est en cours de traitement. Elle sera validée dans les 24h qui suivent',
            ];

            Mail::to('ismaelouiya999@gmail.com')->send(new TestMail($details));
            return view('message');
    }
}
