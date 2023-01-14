<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Projet</title>
  </head>

  <body>
    <h1 class="text-center text-warning"><u>DETAILS</u></h1>

    <div class="container">
    <div class="card-body">
    <table class="table table-bordered">
    <tr class="bg-dark text-warning">

        <td> id : {{$projet->id}} </td>
        
        <td> Nom : {{$projet->nom}} </td>

        <td> Description : {{$projet->description}}

        <td> Date Debut : {{$projet->DateD}} </td>

        <td> Date Fin : {{$projet->DateF}} </td>
    </tr>
        <a class="btn btn-warning mt-3" href="{{ route('phase.index',$projet->id) }}">AJOUTER PHASE</a>
    </table> 
    </div>
    </div>

</body>
</html>

