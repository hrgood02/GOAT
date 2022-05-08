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

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr="Invalid email format";
        } else {
            $sql="SELECT accountNo FROM libraryAccount WHERE email='$email'";
            $select=mysqli_query($dbc, $sql) or exit(mysqli_error($dbc));
            if(mysqli_num_rows($select)){
                exit('This email already has an account. Try signing in.');
            }
        }

        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        
        if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
        } else {
        echo "Your password is strong.";
        }

        $query="INSERT INTO libraryAcount (firstName, lastName, address, city, state, zipCode, email, password) VALUES ('$firstName', '$lastName', '$address', '$city', '$state', '$zipCode', '$email', '$password')";

        if($dbc->query($sql)){
            echo "New Record Added Successfully!";
        }
        mysqli_close($dbc);
        header("location: account.html");
    }
?>