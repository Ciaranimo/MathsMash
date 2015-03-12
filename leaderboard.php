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

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="jquery-2.1.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js/leaderboard.js"></script>
    <!--<script type="text/javascript" src="js/commonJS.js"></script>-->
        <title>Leaderboard</title>
		<style>
			ldrbrd{
			
			}
			table, th, td{
				padding: 5px;
				border: 1px solid black;
			}
			th{
				text-align: center;
			
			}
		</style>
    </head>
    <body>
			<?php
				$hostdb = 'localhost';
				$namedb = 'root';
				$userdb = 'root';
				$passdb = 'MathsServer';

				try {
				  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
				  $conn->exec("SET CHARACTER SET utf8");   

				  $sql = "SELECT 'username', 'score' FROM 'MathsServer' ";
				  $result = $conn->query($sql);

				  if($result !== false) {
					$html_table = '<table border="1" cellspacing="0" cellpadding="2"><tr><th>Username</th><th>Score</th></tr>';

					foreach($result as $row) {
					  $html_table .= '<tr><td>' .$row['username']. '</td><td>' .$row['score']. '</td></tr>';
					}
				  }

				  $conn = null;   

				  $html_table .= '</table>'; 

				  echo $html_table;  
				}
				catch(PDOException $e) {
				  echo $e->getMessage();
				}
			?>  
    </body>
</html>