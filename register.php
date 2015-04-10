<?php 

    // get connection to DB
    require("common.php"); 
     
    //check if form has been submitted, if not form is displayed
    if(!empty($_POST)) 
    { 
        // if username is empty, tell user to submit proper username
        if(empty($_POST['username'])) 
        { 
            //error handling 
            die("Please enter a username."); 
        } 
         
        // make sure user enters not-empty password
        if(empty($_POST['password'])) 
        { 
            die("Please enter a password."); 
        } 
         
        // check for valid email address
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { 
            die("Invalid E-Mail Address"); 
        } 
         
        // SQL query to check if username already taken 
        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                username = :username 
        "; 
         
        // this is the token for the username - this is used to 
        // prevent sql injection attacks.
        $query_params = array( 
            ':username' => $_POST['username'] 
        ); 
         
        try 
        { 
            // query the database
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        {  
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        // fetch returns an array representing the next row or false for no rows
        $row = $stmt->fetch(); 
         
        // If a row is returned, then the email is in use
        if($row) 
        { 
            die("This username is already in use"); 
        } 
         
        // check same for email
        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                email = :email 
        "; 
         
        $query_params = array( 
            ':email' => $_POST['email'] 
        ); 
         
        try 
        { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        $row = $stmt->fetch(); 
         
        if($row) 
        { 
            die("This email address is already registered"); 
        } 
         
        // Insert details into DB 
        $query = " 
            INSERT INTO users ( 
                username, 
                password, 
                salt, 
                email 
            ) VALUES ( 
                :username, 
                :password, 
                :salt, 
                :email 
            ) 
        "; 
         
        // generate salt to help with hashing password
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
         
        // This hashes the password with the salt for security
        $password = hash('sha256', $_POST['password'] . $salt); 
         
        // Next we hash the hash value 65536 more times.  The purpose of this is to 
        // protect against brute force attacks.  Now an attacker must compute the hash 65537 
        // times for each guess they make against a password, whereas if the password 
        // were hashed only once the attacker would have been able to make 65537 different  
        // guesses in the same amount of time instead of only one. 
        for($round = 0; $round < 65536; $round++) 
        { 
            $password = hash('sha256', $password . $salt); 
        } 
         
        // Here we prepare our tokens for insertion into the SQL query.  We do not 
        // store the original password; only the hashed version of it. 
        $query_params = array( 
            ':username' => $_POST['username'], 
            ':password' => $password, 
            ':salt' => $salt, 
            ':email' => $_POST['email'] 
        ); 
         
        try 
        { 
            // Execute the query to create the user 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        {  
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        // redirect user to login page
        header("Location: index.php"); 
         
        // redirect user 
        die("Redirecting to index.php"); 
    } 
     
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
    
        <link rel="stylesheet" type="text/css" href="style.css" />
        
        <title>Register Account</title>
    </head>
    
    <body onload="setIcon()">
        <div class="page">
            <div class="content">
                <h1>Register</h1> 
                <form action="register.php" method="post"> 
                    <p>Username:</p>
                    <input type="text" name="username" value="" /> 
                    <p>E-Mail:</p> 
                    <input type="text" name="email" value="" /> 
                    
                    <p>Password:</p>
                    <input type="password" name="password" value="" /> 
                    <br /> 
                    <input type="submit" class="button" value="Register" /> 
                </form>
            </div>
            <footer>
                    
        
                <a href="mainmenu.php">
                  <img src="images/home_button.png" style="width:50px;height:50px;border:0">
                    </a>
        
            </footer>
        </div>
    </body>
</html>
