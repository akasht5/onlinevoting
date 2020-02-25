
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
                        <a href="voter_login.php" class="nav-link ">Logout</a>
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
                <a class="nav-link active" href="voter_profile.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only text-muted"></span>
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
            <p class="lead">Voter / View Candidates</h1>
          </div>
          <div class="inner-section">
            <form action="">
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
            </form>
            <table class="table table-bordered table-striped">
              <tr>
                <th>Candidate Id</th>
                <th>Candidate Name</th>
                <th>Party</th>
                <th>Email</th>
                <th>No. of votes</th>
                
              </tr>
              <tr>
                <td>100</td>
                <td>Vyankateshwar Datt</td>
                <td>BJP</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                
                <td><button type="button" class="btn btn-success">Vote</button></td>
                
              </tr>
              <tr>
              <td>101</td>
              <td>Sunil Patil</td>
              <td>Shivsena</td>
              <td>sunilpatil4@gmail.com</td>
              <td>7,032</td>
             
              <td><button type="button" class="btn btn-success">Vote</button></td>
              </tr>
              <tr>
                <td>102</td>
                <td>Vyankateshwar Datt</td>
                <td>BJP</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                
                <td><button type="button" class="btn btn-success">Vote</button></td>
              </tr>
              <tr>
                <td>103</td>
                <td>Vyankateshwar Datt</td>
                <td>BJP</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
               
                <td><button type="button" class="btn btn-success">Vote</button></td>
              </tr>
              <tr>
                <td>104</td>
                <td>Vyankateshwar Datt</td>
                <td>BJP</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                
                  <td><button type="button" class="btn btn-success">Vote</button></td>
              </tr>
              <tr>
                <td>105</td>
                <td>Vyankateshwar Datt</td>
                <td>BJP</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                
                <td><button type="button" class="btn btn-success">Vote</button></td>
              </tr>
              <tr>
                <td>100</td>
                <td>Vyankateshwar Datt</td>
                <td>BJP</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                
                <td><button type="button" class="btn btn-success">Vote</button></td>
              </tr>
              <tr>
                <td>100</td>
                <td>Vyankateshwar Datt</td>
                <td>BJP</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                
                <td><button type="button" class="btn btn-success">Vote</button></td>
              </tr>
              <tr>
                <td>100</td>
                <td>Vyankateshwar Datt</td>
                <td>BJP</td>
                <td>vdatt100@gmail.com</td>
                <td>10,302</td>
                
                <td><button type="button" class="btn btn-success">Vote</button></td>
                
              </tr>
            </table>
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