<?php
    DEFINE('DB_SERVER', 'localhost');
    DEFINE('DB_USERNAME', 'root');
    DEFINE('DB_PASSWORD','');
    DEFINE('DB_NAME','library_system');
    
    $dbc=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($dbc==false){
        die("ERROR: Could not connect.".mysqli_connect_error());
    }
    //echo "connected";
?>