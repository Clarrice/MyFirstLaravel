<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' href='<?php echo asset('storage/css/style.css') ?>'>
<head>
    <title>@yield('title') - Page</title>
</head>
<body>
    <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-danger" style="text: white;">
        <div class="navNav container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{route('register')}}" class="navbar-brand">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="navbar-brand">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('about')}}" class="navbar-brand">About</a>
                    </li>
                </ul>  
            </div>
        </div>
    </nav>        
  @yield('content')
</body>
</html>
                   