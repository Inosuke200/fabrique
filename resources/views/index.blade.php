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
                    <a href="/inscrire" class=" ml-5" ><input  value="S'inscrire"type="button" class="col text-white outline-primary text-uppercase"></a>
                    <a href="/connect" class=" ml-5" ><input  value="Se connecter" type="button" class="col text-white outline-primary  text-uppercase"></a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    </body>
</html>
