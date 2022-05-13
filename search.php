<!DOCTYPE html>
<html lang="en">

<head>
  <title>Search</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    .character-container {
      display: grid;
      grid-template-columns: 33% 33% 33%;
      overflow: hidden;
      column-gap: 1px;
      height: 100vh;
    }

    .grid-item {
      margin: 5px;
    }
  </style>
</head>

<body class="body" style="
 background-image: url('images/nypllight.jpg');
 height: 100%;
 background-attachment: fixed;">

  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.html">Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
          aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.html">Home</a>
            </li>
            <!--if not logged in; if logged in, 2 list items: account and log out!-->
            <li class="nav-item">
              <a class="nav-link" href="login.html">Log In</a>
            </li>
          </ul>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="search.html">Search</a>
            </li>
        </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="container py-5">
    <form method="get">
      <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="query">
      <fieldset class="mb-3">
        <legend>Search by:</legend>
        <div class="form-check">
          <input type="radio" name="radios" class="form-check-input" id="exampleRadio1">
          <label class="form-check-label" for="exampleRadio1">Title</label>
        </div>
        <div class="form-check">
          <input type="radio" name="radios" class="form-check-input" id="exampleRadio2">
          <label class="form-check-label" for="exampleRadio2">Author</label>
        </div>
        <div class="form-check">
          <input type="radio" name="radios" class="form-check-input" id="exampleRadio2">
          <label class="form-check-label" for="exampleRadio2">Keyword</label>
        </div>
      </fieldset>
      <p><button class="btn btn-lg btn-primary" type="submit">Search</button></p>
    </form>
    
    <hr class="my-2">


<?php
  require_once('php/sql_conn.php');
  session_start();
	$query = $_GET['query']; 
  $_SESSION['query']=$query;
	// gets value sent over search form
	
	$min_length = 3;
	// you can set minimum length of the query if you want
	
	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
		
		$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
		$query = mysqli_real_escape_string($dbc, $query);
		// makes sure nobody uses SQL injection
		
		$raw_results = mysqli_query($dbc, "SELECT * FROM media NATURAL JOIN mediaInfo NATURAL JOIN (writes INNER JOIN author on authorID=ID)
			WHERE (`title` LIKE '%".$query."%') OR (`firstName` LIKE '%".$query."%' OR (`lastName` LIKE '%".$query."%') OR (`summary` LIKE '%".$query."%'))") or die(mysql_error());
           
			
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table
		
		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            
            echo '<div class="grid-container">
            <div class="character-container">';

			while($results = mysqli_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
                echo '    
                  <div class="grid-item">
                    <div class="card">';
                    if($results['genre']=="Fiction"){
                        echo '<div class="card-body" style="background-color: palegreen;">';
                    } else if($results['genre']=="Children's Books"){
                        echo '<div class="card-body" style="background-color: paleturquoise;">';
                    } else if($results['genre']=="Historical Fiction"){
                        echo '<div class="card-body" style="background-color: blanchedalmond;">';
                    } else if($results['genre']=="Adventure Fiction"){
                        echo '<div class="card-body" style="background-color: coral;">';
                    } else {
                        echo '<div class="card-body" style="background-color: paleturquoise;">';
                    }
                    echo'
                        <h5 class="card-title">'.$results['title'].'</h5>
                        <p class="card-text">Author: '.$results['firstName'].' '.$results['lastName'].'</p>
                        <p class="card-text">Description: '.$results['summary'].'</p>
                        <p class="card-text"><small class="text-muted">Copies available: '.$results['copiesOnHand'].'</small></p>
                        <button class="btn btn-primary" onclick="window.location.href=\'php/putOnHold.php\'">Put on Hold</button>
                        <button class="btn btn-primary" onclick="window.location.href=\'payment.html\'">Buy</button>
                      </div>
                    </div>
                  </div>
          
                </div>
              </div>';
				// posts results gotten from database(title and text) you can also show id ($results['id'])
			}
			
		}
		else{ // if there is no matching rows do following
			echo "No results";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}
?>


  </main>

 
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
    integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D"
    crossorigin="anonymous"></script>

</body>

</html>