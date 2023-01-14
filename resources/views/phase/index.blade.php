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
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <div class="container">
    <div class="card col-md-6 offset-3">
        <form action="{{ route('enregistrer.phase') }}" method="Post">
        @csrf
            <div class="card-header  bg-warning text-dark">
               <h1 class="text-center">AJOUTER PHASE</h1> 
            </div>
            <div class="card-body">
                <label for="">Nom:</label>
                <input type="text" name="nom" id="" class="form-control"><br>
                <label for="">Duree:</label>
                <input type="number" name="duree" id="" class="form-control"><br>
                <label for="">Propriété:</label>
                <input type="text" name="propriete" id="" class="form-control"><br>

                <button class="btn btn-dark text-warning mt-3 offset-1">Enregistrer</button>
                 <a href="{{ route('projet.index')}}" class="btn btn-warning mt-3 offset-4" >AJOUTER PROJET</a>
            </div>

        </form>

    </div>
</div>
</body>
</html>
