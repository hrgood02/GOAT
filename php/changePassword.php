<?php 
    require_once("sql_conn.php");
    session_start();

    $id = $_SESSION["id"];

    if(count($_POST)>0) {
        $result = mysqli_query($dbc,"SELECT * from libraryAccount WHERE accountNo='" . $id . "'");
        $row=mysqli_fetch_array($result);
        if($_POST["currentPassword"] == $row["password"]) {
            mysqli_query($dbc,"UPDATE libraryAccount set password='" . $_POST["newPassword"] . "' WHERE accountNo='" . $id . "'");
            echo "Password Changed Sucessfully";
        } else{
            echo "Password is not correct";
        }
    }
    header("location:../account.php");
?>