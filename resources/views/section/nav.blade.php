{{-- <nav class=" navbar navbar-primary bg-primary text-light ">
                <div class="container">
                    <a class="text-light navbar-brand">Logo</a>
                    <form class="d-flex input-group w-auto">
                        <ul class="nav-link">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('movie')}}">Movie</a></li>
                            <li><a href="{{url('admin')}}">Admin</a></li>
                            <li><a href="{{url('login')}}">Login</a></li>
                        </ul>

                </div>
</nav> --}}

<nav class="gradient-custom navbar navbar-expand-lg navbar-light bg-gradient-warning">
  <div class="container-fluid">
    <a class="navbar-brand text-uppercase" href="{{url('/')}}">Cinema</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="{{url('/')}}" class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a href="{{url('movie')}}" class="nav-link" href="#">Movie</a>
        </li>
        <li class="nav-item">
          <a href="{{url('admin')}}" class="nav-link ">Admin</a>
        </li>
        <li class="nav-item">
            <a href="{{url('login')}}" class="nav-link">Login</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
