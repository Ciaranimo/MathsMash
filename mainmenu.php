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
<!--<div id="topMenu"> Welcome <b><?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></b>.<br />
Your Score: <?php echo $row["score"];?><br/>
Level: <?php echo $row["level"];?><br/>
Points until next level: <br/>
__________________<br/>-->
<!DOCTYPE html>
<html>
<head>

    <script type="text/javascript">
var myscore = <?php echo $row["score"];?>;
    var levelNew = <?php echo $row["level"];?>;
    </script>
    <script src="js/profile.js" type="text/javascript"></script>
    <link href="style.css" rel="stylesheet" type="text/css">

    <title></title>
</head>

<body onload="setIcon()">
    <div class="page">
        <header>
            <div id="icon"></div>

            <p id="lvlnum">Level: <?php echo $row["level"];?></p><a href=
            "logout.php" id="logout"><img src="images/logout_icon.png" style=
            "width:50px;height:50px;border:0"></a>
        </header>

        <div class="content">
            <a class="buttonkev" href="gamemenu.php">Game Menu</a> <a class=
            "buttonkev" href="leaderboard.php">Leaderboard</a> <a class=
            "buttonkev" href="profile.php">Profile</a> <a class=
			"buttonkev" href="HowTo.php">How To</a>
        </div>
		<br>
			<img onclick="back()" src="images/backButton.png" style= 
			"width:50px;height:50px;border:0"></img>
		<br>
    </div>
</body>
</html>