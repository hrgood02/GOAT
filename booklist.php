<?php     session_start();?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Booklist</title>



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

      .character-container {
        display: grid;
        grid-template-columns: 33% 33% 33%;
        overflow: hidden;
        column-gap: 1px;
        height: 100vh;
      }

      .grid-item {
        margin: 5px;
      }
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">
</head>

<body style="
  background-image: url('images/nypllight.jpg');
  height: 100vh;
  background-attachment: fixed;">

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="account.php">
                <span data-feather="home"></span>
                My Account
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="booklist.php">
                <span data-feather="file"></span>
                My Book List
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="checkedout.php">
                <span data-feather="shopping-cart"></span>
                Checked Out
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="holds.php">
                <span data-feather="users"></span>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
              aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
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
                  <a class="nav-link" href="login.html">Log Out</a>
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
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          style="background-color: #ffffff; border-radius: 10px; padding: 15px; margin: 5px;">
          <h1 class="h2">My Booklist</h1>
          <button class="btn btn-lg btn-primary">Edit</button>
        </div>

        <div class="grid-container">
          <div class="character-container">
            <?php include 'php/listBook.php'; ?>
            

          </div>
        </div>

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" style="width: 100%; background-color: #212529; bottom: 0;
    left: 0;">
          <p class="col-md-4 mb-0 text-muted">Public Library</p>

          <a href="/" class="nav col-md-4 justify-content-end" style="margin: 30px;">
            <img class="mb-4" src="images/book.jpg" alt="" width="72">
          </a>

        </footer>

      </main>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>