<header>
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Vai al sito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">Dashboard</a>
          </li>
        </ul>
        <form action="{{route('logout')}}" method="POST" class="d-flex" role="search">
          @csrf
          <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user"></i><span class="ms-2">{{Auth::user()->name}}</span>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profilo</a></li>
              <li><a class="dropdown-item" href="#">Privacy e sicurezza</a></li>
              <li><button class="dropdown-item" type="submit">Logout</button></li>
            </ul>
          </div>
          <button class="btn btn-dark ms-3" type="submit">Logout</button>
        </form>
      </div>
    </div>
  </nav>
</header>
