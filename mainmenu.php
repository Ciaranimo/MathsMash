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
<a href="logout.php">Logout</a>--><br>
<a href="edit_account.php">Edit your account</a>-->
<!DOCTYPE html>
<html>
    <head>
     <link rel="stylesheet" type="text/css" href="style.css"/>   
    </head>
    <body>
    
    <a href="gamemenu.php" class="buttonkev"> Game Menu</a>
    <a href="leaderboard.php" class="buttonkev"> Leaderboard</a>  
    <a href="profile.php" class="buttonkev"> Profile</a>
    
    
    
    </body>





</html>