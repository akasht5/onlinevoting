<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            
        }
        .card-form{
            margin-top:50px;
            margin-bottom:-50px;
            padding-top:100px;
            padding-bottom:110px;
        }
        .btn-login{
            width:100%;
            padding:10px 0px;
            margin-bottom:20px;
          
        }
    </style>
    <title>onlinevoting.org</title>
  </head>
  <body>
    <!-- Navigation -->

    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand">Online Voting</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link ">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="news.php" class="nav-link ">News</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="admin_login.php">Admin</a>
                        <a class="dropdown-item" href="candidate_login.php">Candidate</a>
                        <a class="dropdown-item" href="voter_login.php">Voter</a>
                        
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Section -->
    <div class="login-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ml-auto mr-auto card-form">
                
                    <h3>Admin Login</h3>
                    <p class="lead">Lorem ipsum dolor sit amet consect totam  maxime. </p>
                    <form action="admin_profile.php">
                        <div class="form-group">
                            <h6>Username</h6>
                            <input type="email" name="username" id="" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <h6>Password</h6>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Remember me
                            </label>
                          </div>
                        <div class="form-group mt-3">
                            <input type="submit" value="Login" class="btn btn-primary btn-login">
                            <a href="#" >Forgot Password ?</a>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
    </div>
   

    <!-- Footer -->

    <div id="footer">
        <div class="container">
            <div class="row">
            <div class="col text-center">
                <h3>Stay Connected!</h3>
                <img class="sociall" src="images/twitter.svg" alt="Twitter">
                <img class="sociall" src="images/linkedin.svg" alt="Linkedin">
                <img class="sociall" src="images/facebook.svg" alt="Facebook">
                <hr>
                <p>Copyright &copy; 2020. All rights reserved. </p>

            </div>
            </div>
        </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Ionic Icons -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

  </body>
</html>