<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shopify</title>
        <!-- add icon link -->
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
    <body style="margin-top:50px;">
        <?php
        include 'includes/navbar.php';
        ?>
        <!-----------------------------------------slider----------------------------------------------->
        <section>
            <div class="carousel slide " id="slider" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slider1.jpg" class="img-fluid w-100">
                        <div class="carousel-caption text-left animated zoomIn delay-1s">
                            <h5 class="display-4">Let's Shop </h5>
                            <p class="lead">An exciting place for the whole family to shop.</p>
                            <a href="products.php"><button class="btn btn-teal ">Shop Now</button></a>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="img/slider2.jpg" class="img-fluid w-100">
                        <div class="carousel-caption text-right animated zoomIn delay-1s">
                            <h5 class="display-4">HangOut With Loved Ones</h5>
                            <p class="lead">Enrich your shopping list wisely.</p>
                            <a href="products.php"><button class="btn btn-teal ">Shop now</button></a>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="img/slider3.jpg" class="img-fluid w-100">
                        <div class="carousel-caption text-left animated zoomIn delay-1s">
                            <h5 class="display-4">Love Being Traditional  </h5>
                            <p class="lead">A tradition of excellent since ages.</p>
                            <a href="products.php">  <button class="btn btn-teal ">Shop Now</button></a>
                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </section>
        <!--------------------------------------slider end--------------------------------->
        <!---------------------------------------------featured items---------------------------------------->
        <div class="container ">
            <div class="row ">
                <div class="col my-5"><h5 class="display-4 text-center text-teal">Featured Dresses</h5></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mt-3 featured animated pulse delay-1s" class="featured"  >

                        <img src="img/featured1.jpg" class='img-fluid'>

                        <div class="card-title">
                            <a href="products.php" class="text-teal"><h5 class=' text-center mt-2' style="font-weight: bold !important;
                                                                         font-size: 24px !important;">Women's</h5></a>
                        </div>

                    </div>

                </div>

                <div class="col-md-4">
                    <div class="card mt-3 featured animated pulse delay-2s" class="featured">

                        <img src="img/featured2.jpg" class='img-fluid'>

                        <div class="card-title">
                            <a href="products.php" class="text-teal"><h5 class=' text-center mt-2'style="font-weight: bold !important;
                                                                         font-size: 24px !important;">Men's</h5></a>
                        </div>

                    </div>

                </div>

                <div class="col-md-4">
                    <div class="card mt-3 featured animated pulse delay-3s" class="featured">

                        <img src="img/featured3.jpg" class='img-fluid'>

                        <div class="card-title">
                            <a href="products.php " class="text-teal"><h5 class=' text-center mt-2' style="font-weight: bold !important;
                                                                          font-size: 24px !important;">Children's</h5></a>
                        </div>

                    </div>

                </div>

            </div>

        </div>         
        <!---------------------------offer tags------------------------------->
        <div class='container mt-5 text-center'>
            <div class="row mt-5">
                <div class="col-md-6 bg-teal  ">
                    <h5 class="display-5 mt-5" style="font-weight: bold !important;
                        font-size: 24px !important; color:white">Free Shipping</h5>
                    <p class="lead" style="color:white">on all orders over Rs.499</p>
                </div>

                <div class="col-md-6 bg-teal  ">
                    <h5 class="display-5 mt-5" style="font-weight: bold !important;
                        font-size: 24px !important; color:white">Over 100 new arrivals</h5>
                    <p class="lead"style="color:white">hurry up! shop now</p>
                </div>
            </div>
        </div>
        <!-----------------------------description------------------------------->
        <div class="container mt-5">
            <h5 class="display-4 text-teal mt-3">Trendy Clothing & Accessories at Shopify</h5>
            <p class="lead text-justify mt-3">
                Always remember whatever you wear should reflect the real you. Your dressing sense reflects your personality, character, mood, style and what actually you are as an individual. People wearing gaudy clothes with loud make up are generally extroverts and love partying. You really can make out what sort of person an individual is by his/her dressing. Dull colours indicate that an individual is sad or upset whereas bright colours not only reflect your happy state of mind but also make the other person happy.

                Dress according to the occasion. One needs to look good for an impressive personality. Clothes reflect who you are, how you feel at the moment and sometimes even what you want to achieve in life?
                Personality development helps in the overall development of an individual. An individual’s style of dressing plays an important role in enhancing his/her personality. It is rightly said that “a man is known by his dress and address”. An individual’s dressing sense speaks volumes of his character and personality.
            </p>

        </div>
        <!-------------------------------images------------------------------------>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card  text-white h-100">
                        <img src="img/off1.jpg" class="card-img " alt="..."  />

                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card text-white h-100">
                        <img src="img/off2.jpg" class="card-img"  alt="..."  />

                    </div>

                </div>
            </div>


        </div>
        <!-- Default form contact -->
        <div class="container mt-5">
            <form class="text-center border border-light p-5" action="#!" style="background: linear-gradient(45deg,white,teal)">

                <p class="h4 mb-4">Contact us</p>

                <!-- Name -->
                <input type="text"  class="form-control mb-4" placeholder="Name">

                <!-- Email -->
                <input type="email"  class="form-control mb-4" placeholder="E-mail">



                <!-- Message -->
                <div class="form-group">
                    <textarea class="form-control rounded-0"  rows="3" placeholder="Message"></textarea>
                </div>



                <!-- Send button -->
                <button class="btn btn-teal btn-block" type="submit">Send</button>

            </form>

        </div>

        <!-- Default form contact -->

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
        <script>
            $('.carousel').carousel({
                interval: 4000,
                pause: 'hover'
            });
        </script>
    </body>
</html>