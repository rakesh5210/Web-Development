<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LifeStyle | Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        
        
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">Do Shopping</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login </a> </li>
                    </ul>
                </div> 
            </div>
        </nav>
        
        <div class="content">
            <div class="banner-image">
                <div class="inner-banner-image">
                    <center>
                        <div class="banner-content">
                            <h1>Let's start shopping!</h1>
                            <p>Flat 25% OFF on selected items.</p>
                            <a href="product.php" class="button">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <a href="product.php#cameras"><img src="./image/1.jpg" class="img-responsive img-circle" alt="Responsive image"></a>
                            <div class="caption">
                                <h3>Cameras</h3>
                                <p>Choose among the best available in the world!</p>
                            </div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <a href="product.php#watches"> <img src="./image/10.jpg" class="img-responsive img-rounded" alt="Responsive image"></a>
                        <div class="caption">
                            <h3>Watches</h3>
                            <p>Original watches from best  brands!</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <a href="product.php#shirts"><img src="./image/13.jpg" class="img-responsive img-circle" alt="Responsive image"></a>
                            <div class="caption">
                                <h3>Shirts</h3>
                                <p>Our exquisite collection of shirts!</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
        <hr>
        
        <footer>
            <div class="footer">
                <center>
                    <p>Copyright &copy; Lifestyle Store. All Rights Reserved  |  Contact Us: +91 100</p>	
                </center>
            </div>
        </footer>
        
    </body>
</html>
