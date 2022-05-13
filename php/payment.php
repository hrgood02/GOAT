<?php
    require_once("sql_conn.php");
    if(isset($_POST['submit'])){
        $type=$_POST['paymentType'];
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $cardNo=$_POST['cardNo'];
        $cvv=$_POST['cvv'];
        $month=$_POST['month'];
        $year=$_POST['year'];
        

        $query="INSERT INTO payment VALUES ('$type','$firstName', '$lastName', '$cardNo', '$cvv', '$month', '$year')";

        if($dbc->query($query)){
            echo "New Record Added Successfully!";
        }

        mysqli_close($dbc);
        header("location:../account.php");
    }
?>