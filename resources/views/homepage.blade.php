<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg px-5" style="background-color: #e3f2fd;" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

    <h1 class="text-center my-5">Lista corsi</h1>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
 -->


 @extends('template.template')


@section('content')
<h1 class="text-center my-5">@section('title', 'Corsi')</h1>
    <div class="row my-5 mx-5">
        @foreach($corsi as $corso)
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ $corso->img_url }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $corso->corso }}</h5>
                    <p class="card-text">{{ $corso->attivita }}</p>
                    @if (Auth::user()->isAdmin === 1) 
    <form action="/homepage/{{ $corso->id }}"  method="POST">
        @csrf
        @method('DELETE')
        <input type="text" value="{{ $corso->id }}" name="id" hidden>
        <button type="submit" class="btn btn-danger">Cancella</button>
    </form>
@else 
    <a href='/prenotazioni/create' class="btn btn-primary">Prenota</a>

   
@endif

                </div>
            </div>
        </div>
        @endforeach
    </div>
   
@endsection