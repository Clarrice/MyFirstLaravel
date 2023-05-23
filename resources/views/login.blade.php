<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- End Bootstrap CSS -->

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--End Custom Css-->
</head>

<body>
        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container">
                <a class="navbar-brand" href="home">
                    <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0 text-white">STUDENT INFORMATION</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="login">Log in</a>
                        </li>
                    </ul>
                   
                </div>
            </div>
        </nav>
        <!--Navbar End-->
    </header>
    <!--Header End-->
    <body>
        <div class="container login-form">
            <div class="row mt-4 justify-content-center">
    
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="offest-md-4">
                                <h1 class="text-center mt-4 mb-4 fw-bolder">STUDENT FORM</h1>
                                <form class="home" method="post">
                                    <!-- Email input -->
                                
                                    <form>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example1" class="form-control" />
        <label class="form-label" for="form3Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example2" class="form-control" />
        <label class="form-label" for="form3Example2">Last name</label>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form3Example3" class="form-control" />
    <label class="form-label" for="form3Example3">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form3Example4" class="form-control" />
    <label class="form-label" for="form3Example4">Password</label>
  </div>


  </div>
</form>
                                     
                                        <!-- 2 column grid layout for inline styling -->
                                        <div class="row mb-4">
                                            <div class="col d-flex">
                                                <!-- Checkbox -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                                        checked />
                                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                                </div>
                                            </div>
                                 
                                 
                                    <p>By creating an account you agree to our <a href="term" class="text-primary">Privacy & Policy</a>.</p>
                            
                                </div>
                                    <!-- Submit button -->
                                    <div class="col-md-12">
                                        <button type="submit" class="col-12 btn btn-primary btn-block mb-4">Sign
                                            in</button>
                                    </div>
                                    <p class="text-center"> Don't have account yet?<a href="register" class="text-primary"> Sign up</a></p>
                                    
    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        
    
    
            
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </body>
    
    </html>