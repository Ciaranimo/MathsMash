<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: login.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to login.php"); 
    } 
     
    // Everything below this point in the file is secured by the login system 
     
    // We can display the user's username to them by reading it from the session array.  Remember that because 
    // a username is user submitted content we must use htmlentities on it before displaying it to the user. 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Maths Mash</title>
</head>

<body>
    Hello
    <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>,
    secret content!<br>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href=
    "http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel=
    "stylesheet"><script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <script src=
"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> <script src="jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="style.css" rel="stylesheet" type="text/css">

    <div class="page">
        <div>
            <a href="snap.html"><img alt="SNAP" class="gameicons" src=
            "images/Snap.png"></a>
        </div>

        <div>
            <a href="sequence.html"><img alt="SEQUENCE" class="gameicons" src=
            "images/Sequence.png"></a>
        </div>

        <div>
            <a href="operator.html"><img alt="OPERATOR" class="gameicons" src=
            "images/Operators.png"></a>
        </div>

        <div>
            <a href="higherLower.html"><img alt="HIGHER OR LOWER" class=
            "gameicons" src="images/HigherLower.png"></a>
        </div><br>
        <a href="mainmenu.html"><img alt="HIGHER OR LOWER" src=
        "images/HomeButton.jpg" style=
        "width:50px;height:50px;border:0"></a><br>
    </div>
</body>
</html>