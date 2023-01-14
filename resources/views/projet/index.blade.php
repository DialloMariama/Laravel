<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PROJET</title>
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
        <form action="{{ route('enregistrer.projet') }}" method="POST">
        @csrf
            <div class="card-header  bg-warning">
               <h1 class="text-center">AJOUTER PROJET</h1> 
            </div>
            <div class="card-body">
                <label for="">Nom:</label>
                <input type="text" name="nom" id="" class="form-control"><br>
                <label for="">Date Debut</label>
                <input type="date" name="dateD" id="" class="form-control"><br>
                <label for="">Date Fin</label>
                <input type="date" name="dateF" id="" class="form-control"><br>
                <label for="">Description:</label>
                <input type="text" name="description" id="" class="form-control"><br>


                <button class="btn btn-dark text-warning mt-3 offset-1">Enregistrer</button>
                 <a href="{{ route('liste.projet')}}" class="btn btn-warning mt-3 offset-4" >LISTE PROJET</a>
            </div>

        </form>

    </div>
</div>
</body>
</html>
