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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>