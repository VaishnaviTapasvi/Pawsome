<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['submit'])) {
		$conn = mysqli_connect(
    'localhost',
    'your_username',       // replace with your MySQL username
    'your_password',       // replace with your MySQL password
    'your_database_name'   // replace with your database name
) or die("Connection failed: " . mysqli_connect_error());
		if (isSet($_POST['myusername']) && isSet($_POST['mypass'])) {
			$myusername = $_POST['myusername'];
			$mypass = $_POST['mypass'];
			
 
			
			$sql = "INSERT INTO `login` (`myusername`,`mypass`) VALUES ('$myusername', '$mypass')";
 
			$query = mysqli_query($conn,$sql);
			if ($query) {
				echo "<h1><center>Data Successfully Saved!</center></h1><script>window.setTimeout(function() {
					window.location.href = 'Homepage.php';
				}, 2000)</script>";
			} else {
				echo "<h1>An error occured while save the data.</h1>".$sql;
			}
		}
        mysqli_close($conn);
	}
?>