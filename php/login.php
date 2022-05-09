<?php
    require_once("sql_conn.php");

    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql="SELECT accountNo FROM libraryAccount WHERE email='$email' and password='$password'";
        $result=mysqli_query($dbc, $sql);
        $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
        $active=$row['active'];

        $count=mysqli_num_rows($result);

        if($count == 1) {
            //session_register("email");
            //$_SESSION['login_user'] = $myusername;
            
            header("location: catalog.html");
         }else {
            $error = "Your Login Name or Password is invalid";
         }
    }
?>