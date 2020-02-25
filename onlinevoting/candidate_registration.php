
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
            
        background:rgb(241, 238, 238);
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
        .register .highlight{
            color:rgb(72, 106, 255);
        }
        .register{
            margin-top:100px;
            margin-bottom:100px;
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
                        <a href="About.php" class="nav-link ">About</a>
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

    <!-- Registration Section -->
    <div class="register">
        <div class="container">
            <h4>Register as a <span class="highlight">Candidate</span></h4>
            <form action="candidate_login.php">
                <p class="lead">Account Details</p>
              <div class="form-group">
                <label>Full Name </label>
                <input type="text" name="fullname" class="form-control">
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="emailid" class="form-control">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
              </div>
              <hr>
              <p class="lead">Personal Details</p>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Age</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control">
                      <option value="male">Male</option> 
                      <option value="female">Female</option>
                      <option value="transgender">Transgender</option>
                    </select>
                  </div>
                </div>
              </div>
              
              <div class="row">
                  <div class="col">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control">
                      </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                        <label>Aadhaar Card no.</label>
                        <input type="text" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control">
                <small>Street / Building / Area</small>
                <input type="text" class="form-control">
                <small>Landmark </small>
              </div>
                <hr>
                <div class="row">
                <div class="col">
                <div class="form-group">
                  <label for="">State</label>
                  <select class="form-control">
                    <option value="pune">Mahrashtra</option>
                    <option value="mumbai">Karnatak</option>
                    <option value="nagpur">Gujrat</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Constituency</label>
                  <select class="form-control">
                    <option value="pune">Pune</option>
                    <option value="mumbai">Mumbai</option>
                    <option value="nagpur">Nagpur</option>
                  </select>
                </div>
              </div>  
              </div> 
              <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Election Name</label>
                  <select class="form-control">
                    <option value="parliament_bihar">Parliament Election of Bihar 2019 - 20</option>
                    <option value="assembly_maharashtra">Assembly Election of Maharashtra 2019 - 20</option>
                    <option value="parliament_maharashtra">Parliament Election of Maharashtra 2019 - 20</option>
                  </select>
                </div>
              </div>   
              <div class="col">
                <div class="form-group">
                  <label>Party Name</label>
                  <select class="form-control">
                    <option value="bjp">BJP</option>
                    <option value="shivsena">Shivsena</option>
                    <option value="rashtrawadi">Rashtrawadi</option>
                    <option value="manse">Manse</option>
                  </select>
                </div>
              </div>   
              </div>
                

                <input type="submit" value="Submit" class="form-control btn btn-primary ">
                <a href="candidate_login.php">Already a member! Login</a>
                <br>
                
            </form>
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

  <!-- Code injected by live-server -->
</body>
</html>