<?php
    require_once("sql_conn.php");
    session_start();

    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $query="SELECT * FROM libraryAccount WHERE email='$email' AND password='$password'";
        $result=mysqli_query($dbc, $query) or die(mysqli_error());

        if(mysqli_num_rows($result)==1) {
            $_SESSION['email'] = $email;
            
            header("Location: ../account.php");
         }else {
            header("Location:../tryAgain.html");
            
         }
    }
?>