@extends('template.template')

 @section('content')
 @section('title', 'Inserisci prenotazione')
 
 @if(session('success'))  
     <h2 class="text-center my-5 text-success">{{ session('success') }}</h2>
 @endif

 <table class="table">
  <thead>
    <tr>
      <th scope="col">Corso</th>
      <th scope="col">Data</th>
      <th scope="col">fascia oraria</th>
      
    </tr>
  </thead>
  <tbody>
   
    <tr>
      
      <td>{{ $prenotazioni->attivita->corso }}</td>
      <td>{{ $prenotazioni->data }}</td>
      <td>{{ $prenotazioni->orario }}</td>
     
     
    </tr>

  </tbody>
</table>

 <div class="container my-5">
     <form method="POST" action="/prenotazioni/{{ $prenotazioni->id }}" class="row g-3 justify-content-center">
         @csrf
         @method('PUT')
         <div class="col-md-4">
             <label for="corso" class="form-label">Corso</label>
             <select class="form-select" id="corso" name="corso">
              
            

                   @foreach($attivita as $item)
                     <option value="{{ $item->id }}">{{ $item->corso }}</option>
                 @endforeach 
             </select>
         </div>
         <div class="col-md-4">
             <label for="data" class="form-label">Data</label>
             <input type="date" class="form-control" id="data" name="data">
         </div>
         <div class="col-md-4">
             <label for="ora" class="form-label">Fascia oraria</label>
             <select class="form-select" id="ora" name="ora">
                 <option value="08:00 - 10:00">08:00 - 10:00</option>
                 <option value="10:00 - 12:00">10:00 - 12:00</option>
                 <option value="12:00 - 14:00">12:00 - 14:00</option>
                 <option value="14:00 - 16:00">14:00 - 16:00</option>
                 <option value="16:00 - 18:00">16:00 - 18:00</option>
                 <option value="18:00 - 20:00">18:00 - 20:00</option>
             </select>
         </div>
         <div class="col-md-12 text-center">
             <button type="submit" class="btn  btn-outline-primary">Aggiungi</button>
         </div>
     </form>
 </div>
  <!--  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const dateInput = document.getElementById('data');
        const today = new Date();
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0'); // Mesi da 0 a 11
        const day = String(today.getDate()).padStart(2, '0');
        const minDate = `${year}-${month}-${day}`;
        
        dateInput.setAttribute('min', minDate);
    });
</script> -->
 @endsection