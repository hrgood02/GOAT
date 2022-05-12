<?php 
    require_once("sql_conn.php");

    $id = $_SESSION["id"];
    $result = mysqli_query($dbc,"SELECT * from checksOut WHERE accountNo='" . $id . "'");
    $totalFine=0;
    while($row = mysqli_fetch_array($result)){
       $totalFine=$totalFine+$row['fine'];
    }
    echo '<p>Current Fines: $'.number_format($totalFine,2).'<a href="payment.html"><br><b>Pay</b></a><br>';
?>