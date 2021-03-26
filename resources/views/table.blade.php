<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/inscription.css">
    <title>Programme</title>
</head>
<body>
<!--<h1><span class="blue">&lt;</span>Table<span class="blue">&gt;</span> <span class="yellow">Responsive</span></h1>
        <h2>Created with love by <a href="https://github.com/pablorgarcia" target="_blank">Pablo García</a></h2>-->

    <div class="container-fluid bg-danger entete">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3   mt-5 ">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                   <!--<a href="{{asset ('liste')}}"> <button type="button" class="btn btn-outline-primary  dropdown-toggle-split ml-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Programmer</button></a>-->
                   <a href="index"> <input type="button" value="Accueil" class="btn btn-outline-primary ml-5"></a>
                    <!--<button type="button" class="btn btn-outline-primary  dropdown-toggle-split ml-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Réservations</button>-->
                    <!-- <a href="/log"> <input type="button" value="Programme" class="btn btn-outline-primary ml-5"></a>
                   <button type="button" class="btn btn-outline-primary  dropdown-toggle-split ml-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inscrits</button>-->
                   <a href="inscrit"> <input type="button" value="Inscrits" class="btn btn-outline-primary ml-5"></a>
                   <a href="/logout"> <input type="button" value="Déconnexion" class="btn btn-outline-primary ml-5"></a>
                      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                        <div class="btn-group ml-5 ">
                        <!--<button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrateur</button>-->
                           <!-- <span class="sr-only">Toggle Dropdown</span>-->
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Nom</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Prenom</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">Deconnexion</a>
                          </div>
                        </div>
                        </li>
                       <!-- <li class="nav-item">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split ml-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Commentaire</button>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Ajouter</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Supprimer</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Modifier</a>
                            </div>
                        </li>
                        <li class="nav-item">
                          <button type="button" class="btn btn-outline-primary ml-4">Deconnexion</button>
                        </li>-->
                        </ul>
                      </div>
                  </nav>
            </div>
        </div>
    </div>
 </div>
 <h1 class="text-dark">Programmation de la salle</h1>

 <div class="container d-flex">
    <div class="image mt-5">
         <img src="images/photos.png" alt="" width="80%" height="430px">
    </div>
    <div class="login-form mt-5">
    <form action="table" method="POST">
               @csrf
                <h2 class="text-center text-dark test">Programme</h2>  
                    
                <div class="form-group">
                    <input type="date" name="date" class="form-control" placeholder="nombre de place" required="required" autocomplete="">
                </div>
                <div class="form-group">
                  <select name="jours" id="monselect">
                        <option value="Lundi" selected>Lundi</option>
                        <option value="Mardi" >Mardi</option>
                        <option value="Mercredi" >Mercredi</option>
                        <option value="Jeudi" >Jeudi</option>
                        <option value="Vendredi" >Vendredi</option>
                        <option value="Samedi" >Samedi</option>
                        <option value="Dimanche" >Dimanche</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="example-time-input" class="text-color text-center font-weight-bold form-label">Heure</label>
                <div class="row justify-content-center">
                   <input type="time" value="" name="debut" class="col-5 form-control" id="example-time-input">
                    <div class="col-2" >
                        <p class="text-center">à</p>
                    </div>
                   <input type="time" value="" name="fin" class="col-5 form-control" id="example-time-input">
                </div>
                </div>
                <div class="form-group">
                    <input type="number" name="places" class="form-control" placeholder="nombre de place" required="required" autocomplete="off">
                </div>
                <div class="formGroup ">
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">Soumettre</button>
                    </div>
                </div>    
            </form>
    </div>
</div>
        <a href="/retour"><input type="button" value="Retour" class="btn btn-outline-primary ml-5"></a>
            <script src="/js/jquery.js"></script>
            <script src="/bootstrap/js/bootstrap.min.js"></script>
            <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
                
</body>
</html>