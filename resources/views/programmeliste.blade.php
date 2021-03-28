<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/inscrit.css">
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
                               <!--<a href="{{asset ('liste')}}"> <button type="button" class="btn btn-outline-primary  dropdown-toggle-split ml-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Programmer</button></a>-->
                               <a href="index"> <input type="button" value="Accueil" class="btn btn-outline-primary"></a>
                                <!--<button type="button" class="btn btn-outline-primary  dropdown-toggle-split ml-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Réservations</button>
                                <button type="button" class="btn btn-outline-primary  dropdown-toggle-split ml-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inscrits</button>-->
                                <a href="prorammeliste"> <input type="button" value="Programme" class="btn btn-outline-primary ml-5"></a>
                                <a href="/logout"> <input type="button" value="Déconnexion" class="btn btn-outline-primary ml-5"></a>
                                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                    <div class="btn-group ml-5 ">
                                    </ul>
                                  </div>
                              </nav>
                        </div>
                    </div>
                </div>
            </div>
 <table class="tableau-style center bg-">
        <tr class="bg-primary font-">
            <th>Date</th>
            <th>Jours</th>
            <th>Debut</th>
            <th>Fin</th>
            <th>Places</th>
            <th width="" class="center">Modifier</th>
        </tr>
        @foreach($programme as $programme)
        <tr>
            
            <td>{{$programme->date}}</td>
            <td>{{$programme->jours}}</td>
            <td>{{$programme->debut}}</td>
            <td>{{$programme->fin}}</td>
            <td>{{$programme->places}}</td>
            <td>
            <form action="" method="post">@csrf
                <input type="hidden" value="" name="email">
                <button type="submit" class="btn btn-primary">Modifier</button>
              </form>
            </td>
        </tr>
        @endforeach
    </table>
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