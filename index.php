<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

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
                        <a href="index.php" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="news.php" class="nav-link">News</a>
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

    <!-- Home Section -->
    <div id="home-section">
        <div class="dark-overlay">
            <div class="home-inner">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="heading">
                                <h1>We Make Voting Easy And Affordable!</h1>
                                <br>
                                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis id ad cum dolorem consectetur animi, aspernatur repellendus quidem sit optio doloribus laudantium? Expedita perspiciatis beatae voluptas ut omnis nobis!</p>
                                <a href="voter_registration.php" class="btn btn-outline-primary">Vote Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <div id="home-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <img src="images/participation.jpg" class="rounded" alt="">
                    <h4 class="feature">Increase in participation</h3>
                    <p class="">The Internet voting system tends to maximize user participation, by allowing internet connection.</p>
                </div>
                <div class="col-lg-3 text-center">
                    <img src="images/lock.jpg" class="rounded" alt="">
                    <h4 class="feature">Security</h3>
                    <p class="">When talking about a Secure election we mean the overlap of security layers that are counted are in accordance with the will of the voters </p>
                </div>
                <div class="col-lg-3 text-center">
                    <img src="images/computer.jpg" class="rounded" alt="">
                    <h4 class="feature">Efficiency</h3>
                    <p class="">The reduction in organizational and implementation costs management compared to traditional paper voting, for example.</p>
                </div>
                <div class="col-lg-3 text-center">
                    <img src="images/realible.jpg" class="rounded" alt="">
                    <h4 class="feature">Realibility</h3>
                    <p class="">The reduction in organizational and implementation costs management  for example.</p>
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