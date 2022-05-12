<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Are You Sure?</title>



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
  
  <script>
    if(!(confirm("Are you sure you want to delete your account?"))){
        window.location = ('account.php') 
        console.log(window.location)
    }

  </script>

  <?php
    session_start();
    include "php/sql_conn.php";
    $accountNo=$_SESSION['id'];
    $query="DELETE from `libraryAccount` where `accountNo` = '".$accountNo."'";
    $response = @mysqli_query($dbc, $query);
    echo "Account Deleted";
    sleep(3);
    header("location: home.html");
  ?>


  <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>