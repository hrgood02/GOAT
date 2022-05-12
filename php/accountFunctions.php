<?php
    require_once('sql_conn.php');

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
    $query = "SELECT * FROM libraryAccount WHERE 'email'=$email";
    $result=@mysqli_query($dbc, $query) or die("wrong");
    

    if($result){
      $row=mysqli_fetch_assoc($result);
      echo '<form action="/action_page.php">
      <label for="fname">First name:</label>
      <input type="text" id="fname" name="fname" value='. $row['firstName'] . 'style="border-radius: 5px; margin: 5px;"
        readonly><br>
      <label for="lname">Last name:</label>
      <input type="text" id="lname" name="lname" value='. $row['lastName'] . ' style="border-radius: 5px; margin: 5px;"
        readonly><br><br>
  
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" value='. $email . '
        style="border-radius: 5px; margin: 5px;" readonly><br><br>
  
      <label for="address">Address Line 1:</label>
      <input type="text" id="address" name="address" value='. $row['address'] . '
        style="border-radius: 5px; margin: 5px;" readonly><br>
      <label for="city">City:</label>
      <input type="text" id="city" name="city" value='. $row['city'] . ' style="border-radius: 5px; margin: 5px;"
        readonly><br>
      <label for="state">State:</label>
      <input type="text" id="state" name="state" value='. $row['state'] . ' style="border-radius: 5px; margin: 5px;"
        readonly><br>
      <label for="ZIP">ZIP Code:</label>
      <input type="text" id="ZIP" name="ZIP" value='. $row['zipCode'] . ' style="border-radius: 5px; margin: 5px;"
        readonly><br>
      </form>';
    }


?>