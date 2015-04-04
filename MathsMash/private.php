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
Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>, secret content!<br /> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="jquery-2.1.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>
      Maths Mash
    </title>
  </head>
  <body>

    <div class="page">
	
		<div>
			<a href="snap.html">
				<img class="gameicons" src="images/Snap.png" alt="SNAP" >
			</a>
		</div>
		
		<div>
			<a href="sequence.html">
				<img class="gameicons" src="images/Sequence.png" alt="SEQUENCE">
			</a>
		</div>
		
		<div>
			<a href="operator.html">
				<img class="gameicons" src="images/Operators.png" alt="OPERATOR" >
			</a>
		</div>
		
		<div>
			<a href="higherLower.html">
				<img class="gameicons" src="images/HigherLower.png" alt="HIGHER OR LOWER">
			</a>
		</div>
		
		<br>
		
	  <a href="mainmenu.html">
          <img src="images/HomeButton.jpg" alt="HIGHER OR LOWER" style="width:50px;height:50px;border:0">
        </a>
      <br>
    </div>
  </body>
</html>