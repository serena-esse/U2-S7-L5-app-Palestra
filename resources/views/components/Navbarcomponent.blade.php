<style>
  .navbar-gradient {
    background: linear-gradient(to right, rgba(85, 163, 247, 0.7), rgba(0, 123, 255, 0.3));
    background-color: transparent;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  
  .navbar-brand,
  .nav-link {
    color: white !important;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
  }

  .navbar-toggler {
    border-color: rgba(255, 255, 255, 0.1);
  }

  .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }
</style>

<nav class="navbar navbar-expand-lg px-5 navbar-gradient">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <a class="navbar-brand text-white" href="#">Fit Hub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="/homepage">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/prenotazioni">Prenotazioni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/prenotazioni/create">Inserisci prenotazione</a>
        </li>
      
       
      </ul>
    </div>
    <div>
    <ul class="navbar-nav">
    @if (Auth::user()->isAdmin === 1)
        <li class="nav-item">
          <a class="nav-link text-white" href="/attivita/create">Crea nuovo Corso</a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link text-white" href="/profile">Profilo</a>
        </li>
    </ul>
    </div>
    
  </div>
</nav>
