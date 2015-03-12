<?php

    // connect to DB
    require("common.php");

    // Check whether user is logged in
    if(empty($_SESSION['user']))
    {
        // If they are not, redirect to the login page.
        header("Location: login.php");

        // this statement is needed
        die("Redirecting to login.php");
    }

?>
Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?> Logged in<br />
<a href="logout.php">Logout</a>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1' name='viewport'/>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Maths Mash</title>
    </head>
    <body>
        <div class="page">

            <header>
            <br/>
                <h1><img id="logoimg" src="images/logo.png" alt="logo"/></h1>
            </header>
            <div id="content">
                <h4>Login</h4>
                <input type="text" name="username">
                <h4>Password</h4>
                <input type="text" name="password">
                <p><a id="mash" href ="mainmenu.php"><button class="button" type="button">mash</button></a></p>
                <p id="remember"><input type="checkbox" name="remember" value="yes"  /> remember me?</p>
            </div>

            <footer>

            </footer>

        </div>
    </body>
</html>