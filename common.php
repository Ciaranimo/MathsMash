<?php
//common.php accesses the mySQL database
//variables
$username = "root";
$password = "root";
$host = "localhost";
$dbname = "MathsServer";

try{
    $db = new PDO("mysql:host={$host}; dbname={$dbname};charset=UTF8", $username, $password, $options);
} catch (PDOException $ex) {
    die("Failed to connect to the database: " . $ex->getMessage()); 
}
//configure PDO to throw exception if error encountered
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//return db rows using associative array - will have string indexes where string value
//represents the column name
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 

//initialise session which stores information about visitors. Info is stored on server side.
session_start(); 
?>
