<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['submit'])) {
		$conn = mysqli_connect(
    'localhost',
    'your_username',       // replace with your MySQL username
    'your_password',       // replace with your MySQL password
    'your_database_name'   // replace with your database name
) or die("Connection failed: " . mysqli_connect_error());
		if (isSet($_POST['fname']) && isSet($_POST['email']) && isSet($_POST['address']) && isSet($_POST['city']) && isSet($_POST['state']) && isSet($_POST['zip']) && isSet($_POST['cname']) && isSet($_POST['ccnum']) && isSet($_POST['expmonth']) && isSet($_POST['expyear']) && isSet($_POST['cvv'])) {
			$fname = $_POST['fname'];
			$email = $_POST['email'];
			$address = $_POST['address'];
            $city = $_POST['city'];
			$state = $_POST['state'];
			$zip = $_POST['zip'];
            $cname = $_POST['cname'];
			$ccnum = $_POST['ccnum'];
			$expmonth = $_POST['expmonth'];
            $expyear = $_POST['expyear'];
			$cvv = $_POST['cvv'];
			
 
			$sql = "INSERT INTO `checkout` (`fname`,`email`,`address`,`city`,`state`,`zip`,`cname`,`ccnum`,`expmonth`,`expyear`,`cvv`) VALUES ('$fname', '$email', '$address','$city','$state','$zip','$cname','$ccnum','$expmonth','$expyear','$cvv')";
 
			$query = mysqli_query($conn,$sql);
			if ($query) {
				echo "<h1><center>Data Successfully Saved!</center></h1><script>window.setTimeout(function() {
					window.location.href = 'bill.php';
				}, 2000)</script>";
				
			} else {
				echo "<h1>An error occured while save the data.</h1>".$sql;
			}
			
		}
        mysqli_close($conn);
	}
?>