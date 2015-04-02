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
    	require("topMenu.php");
    }    
    
?> 

<!DOCTYPE html>
<html lang="en">

<head>	
    <title>
        Profile
    </title>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script type="text/javascript">var actualUser = <?php echo json_encode(htmlentities($_SESSION['user']['username'])); ?>; 
    //get level into var
    var levelNew = <?php echo $row["level"];?>;</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="jquery-2.1.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js/profile.js"></script>
    <!--<script> alert("username = " + actualUser);</script>-->
    <script type="text/javascript" src="js/commonJS.js"></script>
	
</head>


<body onload="setIcon()">
	Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?> Logged in<br /> 
	<a href="logout.php">Logout</a>
	
	<div align="center">
		<!--set icon based on level-->
		<div id="icon"> 
			<!--icon is set here-->
		</div>
		<br>
		<!--set name based on session-->
		<div id="profileName">
			Name: <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?> 
		</div>
		<br>
		<!--set level based on database-->
		<div id="profileLevel">
			Level: <?php echo $row["level"];?>
		</div>
	</div>	
</body>

</html>