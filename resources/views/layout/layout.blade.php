<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss'])
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}"> --}}
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #B22222;">
        <div class="container-fluid">
          <a class="navbar-brand ms-3" href="#">HOPEAID</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ms-5" id="navbarNavDropdown">
            <ul class="navbar-nav gap-5">
              <li class="nav-item">
                <a class="nav-link active ms-3" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Documentation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Support</a>
              </li>
              <li class="nav-item dropdown" style="margin-left: 47rem">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Register</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    @yield('content')
    <div class="container-fluid" style="background-color: #B22222;">
        <div class="card-footer text-muted container">

            2 days ago
        </div>
    </div>
</body>

<script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>
</html>
