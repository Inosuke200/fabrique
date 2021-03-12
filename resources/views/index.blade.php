<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <title>Accueil | welcome</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
                    </li>  
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="inscription" class=" ml-5" ><input  value="S'inscrire"type="button" class="col text-white outline-primary text-uppercase"></a>
                    <a href="connexion" class=" ml-5" ><input  value="Se connecter" type="submit" class="col text-white outline-primary  text-uppercase"></a>
                </form>
            </div>
    </nav>
<div class="container">
        <div class="up">
            <p class="text-center text-body well font-weight-bold ">BIENVENUE</p>
        </div>
</div>

<div class="container">
    <div class=" text-center mt-5 ">
        <img src="images/photo_accueil.png" alt="" width="60%" height="120px" class=" ">
    </div>
</div>
        @extends('app')

        @section('footer')
        @endsection
    <script src="/js/jquery.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
