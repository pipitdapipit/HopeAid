<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HopeAid</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <form method="POST" action="/register">
            @csrf
            {{-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div> --}}
              <div class="fs-4">Register</div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Your Name</label>
                <input name="username" id="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" id="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input name="password" id="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            {{-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <div><a href="/login">Login</a></div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

</body>
</html>
