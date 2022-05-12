<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["id"]);
unset($_SESSION["firstName"]);
unset($_SESSION["lastName"]);
unset($_SESSION["address"]);
unset($_SESSION["city"]);
unset($_SESSION["state"]);
unset($_SESSION["zipCode"]);

header("Location:../login.html");
?>