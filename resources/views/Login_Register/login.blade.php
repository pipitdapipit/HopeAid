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
        <form method="POST" action="/login">
            @csrf
            <div class="fs-4">Login</div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" id="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" id="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div><a href="/">Register</a></div>
            <button type="submit" class="btn btn-primary">Submit</button>

            @if (session('error'))
                <p class="text-danger"> {{ session('error') }} </p>
            @endif
        </form>
    </div>

</body>

</html>
