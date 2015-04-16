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
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href=
    "http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel=
    "stylesheet">
    <script type="text/javascript">
var actualUser = <?php echo json_encode(htmlentities($_SESSION['user']['username'])); ?>; 
    //get level into var
    var levelNew = <?php echo $row["level"];?>;
    </script>
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src=
    "http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="js/profile.js" type="text/javascript"></script><!--<script> alert("username = " + actualUser);</script>-->

    <script src="js/commonJS.js" type="text/javascript"></script>
</head>

<body onload="setIcon()">
    <header>
        <div id="icon"></div><a href="logout.php" id="logout"><img src=
        "images/logout_icon.png" style="width:50px;height:50px;border:0"></a>
    </header>

    <div style="text-align: center">
        <br>
        <!--set name based on session-->

        <div id="profileName">
            <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>
        </div><!--set level based on database-->

        <div id="profileLevel">
            Level: <?php echo $row["level"];?><br>
            Score: <?php echo $row["score"];?><br>
            <a href="edit_account.php" id="eaccount">Edit Account</a>
        </div>
    </div>

    <div style="text-align: center">
        <a href="mainmenu.php"><img src="images/home_button.png" style=
        "width:50px;height:50px;border:0"></a>
    </div>
</body>
</html>