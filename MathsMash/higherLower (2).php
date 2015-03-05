<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="jquery-2.1.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js/higherLowerJS.js"></script>
    <script type="text/javascript" src="js/commonJS.js"></script>

    <title>
        Higher or Lower
    </title>
</head>

<body onload="hide(); updatedTotalScore();">
	<div class="page">
		<h1 align="center">
		  Higher or Lower
		</h1>
		<div id="1" align="center">
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
				<div>
					Your total score: 
					<input type="text" value="" size="3" id="finalScore">
				</div>
				<br>	
				<br>
				<a href="gamemenu.html">
					<img src="images/HomeButton.jpg" alt="Home" style="width:50px;height:50px;border:0">
				</a>
			</div>
			
		</div>
	</div>
</body>

</html>