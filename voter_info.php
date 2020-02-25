
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

    .main-content{
        background:rgb(241, 238, 238);
    }
    .navbar img{
        width:30px;
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
    .voter-img{
      margin:15px 0px 0px 10px;
      
    }
    .profile p{
      margin:0;
    }
    .voter-bio{
      margin-left:-80px;
    }
    </style>
    <title>onlinevoting.org</title>
  </head>
  <body>


    


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
                        <a href="#" class="nav-link"> Welcome Admin! <img src="images/admin.png" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a href="voter_login.php" class="nav-link ">Logout</a>
                    </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid ">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar sidebarr">
          <div class="sidebar-sticky ">
            <ul class="nav flex-column">
    
              <li class="nav-item">
                <a class="nav-link active" href="voter_profile.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only text-muted">(current)</span>
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="voter_info.php">
                  <span data-feather="users"></span>
                    View Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="voter_view_candidates.php">
                  <span data-feather="shopping-cart"></span>
                    View Candidates
                </a>
              </li>
              
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="voter_results.php">
                  <span data-feather="shopping-cart"></span>
                    Results
                </a>
              </li>
              
              <hr>
            </ul>

            
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 main-content">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <p class="lead">Voter / Profile</h1>
          </div>
          <div class="profile">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-2 ml-5">
                    <img src="images/voter2.jpg" style="width:150px" alt="" class="rounded-circle voter-img">
                  </div>
                  <div class="col-lg-6 voter-bio">
                    <h4>John Williams</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic velit dolores ut adipisci!</p>
                    <p>Consectetur adipisicing elit.</p>
                    <p>Bronx,New York</p>
                  </div>
                  <div class="col-lg-1">
                    <a href="voter_edit.php"><div class="btn btn-primary">Edit Profile</div></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <p class="lead">Personal Details</p>
                <table class="table">
                  <tr>
                    <th>Email</th>
                    <td>johnwilliams10Agmail.com</td>
                  </tr>
                  <tr>
                    <th>Birth Date</th>
                    <td>10/7/2009</td>
                  </tr>
                  <tr>
                    <th>Age</th>
                    <td>21</td>
                  </tr>
                  <tr>
                    <th>Phone</th>
                    <td>9937912396</td>
                  </tr>
                  <tr>
                    <th>Gender</th>
                    <td>Male</td>
                  </tr>
                  <tr>
                    <th>Address</th>
                    <td>5th Avenue Street,Bronx,New York,US</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          

          <div class="footeradmin">
            <p>Copyright  &copy; 2020. All rights reserved.</p>
          </div>
        
        </main>
      </div>
    </div>

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
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

  </body>
</html>