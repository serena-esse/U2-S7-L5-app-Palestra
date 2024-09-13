@extends('template.template')

@section('content')
<h1 class="text-center my-5">@section('title', 'Corsi')</h1>
    <div class="row my-5 mx-5 d-flex flex-wrap justify-content-start">
        @foreach($corsi as $corso)
        <div class="col-3 d-flex align-items-stretch"> <!-- Flexbox per allineamento -->
            <div class="card h-100" style="width: 18rem; background-color: rgba(255, 255, 255, 0.8); border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"> <!-- Fondo trasparente bianco -->
                <img src="{{ $corso->img_url }}" class="card-img-top img-fluid" alt="..."
                     style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $corso->corso }}</h5>
                    <p class="card-text">{{ $corso->attivita }}</p>
                    <p class="card-text">{{ $corso->descrizione}}</p>
                    @if($corso->posti_disponibili > 0)
                    <p class="card-text">Posti disponibili: {{ $corso->posti_disponibili }}</p>
                @else
                    <p class="card-text text-danger">Posti esauriti</p>
                @endif
                    <div class="mt-auto">
                        @if (Auth::user()->isAdmin === 1) 
                        <form action="/homepage/{{ $corso->id }}" method="POST">
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
        </div>
        @endforeach
    </div>
@endsection
