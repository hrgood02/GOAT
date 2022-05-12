<?php
    require_once('sql_conn.php');

    $id = $_SESSION["id"];
    $result = mysqli_query($dbc,"SELECT * from checksOut WHERE accountNo='" . $id . "'");
    $totalBooks=0;
    while($row = mysqli_fetch_array($result)){
       $totalBooks++;
    }
    echo '<p>Card #: '.str_pad($id,10,'0',STR_PAD_LEFT).'</p>
    <p>PIN: ****</p>
    <p>Current Books Checked Out: '.$totalBooks.'</p>';
?>