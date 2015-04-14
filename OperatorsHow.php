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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="jquery-2.1.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript">var myscore = <?php echo $row["score"];?>;
    var levelNew = <?php echo $row["level"];?>;</script>  
    <script type="text/javascript" src="js/profile.js"></script>
    <title>
      Maths Mash
    </title>
  </head>
  <body onload="setIcon()">
  <div class="page">
  <header>
            <div id="icon"></div>
            <p id="lvlnum">Level: <?php echo $row["level"];?></p>
            <a id="logout" href="logout.php"><img src="images/logout_icon.png" style="width:50px;height:50px;border:0"></a>
        </header>
        <div class="content">
	      <h1>Rules: Operators</h1>
            <img src="operatorsHow.png" style="width:400px;height:600px">
<br>
		
	  <a href="mainmenu.php">
          <img src="images/home_button.png" style="width:50px;height:50px;border:0">
        </a>
      <br>
    </div>
  </body>
</html>