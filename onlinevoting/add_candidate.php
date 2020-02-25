<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
      body{
        background:rgb(241, 238, 238);
      }
    .sidebarr{
        background: rgb(72, 106, 255) !important;
        border-radius: 5px;
        min-height:910px;
        
    }
    .sidebarr a{
        color:White ;
    }
    .sidebarr hr{
        width:100%;
        color:silver;
        font-size:20px;
        
    }
    .highlight{
      color:rgb(72, 106, 255);
    }
    .main-content{
        background:rgb(241, 238, 238);
    }
    
    
    .navbar img{
        width:30px;
    }
    .main-body hr{
      color:silver;
      width:100%;
    }
    .footeradmin{
      width:100%;
      background:lightgrey;
      text-align: center;
      color:black;
      padding:20px 30px;
      margin-top:50px;
    }
    .footeradmin p{
      margin:0;
      padding:0;

    }

    </style>
    <title>onlinevoting.org</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">Online Voting</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link"> Welcome Candidate! <img src="images/admin.png" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a href="admin_login.php" class="nav-link ">Logout</a>
                    </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid ">
      <div class="row ">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar sidebarr">
          <div class="sidebar-sticky ">
            <ul class="nav flex-column">
    
              <li class="nav-item">
                <a class="nav-link active" href="admin_profile.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only text-muted">(current)</span>
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  
                  <small class="candidate_sidebar">CANDIDATE</small> 
                </a>
              </li>
              
              
              <li class="nav-item">
                <a class="nav-link" href="view_candidates.php">
                  <span data-feather="users"></span>
                  View Cadidates
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="#">
               
                  <small class="election_sidebar">ELECTION</small> 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add_election.php">
                  <span data-feather="bar-chart-2"></span>
                  Add Election
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="view_election.php">
                  <span data-feather="layers"></span>
                  View Election
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Generate Report
                </a>
              </li>
              <hr>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 main-content">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom container">
            <p class="lead">Admin / Add Candidate</p>
          </div>
          <div class="container main-body">
              <h4>Register as a <span class="highlight">candidate</span></h4>
              <p class="lead">Account Details</p>
              <form action="">
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
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control">
                    <small>Street / Building / Area</small>
                    <input type="text" class="form-control">
                    <small>Landmark </small>
                  </div>
                  <hr>
                  <p class="lead">Election Details</p>
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label>State</label>
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
                  <div class="form-group">
                    <label for="election">Election</label>
                    <select name="" id="election" class="form-control">
                    <option value="assembly">Assembly contituency of Jharkhand 19-20</option>
                    <option value="parliament">Assembly contituency of Delhi 19-20</option>
                    <option value="parliament">Parliament contituency of Maharashtra 19-20</option>
                    <option value="parliament">Parliament contituency 19-20</option>
                    <option value="parliament">Parliament contituency 19-20</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label>Party</label>
                    <select name="" id="" class="form-control">
                      <option value="bjp">BJP</option>
                      <option value="congress">Congress</option>
                      <option value="shivsena">Shivsena</option>
                      <option value="rashtravadi">Rashtravadi</option>
                      <option value="manse">Manse</option>
                    </select>
                  </div>
                
                  <input type="submit" value="Submit" class="form-control btn btn-primary">
               </form>
              
          </div>
          
          <div class="footeradmin">
            <p>Copyright  &copy; 2020. All rights reserved.</p>
          </div>
          </div>
          
          </div>
          
        </main>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

 
    







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Ionic Icons -->
    <!-- <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script> -->

  </body>
</html>