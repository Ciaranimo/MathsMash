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
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <script type="text/javascript">
var actualUser = <?php echo json_encode(htmlentities($_SESSION['user']['username'])); ?>;
    </script>
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="js/operatorJS.js" type="text/javascript"></script>
    <script src="js/commonJS.js" type="text/javascript"></script>
    <script src="js/profile.js" type="text/javascript"></script>
    <script type="text/javascript">
var myscore = <?php echo $row["score"];?>;
    var levelNew = <?php echo $row["level"];?>;
    </script>

    <title>Operator</title>
</head>

<body onload="hide(),setIcon(),updatedTotalScore()">
    <div class="page">
        <header>
            <div id="icon"></div>

            <p id="lvlnum">Level: <?php echo $row["level"];?></p><a href=
            "logout.php" id="logout"><img src="images/logout_icon.png" style=
            "width:50px;height:50px;border:0"></a>
        </header>

        <div class="content">
            <div class="opdisplay">
                <div id="firstnum"></div>

                <div class="guess">
                    ?
                </div><!-- guess box-->

                <div id="secondnum"></div>

                <div id="equalsOP">
                    =
                </div><input id="ans" type="text" value="">
            </div>

            <div id="optest">
                <div class="op-buttons-top">
                    <button class="opbtn" onclick="add()">+</button>
                    <button class="opbtn" onclick="sub()">-</button>
                </div>

                <div class="op-buttons-btm">
                    <button class="opbtn" onclick="mul()">x</button>
                    <button class="opbtn" onclick="div()">÷</button>
                </div>
            </div>

            <div id="time"></div><br>
            <button id="butBegin" onclick="begin()">Begin</button>

            <div id="liveScoreUpdate" style="text-align: center">
                <h2>Current Score:</h2><input id="currentScore" size="3" type=
                "text" value=""><br>
                <br>
            </div>
        </div>

        <footer>
            <a href="gamemenu.php"><img src="images/home_button.png" style=
            "width:50px;height:50px;border:0"></a>
        </footer>
    </div>
</body>
</html>