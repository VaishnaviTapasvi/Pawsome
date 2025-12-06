<?php      
    include('connection.php');  
    $myusername = $_POST['myusername'];  
    $mypass = $_POST['mypass'];  
      
        //to prevent from mysqli injection  
        $myusername = stripcslashes($myusername);  
        $mypass = stripcslashes($mypass);  
        $myusername = mysqli_real_escape_string($con, $myusername);  
        $mypass = mysqli_real_escape_string($con, $mypass);  
      
        $sql = "select * from admin where myusername = '$myusername' and mypass = '$mypass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1> <script>window.setTimeout(function() {
                window.location.href = 'admin.php';
            }, 2000)</script>";  
        } 
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
              
?>