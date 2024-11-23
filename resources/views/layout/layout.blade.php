<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss'])
    <style>
        body {
            background: #F5F5F5
        }
    </style>
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}"> --}}
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7AB2D3; color: #DFF2EB">
        <div class="container-fluid">
          <a class="navbar-brand ms-3" href="/">HOPEAID</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ms-5 fs-5" id="navbarNavDropdown">
            <ul class="navbar-nav gap-5">
              <li class="nav-item">
                <a class="nav-link active ms-3" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/article">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/documentation">Documentation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Support</a>
              </li>

              <li class="nav-item dropdown" style="margin-left: 38rem">
                  @auth
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Hello, {{ $user->name }}
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                @else
                    <a class="nav-link" href="/login">Login</a>
                @endauth
              </li>
            </ul>
          </div>
        </div>
    </nav>

    @yield('content')

    <div class="container-fluid mt-5 " style="background-color: #7AB2D3; padding: 2%;">
        <div class="card-footer text-muted container">
            <div class="d-flex justify-content-center" style="color: #DFF2EB">
                &copy 2024 HopeAid. All rights reserved.
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>
</html>
