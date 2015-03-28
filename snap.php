<?php 

    // execute common code 
    require("common.php"); 
     
    // checked if logged in
    if(empty($_SESSION['user'])) 
    { 
		//if not logged in, redirect 
        header("Location: index.php"); 

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
    </script>
    <script src="jquery-2.1.1.min.js" type="text/javascript">
    </script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js/snapJS.js"></script>
    <script type="text/javascript" src="js/commonJS.js"></script>
	
	
	//coding for adding how button
	<link rel="stylesheet" type="text/css" href="mainmenu.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <title>
        Snap
    </title>
    <style>
         #leftBox{
           background: cyan;
           width: 20%;
           min-height: 80px;
           padding-top: 30px;
             font-size: 30px;
            font-weight:bolder;
        }
        
        #rightBox{
           background: purple;
           width: 20%;
           min-height: 80px;
           padding-bottom: 30px;
             font-size: 30px;
            font-weight:bolder;
            color: cyan;
        }
    
    </style>
    
</head>

<body onload="hide()">
	<div class="page">
		<h1 align="center">
		  Snap
		</h1>
		<div align="center">
			<div id="leftBox" id="demo">
			</div>
			<div id="rightBox">
			</div>
			<br>
			<br>
			<button id="butBegin" onclick="begin()">
				Begin
			</button>
			<br>
			<button id="snap" onclick="snapFunction()">
				SNAP
			</button>
			<br>
			<div id="time">
			</div>
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
	
	//code for adding how button
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