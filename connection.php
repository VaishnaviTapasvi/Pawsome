<?php      
    $host = "localhost";                  // usually localhost  
    $user = "your_username";            // replace with your MySQL username 
    $password = "your_password";            // replace with your MySQL password
    $db_name = "user";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 