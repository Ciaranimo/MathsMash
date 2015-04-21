<?php 
/*
* higherlower.php *
* Rev 1 *
* 18/04/2015 *
*
* @author Eoin Sutton, Conor Prunty, David Byrne, Ciaran Byrne, Kevin Clarke *
*/ 
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
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href=
    "http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel=
    "stylesheet">
    <script type="text/javascript">
var actualUser = <?php echo json_encode(htmlentities($_SESSION['user']['username'])); ?>;
    </script>
    <script type="text/javascript">
var myscore = <?php echo $row["score"];?>;
    var levelNew = <?php echo $row["level"];?>;
    </script>
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="js/higherLowerJS.js" type="text/javascript"></script><!--<script> alert("username = " + actualUser);</script>-->

    <script src="js/commonJS.js" type="text/javascript"></script>
    <script src="js/profile.js" type="text/javascript"></script>

    <title>Higher or Lower</title>
    <style>
#firstnum, #secondnum{
    font-size:40px;
    text-align:center;
    }

    </style>
</head>

<body onload="hide(),setIcon()">
    <div class="page">
        <header>
            <div id="icon"></div>

            <p id="lvlnum">Level: <?php echo $row["level"];?></p><a href=
            "logout.php" id="logout"><img src="images/logout_icon.png" style=
            "width:50px;height:50px;border:0"></a>
        </header>

        <div id="1" style="text-align: center">
            <input id="firstnum" size="3" type="text" value="?"> <h3>higher /
            lower </h3><input id="secondnum" size="3" type="text" value=
            "?"><br>
            <br>
            <button id="but1" onclick="higher()">Higher</button> <button id=
            "but2" onclick="lower()">Lower</button>
			
            <div id="time"></div><button id="butBegin" onclick=
            "begin()">Begin</button><br>

            <div id="liveScoreUpdate">
                <h2>Game Score:</h2><input id="currentScore" size="3" type=
                "text" value="">
                <br>
                <a href="mainmenu.php"><img src="images/home_button.png" style=
                "width:50px;height:50px;border:0"></a>
				<img onclick="back()" src="images/backButton.png" style= 
			"width:50px;height:50px;border:0"></img>
            </div>
        </div>
    </div>
</body>
</html>