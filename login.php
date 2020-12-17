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
       
        <div class ="login_box">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Login</h4>
                            </div>
                            <div class="panel-body">
                                <form action="validation.php" method="POST">
                                    <div class="form-group">
                                        <label>Please Enter Your Username:</label>
                                        <input type="text" name="username" class="form-control" required>
                                    </div>
                                    <div class ="form-group">
                                        <label>Please Enter Your Password: </label>
                                        <input type="text" name="password" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-md">Login</button>
                                    <b>Not a member?
                                    <a href="signup.php">Sign Up</a></b>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>        
            </div> 
        </div> 
        
        <footer>
            <div class="footer">
                <center>
                    <p>Copyright &copy; Lifestyle Store. All Rights Reserved  |  Contact Us: +91 100</p>	
                </center>
            </div>
        </footer
     
    </body>
</html>