


 
 @extends('template.template')


@section('content')
@section('title', 'Inserisci Corso')
@if(session('success'))  
<h2  class="text-center my-5 text-success" >{{ session('success') }}</h2>
@endif
<h1>Inserisci Corso</h1>
<form action="/attivita" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="corso">Corso</label>
                <input type="text" class="form-control" id="corso" name="corso" required>
            </div>
            <div class="form-group">
                <label for="descrizione">Descrizione</label>
                <textarea class="form-control" id="descrizione" name="descrizione" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="posti_disponibili">Posti Disponibili</label>
                <input type="number" class="form-control" id="posti_disponibili" name="posti_disponibili" required>
            </div>
            <div class="form-group">
                <label for="img_url">URL Immagine</label>
                <input type="url" class="form-control" id="img_url" name="img_url" required>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
   
@endsection