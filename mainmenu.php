<?php
/*
* mainmenu.php *
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

            <p id="lvlnum" style="padding-top:11px; !important">Level: <?php echo $row["level"];?></p><a href=
            "logout.php" id="logout"><img src="images/logout_icon.png" style=
            "width:50px;height:50px;border:0"></a>
        </header>

        <div class="content">
            <a class="buttonkev" href="gamemenu.php">Game Menu</a> <a class=
            "buttonkev" href="leaderboard.php">Leaderboard</a> <a class=
            "buttonkev" href="profile.php">Profile</a> <a class=
			"buttonkev" href="HowTo.php">How To</a>
        </div>
    </div>
</body>
</html>