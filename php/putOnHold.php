<?php
    require_once("sql_conn.php");
    session_start();

    $query = $_SESSION['query'];
    $query = htmlspecialchars($query); 
    // changes characters used in html to their equivalents, for example: < to &gt;
    
    $query = mysqli_real_escape_string($dbc, $query);
    // makes sure nobody uses SQL injection
    
    $raw_results = mysqli_query($dbc, "SELECT * FROM media NATURAL JOIN mediaInfo NATURAL JOIN (writes INNER JOIN author on authorID=ID)
        WHERE (`title` LIKE '%".$query."%') OR (`firstName` LIKE '%".$query."%' OR (`lastName` LIKE '%".$query."%') OR (`summary` LIKE '%".$query."%'))") or die(mysql_error());

    if($results = mysqli_fetch_array($raw_results)){
        $ISBN=$results['ISBN'];
    }
    echo $ISBN;
    $id=$_SESSION['id'];
    echo $id;
    $todayDate=date('Y-m-d');
    echo $todayDate;
    $expectedDate=date('Y-m-d',strtotime($todayDate. '+ 5 days'));
    $sql="INSERT INTO holds VALUES ('$ISBN', '$id', '$expectedDate')";

        if($dbc->query($sql)){
            echo "New Record Added Successfully!";
        }

        mysqli_close($dbc);
        header("location:../holds.php");
?>