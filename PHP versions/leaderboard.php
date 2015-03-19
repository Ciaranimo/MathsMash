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

</body>
</html>