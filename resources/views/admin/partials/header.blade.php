<header class="bg-dark">
    <nav class="navbar navbar-dark">
        <div class="container-fluid">
          <a href="{{route('home')}}" class="navbar-brand">Home</a>
          <form action="{{route('logout')}}" method="POST" class="d-flex" role="search" >
            @csrf
            <button class="btn btn-light" type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
          </form>
        </div>
      </nav>
</header>
