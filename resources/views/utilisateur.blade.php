<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <title>Les utilisateurs</title>
</head>
<body>
    


            <h1>LES INSCRITS</h1>

           
            
                @foreach($utilisateur as $utilisateur)

          <table class="table table-bordered table-striped table-responsive-stack" id="tableTwo">

<thead class="thead-dark">
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>E-mail</th>
    </tr>
</thead> 
<tbody>
    <td>{{$utilisateur->name}}</td>
    <td>{{$utilisateur->forname}}</td>
    <td>{{$utilisateur->email}}</td>
<tbody>
</table>

                @endforeach
            
          


 <script src="/js/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>