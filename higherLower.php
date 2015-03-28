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
     
?> 
Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?> Logged in<br /> 
<a href="logout.php">Logout</a>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script type="text/javascript">var actualUser = <?php echo json_encode(htmlentities($_SESSION['user']['username'])); ?>;</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="jquery-2.1.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js/higherLowerJS.js"></script>
    <!--<script> alert("username = " + actualUser);</script>-->
    <script type="text/javascript" src="js/commonJS.js"></script>

	//code for how button
	<link rel="stylesheet" type="text/css" href="mainmenu.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	
	
    <title>
        Higher or Lower
    </title>
    <style>
    #firstnum, #secondnum{
    font-size:40px;
    text-align:center;
    }
    
    </style>
</head>

<body onload="hide()">
	<div class="page">
		<h1 align="center">
		  Higher or Lower
		</h1>
		<div id="1" align="center" id="demo">
			Is:

			<input type="text" value="" size="3" id="firstnum"> higher or lower than:

			<input type="text" value="" size="3" id="secondnum">
			<br>
			<br>
			<button id="but1" onclick="higher()">
				Higher
			</button>
			<button id="but2" onclick="lower()">
				Lower
			</button>
			<br>
			<br>
			<div id="time">
			</div>
			<button id="butBegin" onclick="begin()">
				Begin
			</button>
			<br>
			<br>
			<div id="liveScoreUpdate">
				<h2>
			  Current Score: 
			</h2>
				<input type="text" value="" size="3" id="currentScore"> out of

				<input type="text" value="" size="3" id="totalPlays">
				<br>
				<br>
				<br>
				<a href="gamemenu.php">
					<img src="images/HomeButton.jpg" alt="Home" style="width:50px;height:50px;border:0">
				</a>
			</div>
		</div>
	</div>
	
	
	//code for how button
	
	
		<div id="pageone" data-role="main" class="ui-content">
        
   <a href="#myPopup" data-rel="popup" data-position-to="#demo" data-transition="flip">
    <img src="infoBtn.png" alt="Info" style="width:50px;"></a>
     
     
 <div data-role="popup" id="myPopup" data-overlay-theme="b">
      <p>How to Play</p> 
      <a href="#pageone" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img src="operatorsHow.jpg" style="width:300px;height:400px;">
    </div>
  </div>   
</body>

</html>