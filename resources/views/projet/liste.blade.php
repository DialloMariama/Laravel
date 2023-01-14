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

    <div class="container">
    <div class="card">
        <div class="card-header bg-warning">
        <h1 class="text-center text-dark">LISTE DES PROJETS</h1>
        </div>
        <div class="card-body text-center">
            <table class="table table-bordered">
                <tr class="bg-dark text-warning">
                    
                <th>ID</th>
                <th>Nom</th>
                <th>Date Debut</th>
                <th>Date Fin</th>
                <th>Details</th>
                    
                </tr>     
                @foreach($projet as $pr)

            <tr>
                <td>#{{ $pr->id}}</td>
                <td>{{ $pr->nom}}</td>
                <td>{{ $pr->DateD}}</td>
                <td>{{ $pr->DateF}}</td>
                <td><a href="{{ route('vueDetail',$pr->id) }}" class="btn btn-warning mt-3">DETAILS</a></td>

              </tr>
            @endforeach
                
               
            </table>
            <a href="{{ route('projet.index')}}" class="btn btn-warning offset10  mt-3" >AJOUTER PROJET</a>

        </div>
        
    </div>
    
</body>
</html>
