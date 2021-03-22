<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/dash.css">
    <title>liste</title>
</head>
<body>
<div class="container-fluid bg-danger entete">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3   mt-5 ">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                   <!--<a href="/table"> <button type="button" class="btn btn-outline-primary  dropdown-toggle-split ml-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accueil</button></a>-->
                   <a href=""> <input type="button" value=Accueil class="btn btn-outline-primary ml-5"></a>
                   <a href="/logout"> <input type="button" value="Déconnexion" class="btn btn-outline-primary ml-5"></a>
                    <!--<button type="button" class="btn btn-outline-primary  dropdown-toggle-split ml-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Réservations</button>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <button type="button" class="btn btn-outline-primary  dropdown-toggle-split ml-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listes</button>-->
                        <!--<li class="nav-item active">
                        <div class="btn-group ml-5 ">-->
                       <!-- <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrateur</button>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Nom</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Prenom</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Deconnexion</a>
                          </div>
                        </div>
                        </li>-->
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
<div class="container">
<h2 class="mt-2">Possibilité d'effectuer une réservation</h2>
<table class="table table-bordered table-striped table-responsive-stack" id="tableOne">
   <thead class="thead-dark">
      <tr>
         <th>Date</th>
         <th>Jours</th>
         <th>Heure</th>
         <th>Places disponibles</th>
         <th>Reservations</th>
      </tr>
   </thead>
   <!--<tbody>
      <tr>
         <td>Apple</td>
         <td>Green and Red</td>
         <td>Sweet and Tart</td>
         <td>Mild Sweetness</td>
         <td>Mild Sweetness</td>
      </tr>
      <tr>
         <td>Banana</td>
         <td>Yellow</td>
         <td>Sweet and Mushy</td>
         <td>Mild Sweetness</td>
         <td>Mild Sweetness</td>
      </tr>
      <tr>
         <td>Mango</td>
         <td>Yellowish Green</td>
         <td>Tangy</td>
         <td>Mild Sweetness</td>
         <td>Mild Sweetness</td>
      </tr>
      <tr>
         <td>Orange</td>
         <td>Orange</td>
         <td>Sweet and Tangy</td>
         <td>Mild Sweetness</td>
         <td>Mild Sweetness</td>
      </tr>
      <tr>
         <td>Blueberry</td>
         <td>Blue</td>
         <td>Mild Sweetness</td>
         <td>Mild Sweetness</td>
         <td>Mild Sweetness</td>
      </tr>
      
   </tbody>-->
</table>
   <h2 class="mb-2">Liste des places réservées</h2>
   <table class="table table-bordered table-striped table-responsive-stack" id="tableTwo">
   <thead class="thead-dark">
      <tr>
         <th>Nom</th>
         <th>Prenom</th>
         <th>email</th>
         <th>Date</th>
      </tr>
   </thead>
   <tbody>
    <!--  <tr>
         <td>Brocolli</td>
         <td>Green</td>
         <td>Bitter</td>
         <td>Bitter</td>
      </tr>
      <tr>
         <td>Peas</td>
         <td>Green</td>
         <td>Mushy</td>
         <td>Bitter</td>
      </tr>
      <tr>
         <td>Lettuce</td>
         <td>Yellowish Green</td>
         <td>Crisp</td>
         <td>Bitter</td>
      </tr>
   </tbody>-->
</table>
</div>
<footer class="mt-2">
       <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
                    <img src="/images/photo_footer.png" alt="" width="60%" height="80px">
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
                    <p class="font-weight-bold foot">Contacter-nous</p>
                    <p class="font-weight-bold foot text-white"> <img src="/images/Envelope.png" alt="">simplonburkina@gmail.com</p>
                </div>
            </div>
            <div class="container mt-4 text-center">
                <div class="text-white font-weight-bold">
                  Simplon Burkina Copyright &copy; 2020-2021 Simplon Burkina tout droit reservée
                </div>
            </div>
        </div>
   </footer>
    <script src="/js/jquery.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/table.js"></script>
</body>
</html>