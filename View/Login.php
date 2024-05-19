<?php
//session_start();

include_once '../Navigation_BarLinks.php';

//$login_css = '/Ideal_Health_Counselling_Management_System/View/css/login_css.css';

//echo '<h1>'.login_page(). '</h1>'
$loginController_path= loginController_path();


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ideal Health Counselling Management System -login </title>
  <link rel="stylesheet" href="css/login_css.css">
  <link rel="stylesheet" href="css/bootstrap.css">


  <script>

        // Function to validate email format
        function validateEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }



        function validateLoginForm() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            // var emailErrorLabel = document.getElementById("loginEmailError");

            // Reset previous error messages
            // emailErrorLabel.innerHTML = "";

            // Validate email
            if (email === "" || email === null) {
                // emailErrorLabel.innerHTML = "Email is required.";
               alert("Email is Required");
                return false;
            }
            // You can add more email validation logic here if needed

            // Validate password

            if (password === "" || password === null) {
                // Display error message
                alert("Password is Required");
                return false;
            }

            return true; // Return true if all validations pass
        }

        // Attach the validation function to the form's onsubmit event
        document.getElementById("login_form").onsubmit = function () {
            return validateLoginForm();
        };

    </script>

  </head>
  <body>
  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="MentalHealthcare.jpg" class="img-fluid" alt="...">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3"><h4>Enter login and Password :</h4></p>

            
          </div>

        <form action ="<?php echo $loginController_path; ?>" method ="post" id="login_form" onsubmit ="return validateLoginForm();">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name ="email" id="email" class="form-control form-control-lg"
                placeholder=" " />
                <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" name ="password" id="password" class="form-control form-control-lg"
                placeholder=" " />
                <label class="form-label" for="form3Example4">Password</label>
            </div>



            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>

       </form>      
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/Ideal_Health_Counselling_Management_System/View/admin/admin_signup.php"
                class="link-danger">Register</a></p>
          </div>

        
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2023. All rights reserved.
    </div>
    <!-- Copyright -->


    
    <!-- Right -->
  </div>
</section>


	<script src="index.js"></script>
  </body>
</html>