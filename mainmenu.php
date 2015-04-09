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
     <script type="text/javascript">var myscore = <?php echo $row["score"];?>;
    var levelNew = <?php echo $row["level"];?>;</script>  
     <script type="text/javascript" src="js/profile.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/> 
    </head>
    <body onload="setIcon()">
    <div class="page">
    <header>
            <div id="icon"></div>
            <p id="lvlnum">Level: <?php echo $row["level"];?></p>
            <a id="logout" href="logout.php">
            <img src="images/logout_icon.png" style="width:50px;height:50px;border:0">
            </a>
        </header>
    <div class= "content">
    
    <a href="gamemenu.php" class="buttonkev"> Game Menu</a>
    <a href="leaderboard.php" class="buttonkev"> Leaderboard</a>  
    <a href="profile.php" class="buttonkev"> Profile</a>
    </div>
    
    </div>
    </body>





</html>