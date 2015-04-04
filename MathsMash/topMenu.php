<?
$username = htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8');
     //get score from DB for leaderboard
       $query = " 
            SELECT 
                score, level
            FROM users
            where username = '$username'
        "; 
         
        /*// parameter
        $query_params = array( 
            ':username' => $_SESSION['user']['username']
        );*/
         
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
        
        $row = $stmt->fetch(); 
?>