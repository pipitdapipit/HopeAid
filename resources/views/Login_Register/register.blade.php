{{-- <!DOCTYPE html>
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
        <form method="POST" action="/">
            @csrf
            <div class="fs-4">Register</div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Your Name</label>
                <input name="username" id="username" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" id="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" id="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div><a href="/login">Login</a></div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HopeAid - Register</title>
    @vite(['resources/sass/app.scss'])
    <style>
        body {
            background-image: url('image/LoginRegister_background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover
        }
    </style>
</head>

<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px; background: transparent; border: 2px solid white; backdrop-filter: blur(3px)">
            <div class="card-body">
                <h2 class="card-title text-center mb-4" style="color: #B22222;">Register</h2>
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="color: #B22222;">Your Name</label>
                        <input name="username" id="username" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="color: #B22222;">Email Address</label>
                        <input name="email" id="email" type="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" style="color: #B22222;">Password</label>
                        <input name="password" id="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="text-center mb-3">
                        <a href="/login" class="text-decoration-none" style="color: grey;">Already have an account? Login</a>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-danger" style="color: white;">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
