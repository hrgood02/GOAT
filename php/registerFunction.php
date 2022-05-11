<?php
    require_once("sql_conn.php");
    if(isset($_POST['submit'])){
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zipCode=$_POST['zipCode'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $query="INSERT INTO libraryAccount (firstName, lastName, address, city, state, zipCode, email, password) VALUES ('$firstName', '$lastName', '$address', '$city', '$state', '$zipCode', '$email', '$password')";

        if($dbc->query($query)){
            echo "New Record Added Successfully!";
        }

        mysqli_close($dbc);
        header("location:../account.php");
    }
?>