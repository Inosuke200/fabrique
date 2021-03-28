<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/crypte.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <title>Inscrits</title>

    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">


        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>
      <script>
      $(document).ready(function() {
    $('#example').dataTable({"sPaginationType": "full_numbers"});
});
</script>


</head>
<body>
    
    <h1 class="text-center text-danger" >Les Inscriptions en cours...</h1>

<div class="row col-lg-6 offset-lg-3 mt-5">
   {{-- <table  class="table table-bordered table-striped table-responsive-stack" id="tableTwo"> --}}
    <table  cellpadding="0" cellspacing="0" border="0" class="dataTable " id="example">
        <thead class="">
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
                    <td class="text-danger">{{$utilisateur->email}}</td>
                    <td>
                             <div class="d-flex ">
                                <div class="text-center mr-3">
                                            <form action="{{route('inscritValidate')}}" method="POST">@csrf 
                                                <input type="hidden" name="validate" value="{{$utilisateur->email}}">
                                                <button type="submit" class="btn btn-success"> Valider</button>
                                            </form>
                                        </div>
                                <div class="text-center">
                                    <form action="{{route('inscritdelete')}}" method="POST">@csrf 
                                        <input type="hidden" name="email" value="{{$utilisateur->email}}">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Etes vous sûr de vouloir supprimer ce compte?')">Supprimer</button>
                                    </form>
                                </div>
                    </td>
                             </div>
                </tr>
            </tbody>
        @endforeach
    </table>
</div>
</div>









    
 <script src="/js/jquery.js"></script>
 <script src="/bootstrap/js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>