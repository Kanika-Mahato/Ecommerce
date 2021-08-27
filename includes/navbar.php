<nav class="navbar navbar-expand-sm navbar-dark bg-teal fixed-top">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <i class="fa fa-shopping-cart px-2"></i>Shopify
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#shopify-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="shopify-navbar">
            <ul class="navbar-nav ml-auto">
                 <?php
                if (isset($_SESSION['email'])) {
                    ?>
                <li class="nav-item px-3">
                    <a href="index.php" class="nav-link" ><i class="fa fa-home m-2" aria-hidden="true "></i>Home</a>
                </li>
                
                <li class="nav-item px-3">
                    <a href="products.php" class="nav-link"><i class="fa fa-shopping-basket m-2" aria-hidden="true"></i>Products</a>
                </li>
                 <li class="nav-item px-3">
                    <a href="cart.php" class="nav-link"><i class="fa fa-shopping-cart m-2" aria-hidden="true"></i>Cart</a>
                </li>
                 <li class="nav-item px-3">
                    <a href="settings.php" class="nav-link"><i class="fa fa-cog m-2" aria-hidden="true"></i>Settings</a>
                </li>
                <li class="nav-item px-3">
                    <a href="logout_script.php" class="nav-link"><i class="fa fa-arrow-circle-left m-2" aria-hidden="true"></i>Logout</a>
                </li>
                
                    <?php
                } else {
                    ?>
                 <li class="nav-item px-3">
                    <a href="index.php" class="nav-link" ><i class="fa fa-home m-2" aria-hidden="true "></i>Home</a>
                </li>
                
                  <li class="nav-item px-3">
                    <a href="products.php" class="nav-link"><i class="fa fa-shopping-basket m-2" aria-hidden="true"></i>Products</a>
                </li>
                 <li class="nav-item px-3">
                    <a href="register.php" class="nav-link"><i class="fa fa-user m-2" aria-hidden="true"></i>Register</a>
                </li>
                 <li class="nav-item px-3">
                    <a href="login.php" class="nav-link"><i class="fa fa-arrow-circle-right m-2" aria-hidden="true"></i>Login</a>
                </li>
                 
                 <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</nav>