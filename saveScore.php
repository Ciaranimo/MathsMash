<?php
/*
* savescore.php *
* Rev 1 *
* 18/04/2015 *
*
* @reference (PHP) Dr. Arghir-Nicolae Moldovan *
*/  
// PHP code used by the application to save the data
// Author: Dr. Arghir-Nicolae Moldovan

	// Setup the database connection
	//$conx = mysqli_connect("fdb13.biz.nf","1819848_ms","mathsmash1","1819848_ms");
	$conx = mysqli_connect("localhost","root","root","MathsServer");

	// Check connection
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	// Get data posted with Ajax
	$playerName 			= $_POST["playerName"];
	$score	 				= $_POST["score"];
	$level					= $_POST["level"];

	// Save data to database
	$query = " UPDATE users SET score = score + '$score', level = '$level' WHERE username = '$playerName' ";
	$saveData = mysqli_query($conx, $query);
	
	//set level
	

	if($saveData){
		echo "Data was saved successfully!";
	}
	else{
		echo "Error saving the data!";
	}

	mysqli_close($conx)
?>