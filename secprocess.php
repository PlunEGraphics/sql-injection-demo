<?php
        //Start session
        //Include database connection details
            require 'dbase.php';
        
        $userfound=false;
        
        //Connect to mysql server
        
        //Function to sanitize values received from the form. Prevents SQL injection
                function clean($str) {
                $str = @trim($str);
                if(get_magic_quotes_gpc()) {
                        $str = stripslashes($str);
                }
                return mysql_real_escape_string($str);
        }       
		
		//Sanitize the POST values
        $userid = clean($_POST['user']);
        $pass = clean($_POST['pass']);
        
		
		//Check for duplicate 
                $qry2 = "SELECT * FROM usert WHERE id='$userid' and pass='$pass'";
                $result2 = mysql_query($qry2);
                if($result2) 
                {
                        if(mysql_num_rows($result2) > 0) {
                                $uid=$result2['uid'];
                                $userfound=true;
                        }
                }

		if($userfound)
			die("Sucess");
		else
			die("Fail");
        
?>