<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/connexion.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <title>Connexion</title>
</head>
<body>



<div class="container d-flex">
    <div class="image mt-5">
         <img src="images/galerie.png" alt="" width="120%" height="430px">
    </div>
    <div class="login-form mt-5 text-center">
    <form action="connexion" method="POST">
                    @csrf
                <h2 class="text-center">Se connecter</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email ou Nom d'utilisteur" required="required" autocomplete="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="">
                </div>
                <div class="formGroup ">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Inscription</button>
                    </div>
                </div>  
                <div class="formGroup ">
                    <div class="mt-3">
                        <a href="#" class="text-white font-weight-bold">Mot de passe oublié?</a>
                    </div>
                </div>  
            </form>
    </div>
</div>
 <footer>
        <div class="container ">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 ">
                    <img src="images/photo_footer.png" alt="" width="60%" height="100px">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                    <p class="font-weight-bold foot">Contacter-nous</p>
                    <p  class="text-white font-weight-bold"><img src="images/gmail.png" class="" alt="" width="35px" height="35px">simplonburkina@gmail.com</p>
                </div>
            </div>
            <div class="container mt-3 text-center">
                    <p class="text-white font-weight-bold">Simplon Burkina Copyright &copy; 2020-2021 Simplon Burkina tous droits réservés</p>
            </div>
        </div>
</footer>





    <script src="/js/jquery.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>