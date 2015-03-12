<?php 

    // Get DB link
    require("common.php"); 
     
    // this variable will be used to re-display the username if incorrect password entered 
    $submitted_username = ''; 
     
    // check if login submitted
    if(!empty($_POST)) 
    { 
        // retrieve user info query
        $query = " 
            SELECT 
                id, 
                username, 
                password, 
                salt, 
                email 
            FROM users 
            WHERE 
                username = :username 
        "; 
         
        // parameter
        $query_params = array( 
            ':username' => $_POST['username'] 
        ); 
         
        try 
        { 
            // run query
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
             
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        // This variable tells us whether the user has successfully logged in or not. 
        // We initialize it to false, assuming they have not. 
        // If we determine that they have entered the right details, then we switch it to true. 
        $login_ok = false; 
         
        // Retrieve the user data from the database.  If $row is false, then the username 
        // they entered is not registered. 
        $row = $stmt->fetch(); 
        if($row) 
        { 
            // Using the password submitted by the user and the salt stored in the database, 
            // we now check to see whether the passwords match by hashing the submitted password 
            // and comparing it to the hashed version already stored in the database. 
            $check_password = hash('sha256', $_POST['password'] . $row['salt']); 
            for($round = 0; $round < 65536; $round++) 
            { 
                $check_password = hash('sha256', $check_password . $row['salt']); 
            } 
             
            if($check_password === $row['password']) 
            { 
                // If they do, then we flip this to true 
                $login_ok = true; 
            } 
        } 
        
        if($login_ok) 
        { 
            // Here I am preparing to store the $row array into the $_SESSION by 
            // removing the salt and password values from it.  Although $_SESSION is
            // stored on the server-side, there is no reason to store sensitive values 
            // in it unless you have to.  Thus, it is best practice to remove these 
            // sensitive values first. 
            unset($row['salt']); 
            unset($row['password']); 
             
            // This stores the user's data into the session at the index 'user'. 
            $_SESSION['user'] = $row; 
             
            // Rediret to main menu
            header("Location: mainmenu.php"); 
            die("Redirecting to: mainmenu.php"); 
        } 
        else 
        { 
            
            print("Login Failed."); 
             
            // Show user their password again. The use of htmlentities prevents XSS attacks. 
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 
        } 
    } 
     
?> 
<h1>Login</h1> 
<form action="login.php" method="post"> 
    Username:<br /> 
    <input type="text" name="username" value="<?php echo $submitted_username; ?>" />
    <br /><br /> 
    Password:<br /> 
    <input type="password" name="password" value="" /> 
    <br /><br /> 
    <input type="submit" value="Login" /> 
</form> 
<a href="register.php">Register</a>


