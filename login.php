<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Shopify</title>
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
    <body style="margin-top:100px; " id="login-bg">
        <?php
        include 'includes/navbar.php';
        ?>
        <div class="container">
            <h5 class="display-4 text-teal text-center">Log In</h5>
            <form action="login_submit.php" method="POST">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-3">
                    <input type="email"  class="form-control" placeholder="Email address" name="e-mail" required="true" />

                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password"  class="form-control" placeholder="Password" name="password" required="true"/>

                </div>



                <!-- Submit button -->
                <button type="submit" class="btn btn-teal btn-block mb-5 mt-5" name="submit">Sign in</button>
                <?php echo $_GET['error']; ?>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="register.php" class="text-teal">Register</a></p>
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
