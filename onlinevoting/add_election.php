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
                  Dashboard <span class="sr-only text-muted">(current)</span>
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <!-- <span data-feather="shopping-cart"></span> -->
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
                  <!-- <span data-feather="bar-chart-2"></span> -->
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
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom container">
            <p class="lead">Admin / Add Election</p>
          </div>
          <div class="main-body container">
            <h4>Add Election</h4>
            <form action="">
              <div class="container">
                <div class="form-group">
                  <label for="">Election Name</label>
                  <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Number of candidates</label>
                  <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Number of seats</label>
                  <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Start Date</label>
                  <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">End Date</label>
                  <input type="text" name="" id="" class="form-control">
                </div>
                <input type="submit" value="Submit" class="btn btn-primary form-control">
              </div>
            </form>
            
          </div>
          <div class="footeradmin">
            <p>Copyright  &copy; 2020. All rights reserved.</p>
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
    





    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Ionic Icons -->
    <!-- <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script> -->

  </body>
</html>