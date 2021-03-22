<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/crypte.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <title>Inscrits</title>
</head>
<body>
    
    <h1 class="text-center text-danger" >Les Inscriptions en cours</h1>
<div class="row col-lg-6 offset-lg-3 mt-5">
    <table  class="table table-bordered table-striped table-responsive-stack" id="tableTwo">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Forname</th>
                <th>Email</th>
                <th width=""  class="center">Décision</th>
            </tr> 
         </thead>
        @foreach ($utilisateur as $utilisateur )
            <tbody>
                <tr>
                    <td class="text-danger">{{$utilisateur->name}}</td>
                    <td class="text-danger">{{$utilisateur->forname}}</td>
                    <td class="text-white">{{$utilisateur->email}}</td>
                    <td>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Valider</button>
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</div>









    
 <script src="/js/jquery.js"></script>
 <script src="/bootstrap/js/bootstrap.min.js"></script>
 <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>