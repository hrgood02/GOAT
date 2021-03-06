<?php
    require_once("sql_conn.php");

    // Starting the session, to use and
    // store data in session variable
    session_start();
      
    // If the session variable is empty, this
    // means the user is yet to login
    // User will be sent to 'login.php' page
    // to allow the user to login
    if (!isset($_SESSION['email'])) {
        header('location: login.php');
    }
      
    // Logout button will destroy the session, and
    // will unset the session variables
    // User will be headed to 'login.php'
    // after logging out
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
    }
    
    $email=$_SESSION['email'];
    $query = "SELECT * FROM libraryAccount  WHERE 'email'='$email'";
    $result=mysqli_query($dbc, $query) or die("wrong");
    
      echo '<form action="/action_page.php">
      <label for="fname">First name:</label>
      <input type="text" id="fname" name="fname" value='. $_SESSION['firstName'] . ' style="border-radius: 5px; margin: 5px;"
        readonly><br>
      <label for="lname">Last name:</label>
      <input type="text" id="lname" name="lname" value='. $_SESSION['lastName'] . ' style="border-radius: 5px; margin: 5px;"
        readonly><br><br>
  
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" value='. $_SESSION['email'] . '
        style="border-radius: 5px; margin: 5px;" readonly><br><br>
  
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" value='. $_SESSION['address'] . '
        style="border-radius: 5px; margin: 5px;" readonly><br>
      <label for="city">City:</label>
      <input type="text" id="city" name="city" value='. $_SESSION['city'] . ' style="border-radius: 5px; margin: 5px;"
        readonly><br>
      <label for="state">State:</label>
      <input type="text" id="state" name="state" value='. $_SESSION['state'] . ' style="border-radius: 5px; margin: 5px;"
        readonly><br>
      <label for="ZIP">ZIP Code:</label>
      <input type="text" id="ZIP" name="ZIP" value='. $_SESSION['zipCode'] . ' style="border-radius: 5px; margin: 5px;"
        readonly><br>
      </form>';


?>