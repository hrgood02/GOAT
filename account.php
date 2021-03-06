<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Account</title>



  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">
  <link href="css/popups.css" rel="stylesheet">
</head>

<body style="
background-image: url('images/nypllight.jpg');
height: 100vh;
background-attachment: fixed;
margin-bottom: 50px;">



  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="account.php">
                <span data-feather="home"></span>
                My Account
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="booklist.php">
                <span data-feather="file"></span>
                My Book List
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="checkedout.php">
                <span data-feather="file"></span>
                Checked Out
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="holds.php">
                <span data-feather="file"></span>
                Holds
              </a>
            </li>
          </ul>


        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
          <div class="container-fluid">
            <a class="navbar-brand" href="home.html">Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                </li>
                <!--if not logged in; if logged in, 2 list items: account and log out!-->
                <li class="nav-item">
                  <a class="nav-link" href="account.php">My Account</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="php/logout.php">Log Out</a>
                </li>
              </ul>
              </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="search.html">Search</a>
                        </li>
                    </ul>
            </div>
          </div>
        </nav>

        <div class="container">
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="background-color: #ffffff; border-radius: 10px; padding: 15px; margin: 5px;">
                <h1 class="h2">My Info</h1>
              </div>
              <div class="container" style="border:gray; border-style: dotted; background-color: #ffffff80; border-radius: 10px; padding: 10px;">
                <?php include 'php/accountFunctions.php'; ?>
              </div>
            </div>
            <div class="col">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="background-color: #ffffff; border-radius: 10px; padding: 15px; margin: 5px;">
                <h1 class="h2">My Account:</h1>
              </div>
              <div class="container"
                style="border:gray; border-style: dotted; background-color: #ffffff80; border-radius: 10px; padding: 10px; margin-top: 20px;">
                <?php include 'php/fine.php';?>
                
                
                 <a href="changePassword.html"><b>Change Password</b></a><br>
                 <a href="delete.php"><b>Deactivate Account</b></a>
                </p>
              </div>
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="background-color: #ffffff; border-radius: 10px; padding: 15px; margin: 5px;">
                <h1 class="h2">My Library Card</h1>
                
              </div>
              <div class="container"
                style="border:gray; border-style: dotted; background-color: #ffffff80; border-radius: 10px; padding: 10px;">
                <?php include 'php/cardInfo.php'; ?>
              
              </div>
            </div>
          </div>
        </div>

      </main>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/popups.js"></script>

</body>

</html>