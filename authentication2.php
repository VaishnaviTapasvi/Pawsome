<?php
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['submit'])) {
		$conn = mysqli_connect(
    'localhost',
    'your_username',       // replace with your MySQL username
    'your_password',       // replace with your MySQL password
    'your_database_name'   // replace with your database name
) or die("Connection failed: " . mysqli_connect_error()); 
		if (isSet($_POST['vname']) && isSet($_POST['pname']) && isSet($_POST['paddress']) && isSet($_POST['breed']) && isSet($_POST['age']) && isSet($_POST['gender']) && isSet($_POST['colour'])  && isSet($_POST['sprice'])){
		// if(isSet($_POST['Submit'])){
			$vname = $_POST['vname'];
			$pname = $_POST['pname'];
            $paddress = $_POST['paddress'];
            $breed = $_POST['breed'];
			$age = $_POST['age'];
            $gender = $_POST['gender'];
            $colour = $_POST['colour'];
            $sprice = $_POST['sprice'];
            $agree   = isset($_POST['agree']) ? 1 : 0;
 
			$sql = "INSERT INTO `undertaking` (`vname`,`pname`,`paddress`,`breed`,`age`,`gender`,`colour`,`sprice`,`agree`) VALUES ('$vname', '$pname', '$paddress', '$breed','$age', '$gender', '$colour', '$sprice',  '$agree')";
 
			$query = mysqli_query($conn,$sql);
			if ($query) {
				echo "<h1><center>Data Successfully Saved!</center></h1><script>window.setTimeout(function() {
					window.location.href = 'Checkout.php';
				}, 2000)</script>";
			} else {
				echo"<h1>An error occured while save the data.</h1>".$sql;
			}
	}
        mysqli_close($conn);
		}
	
?>