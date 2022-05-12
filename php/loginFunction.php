<?php
    require_once("sql_conn.php");
    session_start();

    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $query="SELECT * FROM libraryAccount WHERE email='$email' AND password='$password'";
        $result=mysqli_query($dbc, $query) or die(mysqli_error());
    
        if(mysqli_num_rows($result)==1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $row['accountNo'];
            $_SESSION['firstName'] = $row['firstName'];
            $_SESSION['lastName'] = $row['lastName'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['city'] = $row['city'];
            $_SESSION['state'] = $row['state'];
            $_SESSION['zipCode'] = $row['zipCode'];
            
            header("Location: ../account.php");
         }else {
            header("Location:../tryAgain.html");  
         }
    }
?>