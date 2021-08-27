<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Shopify</title>
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
    <body style="margin-top:80px;">
        <?php
        include 'includes/navbar.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="row">
            <div class="col">
                <h5 class="display-4 text-center py-3 text-teal">Happy Shopping</h5>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-3">
                <!-------------------------------shirts------------------------------------->
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/shirt1.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Roadster</h5>
                            <p>Men Blue Regular Fit Printed Casual Shirt</p>
                            <p class=" lead font-weight-bold">
                                Rs.1,000.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/shirt2.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Mast & Harbour </h5>
                            <p>Men Multicoloured Regular Fit Casual shirt</p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.1000&nbsp;</del> Rs.874.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/shirt3.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Calvin Klein Jeans</h5>
                            <p>Men Beige & White Slim Fit Striped Oxford Casual Shirt</p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.4000&nbsp;</del> Rs.3024.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/shirt4.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Campus Sutra </h5>
                            <p>Men Navy Blue & Grey Standard Fit Casual Shirt</p>
                            <p class=" lead font-weight-bold">
                                Rs.524.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/shirt5.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">HIGHLANDER </h5>
                            <p>Men White & Blue Slim Fit Printed Casual Shirt</p>
                            <p class=" lead font-weight-bold">
                                Rs.493.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/shirt6.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">WROGN</h5>
                            <p>Navy Blue Slim Fit Checked Casual Shirt</p>
                            <p class=" lead font-weight-bold">
                                Rs.1319.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/shirt7.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Enzo</h5>
                            <p>	CLASSIC NAVY BLUE Shirt For Men</p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.2000&nbsp;</del> Rs.1499.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/shirt8.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Indian Terrain</h5>
                            <p>Men Multicoloured Regular Fit Casual Shirt</p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.4000&nbsp;</del>  Rs.2499.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-------------------------------------------------------men jacket---------------------------->
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/menjac1.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">fastivalsells</h5>
                            <p>Light Blue Basic Denim Jacket</p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.1500&nbsp;</del>  Rs.884.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/menjac2.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Roadster  </h5>
                            <p>Men Blue Washed Denim Jacket</p>
                            <p class=" lead font-weight-bold">
                                Rs.2299.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/menjac3.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Mast & Harbour </h5>
                            <p>Men Denim Jacket</p>
                            <p class=" lead font-weight-bold">
                                Rs.3500.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/menjac4.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">WROGN</h5>
                            <p> Men Blue Solid Denim Jacket</p>
                            <p class=" lead font-weight-bold">
                                Rs.5000.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!------------------------------men jeans-------------------------------------->
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/men_jeans1.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Global Republic </h5>
                            <p>MEN GREY SOLID JEANS</p>
                            <p class=" lead font-weight-bold">
                                Rs.1399.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/men_jeans2.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Indian Terrain </h5>
                            <p>Mens Blue Solid Denim Jeans</p>
                            <h5 class="card-title">
                                <p class=" lead font-weight-bold">
                                    <del style="color:red">Rs.3000&nbsp;</del> Rs.1399.00
                                </p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                    <?php
                                } else {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(14)) { //This is same as if(check_if_added_to_cart != 0)
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/men_jeans3.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">HIGHLANDER</h5>
                            <p>Men Blue Tapered Fit Mid-Rise </p>
                            <p class=" lead font-weight-bold">
                                Rs.571.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(15)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/men_jeans4.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Roadster </h5>
                            <p>	 Men Blue Regular Fit Mid-Rise </p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.2900&nbsp;</del>Rs.1499.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!---------------------------------------dresses----------------------------------------->
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/dress1.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Chrome & Coral  </h5>
                            <p>Women Fit And Flare Yellow Dress</p>
                            <p class=" lead font-weight-bold">
                                Rs.674.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(17)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/dress2.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Label Shaurya Sanadhya  </h5>
                            <p>White Polka Dot Ruffle Fit And Flare Short </p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.3400&nbsp;</del> Rs.2345.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(18)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/dress3.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Biltoxi </h5>
                            <p>Western Short Dress for Women</p>
                            <p class=" lead font-weight-bold">
                                Rs.650.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(19)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/dress4.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Indiamart</h5>
                            <p>Sleeveless Casual Ladies Short Dresses</p>
                            <p class=" lead font-weight-bold">
                                Rs.375.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(20)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/dress5.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Honey </h5>
                            <p>Printed V Neck Short Black Dress</p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.1500&nbsp;</del>  Rs.1000.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(21)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/dress6.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Pluss</h5>
                            <p>Floral Print A-line Dress</p>
                            <p class=" lead font-weight-bold">
                                Rs.792.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(22)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-------------------------------bottom wear--------------------------------->
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/jeans1.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">LEE COOPER WOMEN</h5>
                            <p>High-Waist Skinny Fit Jeans</p>
                            <p class=" lead font-weight-bold">
                                Rs.900.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(23)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=23" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/jeans2.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Shocknshop </h5>
                            <p>Skinny Women Black Jeans</p>
                            <p class=" lead font-weight-bold">
                                Rs.1000.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(24)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=24" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/jeans3.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Mast & Harbour </h5>
                            <p>Women Blue Wide Leg Flared Mid-Rise </p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.1000&nbsp;</del> Rs.919.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(25)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=25" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/jeans4.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Blue Saint </h5>
                            <p>Mid-Rise Stretchable Skinny Fit Jeans</p>
                            <p class=" lead font-weight-bold">
                                Rs.1090.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(26)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=26" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/pant1.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Athena</h5>
                            <p>Women Pink Smart Slim Fit Solid Peg Trousers</p>
                            <p class=" lead font-weight-bold">
                                Rs.934.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(27)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=27" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/pant2.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Van Heusen </h5>
                            <p>Van Heusen  Green Culottes</p>
                            <p class=" lead font-weight-bold">
                                Rs.1442.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(28)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=28" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/pant3.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Van Heusen </h5>
                            <p>Van Heusen Blue Culottes</p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.1600&nbsp;</del> Rs.1499.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(29)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=29" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/pant4.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">RARE </h5>
                            <p>Women Brown Regular Fit Solid Parallel Trousers</p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.1000&nbsp;</del>   Rs.874.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(30)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=30" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/top3.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Mirraw </h5>
                            <p> White Long Jacket For Girls</p>
                            <p class=" lead font-weight-bold">
                                Rs.1503.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(31)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=31" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/top2.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Mast & Harbour </h5>
                            <p>Floral Printing Falbala Cuff Layered Hem Chiffon</p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.1400&nbsp;</del>   Rs.874.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(32)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=32" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/skirt1.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">wyfeay</h5>
                            <p>Women Cotton Linen National Wind Long Skirt</p>
                            <p class=" lead font-weight-bold">
                                Rs.974.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(33)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=33" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/skirt2.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Ambrosio</h5>
                            <p>Dark Sage Green High-Low Maxi Skirt</p>
                            <p class=" lead font-weight-bold">
                                Rs.2000.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(34)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=34" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/skirt3.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Shopee</h5>
                            <p>Korean Style High Waist Elegant Officewear Skirt </p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.600&nbsp;</del>  Rs.500.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(35)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=35" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/skirt4.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Vintage </h5>
                            <p>Autumn Spring ling Skirt</p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.2000&nbsp;</del> Rs.874.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(36)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=36" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-------------------------------kids----------------------------------------------------->
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/kid1.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Mast & Harbour </h5>
                            <p>Multicoloured Regular Fit</p>
                            <p class=" lead font-weight-bold">
                                Rs.874.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(37)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=37" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/kid2.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Adonis </h5>
                            <p>Regular Fit for kids</p>
                            <p class=" lead font-weight-bold">
                                Rs.1084.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(38)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=38" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/kid3.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Mast & Harbour </h5>
                            <p>Multicoloured casual Fit</p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.2400&nbsp;</del>  Rs.2064.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(39)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=39" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/kid4.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Traditional India </h5>
                            <p>Rich traditional wear</p>
                            <p class=" lead font-weight-bold">
                                Rs.874.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(40)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=40" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/kid5.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Mast & Harbour </h5>
                            <p>Kids comfortable wear</p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.1000&nbsp;</del>Rs.894.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(41)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=41" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/kid6.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Jack & Jill </h5>
                            <p>Floral kids Regular Fit</p>
                            <p class=" lead font-weight-bold">
                                Rs.874.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(42)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=42" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/kid7.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Mast & Harbour </h5>
                            <p>girls Multicoloured Regular Fit</p>
                            <p class=" lead font-weight-bold">
                                Rs.674.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(43)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=43" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card h-100">
                        <img
                            src="img/kid8.jpg"
                            class="card-img-top"
                            alt="..." style=" height:300px;"
                            />
                        <div class="card-body">
                            <h5 class="card-title">Jee & cho </h5>
                            <p>Comfy fit for kids</p>
                            <p class=" lead font-weight-bold">
                                <del style="color:red">Rs.1000&nbsp;</del>  Rs.564.00
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-teal btn-block">Shop Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(44)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=44" name="add" value="add" class="btn btn-block btn-teal">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include 'includes/footer.php';
        ?>
        <!--JQuery-->
        <script type = "text/javascript" src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    </body>
</html>