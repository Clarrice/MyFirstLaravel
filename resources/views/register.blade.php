<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
     <!-- End Bootstrap CSS -->
        <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

   

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--End Custom Css-->
</head>

<body>
    <div class="container login-form">
        <div class="row mt-4 justify-content-center">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="offest-md-4">
                            <h1>Registration Form</h1>
                            <p>Please fill out this form with the required information</p>
                            <form method="post" action="#">
                              <fieldset>
                                <label for="First Name">Enter Your First Name: 
                                    <input type="First Name" class="form-control" placeholder="First Name" name="First Name" id="First Name" required /></label>
                                <label for="Last Name">Enter Your Last Name:
                                    <input type="last_name"  class="form-control" placeholder="Last Name" name="last_name" id="last_name" required /></label>
                                <label for="Phone Number">Enter Your Phone Number:
                                    <input type="phone_number"  class="form-control" placeholder="Phone Number" name="phone_number" id="phone_number" required /></label>
                                <label for="Email">Enter Your Email:
                                    <input type="Email"  class="form-control" placeholder="Email" name="Email" id="Email" required /></label>
                                <label class="form-label " for="form2Example2">Password:
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" onChange="confirmPassword()" required /> </label>
                                <label class="form-label " for="form2Example2">Confirm Password:
                                        <input type="confirm_password"  class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" onChange="confirmPassword()" required/></label>         
                              </fieldset>
                              <script>
                                 function valueOf(name) {
                                return document.getElementsByName(name)[0].value;
                            }
                              </script>
                              <fieldset>
                                <label for="personal-account"><input id="personal-account" type="radio" name="account-type" class="inline" /> Personal Account</label>
                                <label for="business-account"><input id="business-account" type="radio" name="account-type" class="inline" /> Business Account</label>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                                checked />
                                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Submit button -->
                                <div class="">
                                    <button type="submit" class="col-12 btn btn-primary btn-block mb-4">Create new
                                        Account</button>
                                </div>
                                <p class="text-center"> Already have account?<a href="login" class="text-primary">
                                        Sign in</a></p>
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