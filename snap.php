<?php 

    // execute common code 
    require("common.php"); 
     
    // checked if logged in
    if(empty($_SESSION['user'])) 
    { 
        //if not logged in, redirect 
        header("Location: index.php"); 

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
    <script src=
    "http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="js/snapJS.js" type="text/javascript"></script>
    <script src="js/commonJS.js" type="text/javascript"></script>
    <script src="js/profile.js" type="text/javascript"></script>

    <title>Snap</title>
    <style>
     #leftBox{
             margin-left: auto;
             margin-right: auto;
             margin-top: 5%;
           background: cyan;
           width: 20%;
           height: 80px;
           padding-top: 30px;
             font-size: 30px;
            font-weight:bolder;
        }
        
        #rightBox{
            margin-left: auto;
             margin-right: auto;
           background: purple;
           width: 20%;
           min-height: 80px;
           padding-bottom: 30px;
             font-size: 30px;
            font-weight:bolder;
            color: cyan;
        }

    </style>
</head>

<body onload="hide(),setIcon()">
    <div class="page">
        <div class="page">
            <header>
                <div id="icon"></div>

                <p id="lvlnum">Level: <?php echo $row["level"];?></p><a href=
                "logout.php" id="logout"><img src="images/logout_icon.png"
                style="width:50px;height:50px;border:0"></a>
            </header>

            <div class="content">
                <div id="leftBox"></div>

                <div id="rightBox"></div><button id="butBegin" onclick=
                "begin()">Begin</button> <button id="snap" onclick=
                "snapFunction()">SNAP</button>

                <div id="time"></div>

                <div id="liveScoreUpdate">
                    <h2>Current Score:</h2><input id="currentScore" size="3"
                    type="text" value=""><br>
                    <br>
                    <br>
                    <a href="gamemenu.php"><img src="images/home_button.png"
                    style="width:50px;height:50px;border:0"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>