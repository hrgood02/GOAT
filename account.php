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
              <a class="nav-link active" aria-current="page" href="account.html">
                <span data-feather="home"></span>
                My Account
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="booklist.html">
                <span data-feather="file"></span>
                My Book List
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="checkedout.html">
                <span data-feather="file"></span>
                Checked Out
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="holds.html">
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
                  <a class="nav-link" href="account.html">My Account</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.html">Log Out</a>
                </li>
              </ul>
              <form>
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
              </form>
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
              <div class="container" style="border:gray; border-style: dotted; background-color: #ffffff80; border-radius: 10px; padding: 10px; margin-top: 20px;">
                <p>Current Fines: $0.00 <button>Pay Fines</button><br>
                  <!-- Trigger/Open The Modal -->
                  <button id="myModal" onclick = "myFunction(this)">Change Password</button>

                  <!-- The Modal -->
                <div id="myModal" class="modal">
                  <!-- Modal content -->
                  <div class="modal-content">
                    <div class="grid-container" style="width: 100%;">
                      <div class="row">
                        <div class="col">
                          <span class="close">&times;</span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4"></div>
                        <div class="col">
                          <div class="container" style=" width: 100%; background-color: white; border-radius: 30px;">
                            <div class="row">
                              <div class="col">
                                <h2 style="color: black; width: 100%;">Make a Payment</h2>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col"></div>
                              <div class="col">
                                <input type="radio" id="credit" name="paymenttype" value="credit">
                                <label for="credit">Credit</label>
                              </div>
                              <div class="col">
                                <input type="radio" id="debit" name="paymenttype" value="debit">
                                <label for="debit">Debit</label>
                              </div>
                              <div class="col"></div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <input type="text" id="firstname" name="firstname" placeholder="First Name" style="width: 100%; border-radius: 5px;">
                              </div>
                              <div class="col">
                                <input type="text" id="lastname" name="lastname" placeholder="Last Name" style="width: 100%; border-radius: 5px;">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-9">
                                <label for="cardNo">Card #:</label>
                                <input type="text" id="cardNo" name="cardNo" placeholder="xxxx-xxxx-xxxx-xxxx" style="width: 100%; border-radius: 5px;">
                              </div>
                              <div class="col">
                                <label for="cvv">CVV:</label>
                                <input type="text" id="cvv" name="cvv" placeholder="123" style="width: 100%; border-radius: 5px;">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="month">Expiration Month:</label>
                                <input type="text" id="month" name="month" placeholder="01" style="width: 100%; border-radius: 5px;">
                              </div>
                              <div class="col">
                                <label for="year">Expiration Year:</label>
                                <input type="text" id="year" name="year" placeholder="2022" style="width: 100%; border-radius: 5px;">
                              </div>
                            </div>
                            <div class="row" style="padding: 10px;">
                              <button style="width: 100%; border-radius: 5px;">Pay</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-4"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <button>Deactivate Account</button>
                </p>
              </div>
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="background-color: #ffffff; border-radius: 10px; padding: 15px; margin: 5px;">
                <h1 class="h2">My Library Card</h1>
                <button class="btn btn-lg btn-primary">Change Pin</button>
              </div>
              <div class="container" style="border:gray; border-style: dotted; background-color: #ffffff80; border-radius: 10px; padding: 10px;">
                <p>Card #: 1122334455</p>
                <p>PIN: ****</p>
                <p>Current Books: 2</p>
                <p>Total Books: 26</p>
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