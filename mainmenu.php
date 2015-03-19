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
			
		</div>


    </div>
</body>
</html>