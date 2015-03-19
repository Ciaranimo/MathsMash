<?php

    // connect to DB
    require("common.php"); 
     
    // Check whether user is logged in
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, redirect to the login page. 
        header("Location: index.php"); 
         
        // this statement is needed 
        die("Redirecting to index.php"); 
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

Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?> Logged in<br /> 
<a href="logout.php">Logout</a>-->
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1' name='viewport'/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Maths Mash</title>

</head>
<body>
    <div class="page">

        <header>
		<br/>
        </header>
        <div id="content">
		
			<div class="gameButton">
				<div class="gameButtonText">
					<a href="gamemenu.php">Games</a>
				</div>
			</div>
			<div class="gameButton">
				<div class="gameButtonText">
					<a href="leaderboard.php">Leaderboard</a>
				</div>
			</div>
        </div>
        <div id="ldrbrd" align="center">
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
		</div>


    </div>
</body>
</html>