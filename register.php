<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register | Shopify</title>
        <link rel = "icon" href = "img/shopify.png"type = "image/x-icon">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">



        <!-- Custom CSS -->
        <link href="style.css" rel="stylesheet">

    </head>
    <body style="margin-top:100px; " id="register-bg">
        <?php
        include 'includes/navbar.php';
        ?>
        <div class="container">
            <h3 class="text-center display-4 text-teal py-5">Register Now</h3>
            <form action="signup_script.php" method="POST">

                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="firstname" placeholder="First Name" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" class="form-control" />

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text"  name="lastname" placeholder="Last Name" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" class="form-control" />

                        </div>
                    </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true" class="form-control" />

                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" placeholder="Password" pattern=".{6,}" name="password" required = "true" class="form-control" />

                </div>
                <!-- Contact input -->
                <div class="form-outline mb-4">
                    <input type="text" placeholder="Contact" maxlength="10" size="10" name="contact" required = "true" class="form-control" />

                </div>
                <!-- City input -->
                <div class="form-outline mb-4">
                    <input type="text" placeholder="city" name="city" required = "true" class="form-control" />

                </div>
                <!-- address input -->
                <div class="form-outline mb-4">
                    <input type="text"  placeholder="Address" name="address" required = "true" class="form-control" />

                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-teal btn-block mb-4">Sign up</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-teal btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-teal btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-teal btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-teal btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <!----------------------custom script----------------------------->

    </body>
</html>