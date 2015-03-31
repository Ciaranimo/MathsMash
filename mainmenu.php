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

<div id="topMenu"> Welcome <b><?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></b>.<br />
Your Score: <?php echo $row["score"];?><br/>
Level: <?php echo $row["level"];?><br/>
Points until next level: <br/>
__________________<br/>
<a href="logout.php"><b>Logout</a>--><br>
<a href="edit_account.php">Edit your account</b></a>-->
</div>
<!DOCTYPE html>
<html>
    <head>
     <link rel="stylesheet" type="text/css" href="style.css"/> 
     <script type="text/javascript">var myScore = <?php echo $row["score"];?>;</script>  
    </head>
    <body>
    
    <a href="gamemenu.php" class="buttonkev"> Game Menu</a>
    <a href="leaderboard.php" class="buttonkev"> Leaderboard</a>  
    <a href="profile.php" class="buttonkev"> Profile</a>
    
    
    
    </body>





</html>