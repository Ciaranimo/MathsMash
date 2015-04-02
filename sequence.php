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
    <script type="text/javascript">var actualUser = <?php echo json_encode(htmlentities($_SESSION['user']['username'])); ?>;</script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
    </script>
    <script src="jquery-2.1.1.min.js" type="text/javascript">
    </script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="js/commonJS.js"></script>
    <script type="text/javascript" src="js/sequenceJS.js"></script>

    <title>
        Sequence
    </title>
</head>

<body onload="hide()">
	<div class="page">
		<h1 align="center">
		  Next In Sequence Game
		</h1>
		<div class="content">
            <div class="seqdisplay">
                <div class="seqnums">
                    
                    <input type="text" value="" id="fNum" /> 
                </div>
                <div class="seqnums">
                    
                    <input type="text" value="" id="sNum" /> 
                </div>
                <div class="seqnums">
                    
                    <input type="text" value="" id="tNum" /> 
                </div>
                <div class="seqnums">
                    
                    <p id="qMark">?</p>
                </div>
           </div>
			<div class="seqbuttons">
			<button id="butBegin" onclick="begin()">
				Begin
			</button>
			
			<button id="but1" onclick="one()">
				Add
			</button>
			<button id="but2" onclick="two()">
				Add
			</button>
			<button id="but3" onclick="three()">
				Add
			</button>
			<button id="but4" onclick="four()">
				Add
			</button>
            </div>
			<div id="time">
			</div>
			
		</div>
		<div id="liveScoreUpdate" align="center">
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
</body>

</html>