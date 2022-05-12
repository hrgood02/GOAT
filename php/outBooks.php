<?php
    require_once('sql_conn.php');
    session_start();

    $id = $_SESSION["id"];
    $result = mysqli_query($dbc,"SELECT * from checksOut NATURAL JOIN media NATURAL JOIN mediaInfo 
    NATURAL JOIN (writes INNER JOIN author on authorID=ID) WHERE accountNo='" . $id . "'");

    if($result){
        while($row = mysqli_fetch_array($result)){
            echo 
            '<div class="grid-item">
              <div class="card">';
            if($row['genre']=="Fiction"){
                echo '<div class="card-body" style="background-color: palegreen;">';
            } else if($row['genre']=="Children's Books"){
                echo '<div class="card-body" style="background-color: paleturquoise;">';
            } else if($row['genre']=="Historical Fiction"){
                echo '<div class="card-body" style="background-color: blanchedalmond;">';
            } else if($row['genre']=="Adventure Fiction"){
                echo '<div class="card-body" style="background-color: coral;">';
            } else {
                echo '<div class="card-body" style="background-color: paleturquoise;">';
            }
            echo '<h5 class="card-title">'.$row['title'].'</h5>
                  <p class="card-text">Author: '.$row['firstName'].' '.$row['lastName'].'</p>
                  <p class="card-text">Description: '.$row['summary'].'</p>
                  <p class="card-text"><small class="text-muted">Due: '.$row['dueDate'].'</small></p>
                </div>
              </div>
            </div>';
            
        }
    }

?>