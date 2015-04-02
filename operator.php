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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
    </script>
    <script src="jquery-2.1.1.min.js" type="text/javascript">
    </script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="js/operatorJS.js"></script>
    <script type="text/javascript" src="js/commonJS.js"></script>
	<script type="text/javascript">
		var addRippleEffect = function (e) {
		var target = e.target;
		if (target.tagName.toLowerCase() !== 'button') return false;
		var rect = target.getBoundingClientRect();
		var ripple = target.querySelector('.ripple');
		if (!ripple) {
			ripple = document.createElement('span');
			ripple.className = 'ripple';
			ripple.style.height = ripple.style.width = Math.max(rect.width, rect.height) + 'px';
			target.appendChild(ripple);
		}
		ripple.classList.remove('show');
		var top = e.pageY - rect.top - ripple.offsetHeight / 2 - document.body.scrollTop;
		var left = e.pageX - rect.left - ripple.offsetWidth / 2 - document.body.scrollLeft;
		ripple.style.top = top + 'px';
		ripple.style.left = left + 'px';
		ripple.classList.add('show');
		return false;
		}

		document.addEventListener('click', addRippleEffect, false);
	</script>
    <title>
        Operator
    </title>
</head>

<body onload="hide(); updatedTotalScore();">
	<div class="page">
		<header>
			<h1 align="center">
			  Operators
			</h1>
		</header>
		
		<div class="content">
		
		    <div class="opdisplay">
				<div id="firstnum"> </div>
				<div class="guess">?</div> <!-- guess box-->
				<div id="secondnum"> </div> 
				<div id="equalsOP">=</div>
				<input type="text" value="" id="ans" />
			</div>
			<br>
			
			<div class="op-buttons-top">

				<button class="opbtn" onclick="add()">
					+
				</button>
				<button class="opbtn" onclick="sub()">
					-
				</button>
			</div>
			
			<div class="op-buttons-btm">
				<button class="opbtn" onclick="mul()">
					x
				</button>
				<button class="opbtn" onclick="div()">
					÷
				</button>
			</div>
		  
			<div id="time"> 
			</div>
			
			<br>
		   
				<button id="butBegin" onclick="begin()">
					Begin
				</button>
			
			<div id="liveScoreUpdate" align="center">
				<h2>Current Score: </h2>
				<input type="text" value="" size="3" id="currentScore"> out of

				<input type="text" value="" size="3" id="totalPlays">
				<br>
				<br>
				<div>
					Your total score: 
					<input type="text" value="" size="3" id="finalScore">
				</div>
				<br>	
				<br>
			   
			</div>
		</div>	
		

		<footer>
			 <a href="gamemenu.php">
					<img src="images/HomeButton.jpg" alt="Home" style="width:50px;height:50px;border:0">
				 </a>
		
		</footer>
	</div>
</body>

</html>