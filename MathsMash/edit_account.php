<?php 

    // Get common DB connection
    require("common.php"); 
     
    // check if user logged in
    if(empty($_SESSION['user'])) 
    { 
        // if not go to login
        header("Location: login.php"); 
         
        // needed statement
        die("Redirecting to login.php"); 
    } 
     
    // check if edit form submitted
    if(!empty($_POST)) 
    { 
        // ensure valid email address 
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { 
            die("Invalid E-Mail Address"); 
        } 
         
        // check if email entered is not already in DB
        if($_POST['email'] != $_SESSION['user']['email']) 
        { 
            // Define SQL query 
            $query = " 
                SELECT 
                    1 
                FROM users 
                WHERE 
                    email = :email 
            "; 
             
            // Define our query parameter values 
            $query_params = array( 
                ':email' => $_POST['email'] 
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
             
            // Retrieve results
            $row = $stmt->fetch(); 
            if($row) 
            { 
                die("This E-Mail address is already in use"); 
            } 
        } 
         
        // If the user entered a new password, we need to hash it and generate a fresh salt 
        if(!empty($_POST['password'])) 
        { 
            $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));
            $password = hash('sha256', $_POST['password'] . $salt); 
            for($round = 0; $round < 65536; $round++) 
            { 
                $password = hash('sha256', $password . $salt); 
            } 
        } 
        else 
        { 
            // If the user did not enter a new password we will not update their old one. 
            $password = null; 
            $salt = null; 
        } 
         
        // Initial query parameter values 
        $query_params = array( 
            ':email' => $_POST['email'], 
            ':user_id' => $_SESSION['user']['id'], 
        ); 
         
        // If the user is changing their password, then we need parameter values 
        // for the new password hash and salt too. 
        if($password !== null) 
        { 
            $query_params[':password'] = $password; 
            $query_params[':salt'] = $salt; 
        } 
         
        // first half of query
        $query = " 
            UPDATE users 
            SET 
                email = :email 
        "; 
         
        // if user changing password, include the below
        if($password !== null) 
        { 
            $query .= " 
                , password = :password 
                , salt = :salt 
            "; 
        } 
         
        // finish query
        $query .= " 
            WHERE 
                id = :user_id 
        "; 
         
        try 
        { 
            // Run query 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
       
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        // update session info with new email
        $_SESSION['user']['email'] = $_POST['email']; 
         
        // redirect user to main menu
        header("Location: mainmenu.php"); 
         
        // must call die
        die("Redirecting to mainmenu.php"); 
    } 
     
?> 
<h1>Edit Account</h1> 
<form action="edit_account.php" method="post"> 
    Username:<br /> 
    <b><?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></b> 
    <br /><br /> 
    E-Mail Address:<br /> 
    <input type="text" name="email" value="<?php echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8'); ?>" /> 
    <br /><br /> 
    Password:<br /> 
    <input type="password" name="password" value="" /><br /> 
    <i>(leave blank if you do not want to change your password)</i> 
    <br /><br /> 
    <input type="submit" value="Update Account" /> 
</form>