<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberUser;  // A ce niveau j'appelle le chemin où se trouve mon contrôleur( le controllers c'est juste une classe)
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\redirecte;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UtilisateursController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('index', 'index');

Route::view('liste', 'liste');

Route::view('dashbord', 'dashbord');

Route::view('inscription', 'inscription');
Route::POST('inscription', [MemberUser::class, 'insertData']); // Ici on fait appelle au formulaire avec la méthode post, on appelle le controller en spécifiant que c'est une class et ensuite on appelle la fonction crée dan le controller

Route::view('connexion', 'connexion');
Route::POST('connexion', [UserAuth::class, 'userconnexion']);

Route::view('profile', 'profile');

Route::get('/logout', function () {

  if(session()->has('connexion'))
  {
      session()->pull('connexion');
  }
    return redirect('connexion');
});

route::get('inscrire', [redirecte::class, 'inscrire']);

route::get('connect', [redirecte::class, 'connect']);
route::get('log', [redirecte::class, 'log']);


Route::get('/send-email', [MailController::class,'sendEmail']);

Route::view('/message', 'message');

Route::get('/utilisateur', function(){

    
    $utilisateur = DB::table('utilisateurs')->get();
    return view('/utilisateur', compact('utilisateur'));

});

Route::get('/inscrit', [MemberUser::class, 'inscrit'])->name('inscrit');

Route::POST('/inscrit', [MemberUser::class, 'delete'])->name('inscritdelete');

Route::POST('/validation', [MemberUser::class, 'validation'])->name('inscritValidate');


Route::get('/programmeliste', [UtilisateursController::class, 'programme']);

Route::view('table', 'table');
Route::POST('table', [UtilisateursController::class, 'program']);

Route::get('/liste', [UtilisateursController::class, 'liste']);