<?php

    // connect to DB
    require("common.php"); 
     
    // Check whether user is logged in
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, redirect to the login page. 
        header("Location: login.php"); 
         
        // this statement is needed 
        die("Redirecting to login.php"); 
    } 
    else
    {
     //get score from DB for leaderboard
       $query = " 
            SELECT 
            	id,
                username, 
                score
            FROM users
            ORDER BY score DESC;
        "; 
         
        /*// parameter
        $query_params = array( 
            ':username' => $_SESSION['user']['username']
        );*/
         
        try 
        { 
            // run query
            	$stmt = $db->prepare($query); 
            	$result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
            die("Failed to run query: " . $ex->getMessage()); 
        } 
        
        
	} 
?> 

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1' name='viewport'/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Leaderboard</title>

</head>
<body>

<div class="ldrbrd" align="center">
		<br>
		<h1> Leaderboard </h1?>
		<br>
		<br>
		
        <?php
			$row = $stmt->fetch(); 
			if($row)
			{
				echo "<table><tr><th>Pos.</th><th>Name</th><th>Score</th></tr>";
				$count = 1;
				// output data of first row
				echo "<tr><td>" . $count. "</td><td>" . $row["username"]. "</td><td> " . $row["score"]. "</td></tr>";
				// output data of next rows
				while($row = $stmt->fetch()) {
					$count++;
					echo "<tr><td>" . $count. "</td><td>" . $row["username"]. "</td><td> " . $row["score"]. "</td></tr>";
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
        
        ?>
</div><br>
<a href="mainmenu.php">
          <img src="images/HomeButton.jpg" alt="HIGHER OR LOWER" style="width:50px;height:50px;border:0">
        </a>

</body>
</html>