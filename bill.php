<?php
 require_once 'connprod1.php';
 $sql ="SELECT * FROM undertaking ORDER BY srno DESC LIMIT 1";
 $all_product=$conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
  function myFunction() {
   document.getElementById("agree").required=true;
   window.setTimeout(function() {
					window.location.href = 'Homepage.php';
				}, 5000);
  }
  </script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}
p{
      color:white;
      font-size: 20px;
      font-family:cursive;
      margin-left: 180px;
      margin-right: 180px;
      text-align: center;
    }


.container {
  border-radius: 5px;
  background-color: rgb(7, 137, 124);
  padding: 20px;
  margin-left: 200px;
  margin-right: 200px;
}
.button {
  background-color: rgb(7, 137, 124);
  border: 1px solid;
  color: white ;
  padding: 10px 20px;
  text-align: center;
  font-weight: bold;
  font-size: large;
  display: inline-block;
  margin-left: 45%;
  cursor: pointer;
  border-radius: 16px;
}
</style>
</head>
<body>
  
<center><h1 style="color:rgb(7, 137, 124);">Invoice</h1></center>

<hr>
<div class="container">

  <center><img src="images/logo4.png" height="150px" width="250px" class="logo"></center>
<hr>
<?php
                while($row=mysqli_fetch_assoc($all_product)){
            ?>
<p>Bill No. : <b><u><?php echo $row["srno"]; ?></u></b> <span style="margin-left:180px;">Date : <b><u><?php $currentDate=date("d/m/Y"); echo $currentDate;?></u></b></span></p>
<p>Customer Name : <span style="margin-left:5px;"><b><u><?php echo $row["pname"]; ?></u></b></span></p>
<p>Address : <span style="margin-left:5px;"><b><u><?php echo $row["paddress"]; ?></u></b></span></p>
<p>Dog Breed : <span style="margin-left:5px;"><b><u><?php echo $row["breed"]; ?></u></b></span></p>
<p>Dog Age : <span style="margin-left:5px;"><b><u><?php echo $row["age"]; ?></u></b></span></p>
<p>Dog Colour : <span style="margin-left:5px;"><b><u><?php echo $row["colour"]; ?></u></b></span></p>
<p>Gender : <span style="margin-left:5px;"><b><u><?php echo $row["gender"]; ?></u></b></span></p>
<p>Status : <span style="margin-left:5px;"><b><u>Ordered Successfully</u></b></span></p>
<hr>
<p>Total Amount Paid : <span style="margin-left:5px;"><b><u>Rs.<?php echo $row["sprice"]; ?></u></b></span></p>

<?php
                }
                
            ?> 


</div>
<br>
<br>
<a href="Homepage.php">
  <button class="button">Go to Homepage</button>
</a>
</body>
</html>
