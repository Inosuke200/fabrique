
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dash.css">
    <title>Dashboard</title>
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
                        <a href="/log"> <input type="button" value="Programmer" class="btn btn-outline-primary"></a>
                   <!--<a href="/log"> <button type="submit" class="btn btn-outline-primary  dropdown-toggle-split ml-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Programmer</button></a>-->
                    <!-- <button type="button" class="btn btn-outline-primary  dropdown-toggle-split ml-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Réservations</button>-->
                         <a href="/list"> <input type="button" value="Réservations" class="btn btn-outline-primary ml-4"></a>
                    <!--<button type="button" class="btn btn-outline-primary  dropdown-toggle-split ml-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inscrits</button>-->
                          <a href="/inscrit"> <input type="button" value="Les inscrits" class="btn btn-outline-primary ml-4"></a>
                      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                        <div class="btn-group ml-5 ">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrateur</button>
                           <!-- <span class="sr-only">Toggle Dropdown</span>-->
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Nom</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Prenom</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Deconnexion</a>
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
<div class="container " id="borde">
    <div class="row" >
        <img src="/images/dash.jpeg" alt="" width="350" height="350" class="m-auto">
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
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
       
</body>
</html>