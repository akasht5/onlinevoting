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
                        <a href="#" class="nav-link"> Welcome Admin! <img src="images/admin.png" alt=""></a>
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
                  Dashboard <span class="sr-only text-muted"></span>
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
                  <!-- <span data-feather="bar-chart-2"></span> -->
                  <small class="news_sidebar">NEWS</small> 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add_news.php">
                  <span data-feather="layers"></span>
                  Add News
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
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <p class="lead">Admin / View Candidates</p>
          </div>
          <div class="main-body">
            <h4>View Candidates by</h4>
            
            <table class="table table-bordered table-striped">
              <tr>
                <th>Candidate Id</th>
                <th>Candidate Name</th>
                <th>Email</th>
                <th>No. of votes</th>
                <th>State</th>
                <th>Constituency</th>
              </tr>
              <tr>
                <td>100</td>
                <td>Vyankateshwar Datt</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                <td>Karnatak</td>
                <td>Banglore</td>
                <td><button type="button" class="btn btn-success">Update</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
              <td>101</td>
              <td>Sunil Patil</td>
              <td>sunilpatil4@gmail.com</td>
              <td>7,032</td>
              <td>Mahrashtra</td>
              <td>Satara</td>
                <td><button type="button" class="btn btn-success">Update</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
                <td>102</td>
                <td>Vyankateshwar Datt</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                <td>Karnatak</td>
                <td>Banglore</td>
                <td><button type="button" class="btn btn-success">Update</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
                <td>103</td>
                <td>Vyankateshwar Datt</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                <td>Karnatak</td>
                <td>Banglore</td>
                <td><button type="button" class="btn btn-success">Update</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
                <td>104</td>
                <td>Vyankateshwar Datt</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                <td>Karnatak</td>
                <td>Banglore</td>
                <td><button type="button" class="btn btn-success">Update</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
                <td>105</td>
                <td>Vyankateshwar Datt</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                <td>Karnatak</td>
                <td>Banglore</td>
                <td><button type="button" class="btn btn-success">Update</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
                <td>100</td>
                <td>Vyankateshwar Datt</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                <td>Karnatak</td>
                <td>Banglore</td>
                <td><button type="button" class="btn btn-success">Update</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
                <<td>100</td>
                <td>Vyankateshwar Datt</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                <td>Karnatak</td>
                <td>Banglore</td>
                <td><button type="button" class="btn btn-success">Update</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
                <td>100</td>
                <td>Vyankateshwar Datt</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                <td>Karnatak</td>
                <td>Banglore</td>
                <td><button type="button" class="btn btn-success">Update</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
            </table>
            <div class="footeradmin">
              <p>Copyright  &copy; 2020. All rights reserved.</p>
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

    <!-- Graphs -->
    





    <!-- Navigation -->
<!-- 
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="index.html" class="navbar-brand">Online Voting</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="news.html" class="nav-link ">News</a>
                    </li>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administration
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Add Election</a>
                        <a class="dropdown-item" href="#">View Elections</a>
                        <a class="dropdown-item" href="#">Add Candidate</a>
                        <a class="dropdown-item" href="#">View Candidates</a>
                        
                        
                        </div>
                    </div>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="dropdown-menu ">
        <h6 class="dropdown-header">Dropdown header</h6>
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
      </div>

    <!-- Footer -->

    <!-- <div id="footer">
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
 --> 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Ionic Icons -->
    <!-- <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script> -->

  </body>
</html>