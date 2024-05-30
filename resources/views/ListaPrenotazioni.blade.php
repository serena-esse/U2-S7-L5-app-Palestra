


 
 @extends('template.template')


@section('content')
@section('title', 'Lista prenotazioni')
@if(session('success'))  
<h2  class="text-center my-5 text-success" >{{ session('success') }}</h2>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">Corso</th>
      <th scope="col">Data</th>
      <th scope="col">Fascia oraria</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($prenotazioni as $prenotazione) 
    <tr>
      
      <td>{{ $prenotazione->attivita->corso }}</td>
      <td>{{ $prenotazione->data }}</td>
      <td>{{ $prenotazione->orario }}</td>
      <td><a href="/prenotazioni/{{ $prenotazione->id }}/edit" class="btn btn-info"><i class="bi bi-pencil"></i>Modifica</a></td>
      <td>
        <form action="/prenotazioni/{{ $prenotazione->id }}" method="POST" >
        @csrf
    @method('DELETE')
        <button type="submit" class="btn btn-primary">Cancella</button></form>


        </i></a></td>
     
    </tr>
    @endforeach
    
    
  </tbody>
</table>
   
@endsection