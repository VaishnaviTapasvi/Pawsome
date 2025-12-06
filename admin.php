<?php
$server = "localhost";                  // usually localhost
$username = "your_username";            // replace with your MySQL username
$password = "your_password";            // replace with your MySQL password
$database = "user";
$connection= mysqli_connect("$server","$username","$password");
$selectdb= mysqli_select_db($connection,$database);
if(!$selectdb)
{
    echo("connection terminated");
}
?>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<head>
    <style type=text/css> 
    
    .header 
    {
      overflow: hidden;
      background-color:rgb(7, 137, 124);
      padding: 15px 5px;
      color:white;
      float:none;
      font-size: 75;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      text-align:center;
      width:100%; 
    }
    
    
    .header a.logo 
    {
      font-size: 100px;
      font-weight: bold;
      text-align: left;
    }
    body
    {
    background-color:white;
    display:block;
    }
    h1
    {
      color:rgb(7, 137, 124);
      text-align: center;
      font-size: 40px;
      font-family:cursive;
    }
    p
    {
      color:black;
      font-size: 20px;
      font-family:cursive;
      margin-left: 180px;
      margin-right: 180px;
      text-align: center;
    }
    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) 
    {
    .text {font-size: 11px}
    }

    footer
    {
      bottom: 0;
      left:0;
      width:100%;
    
      
    }
    .footer-distributed
    {
      overflow: auto;
      background-color: rgb(7, 137, 124);
      box-sizing: border-box;
      width: 100%;
      height:30%;
      text-align: center;
      font: bold 16px sans-serif;
      padding: 50px 50px 50px 50px;
      margin-top: 80px;
      display:flex;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-right
    {
      display: inline-block;
      vertical-align: top;
    }

    .footer-distributed .footer-left
    {
      width: 50%;
    }

    .footer-distributed h3
    {
      color: white;
      font: normal 36px, cursive;
      margin: 0;
    }

    .footer-left p
    {
      margin:2px;
      padding: 1px;
      color:white;
    }

    .footer-distributed .footer-right
    {
      width: 50%;
    }

    .fa
    {
      font-size: 30px;
      width: 30px;
      text-decoration: none;
    }
    .fa-twitter
    {
      color: rgb(28, 150, 232);
    }
    .fa-whatsapp
    {
      color: rgb(69, 198, 85);
    }
    .fa-instagram
    {
      color: rgb(246, 1, 140);
    }
    .fa-linkedin
    {
      color: rgb(28, 150, 232);
    }
    .fa-pinterest-p
    {
      color: rgb(230, 0,35);
    }
    .fa-facebook-official
    {
      color: rgb(66, 103, 178);
    }
    .fa-phone
    {
      color:black;
    }
    .fa-envelope
    {
      color:black;
    }
    .column 
    {
      float: left;
      width: 20%;
      padding: 0 30px;
    }
    .row 
    {
      margin-left: 45px;
      margin-right: 2px;
    }
    .row:after 
    {
      content: "";
      display: table;
      clear: both;
    }
    .button {
  background-color: rgb(255, 219, 88);
  border: 1px solid;
  color: rgb(7, 137, 124);
  padding: 10px 20px;
  text-align: center;
  font-weight: bold;
  font-size: large;
  display: inline-block;
  margin:4px 0px;
  cursor: pointer;
  border-radius: 16px;
}
table{
    font-family:arial;
    border-collapse:collapse;
    width:50%;
    margin-left: 25%;
}
th{
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-weight: bold;
  font-size:larger;
  background-color:rgb(7, 137, 124);
  color:rgb(255, 219, 88);
}
td{
  background-color:rgb(255, 219, 88);
  color:rgb(7, 137, 124);
}
td,th{
    border:1px solid;
    text-align:center;
    padding:10px;
    width:20%;
}

    @media only screen and (max-width:500px) 
    {
      /* For mobile phones: */
      .header, .topnav,.coupon, .body, .footer, .card, .column, .row 
      {
        width: 100%;
      }
    }
</style>
</head>
<body>
<div class="header">
  <img src="images/logo4.png" height="200px" width="400px" class="logo">
</div>
<h1>Orders Received</h1>
<table>
    <tr>
        <th> Vendor Name </th>
        <th> Purchaser Name </th>
        <th> Purchaser Address </th>
        <th> Breed </th>
        <th> Gender </th>
        <th> Colour </th>
        <th> Price </th>
    </tr>
<?php
    $query= mysqli_query($connection,"select * from undertaking");
    while($row= mysqli_fetch_array($query))
    {
        ?>
        <tr>
            <td><b><?php echo $row['vname']; ?></b> </td>
            <td> <b> <?php echo $row['pname']; ?></b> </td>
            <td> <b><?php echo $row['paddress']; ?></b> </td>
            <td> <b> <?php echo $row['breed']; ?></b> </td>
            <td><b> <?php echo $row['gender']; ?></b> </td>
            <td><b>  <?php echo $row['colour']; ?> </b></td>
            <td> <b><?php echo $row['sprice']; ?> </b></td>            
        </tr>  
<?php    }
?>
</table>
<h1>Upload Pets</h1>
<a href="uploadbeagle.php">
  <button class="button">Beagle</button>
</a>
<a href="uploaddoberman.php">
  <button class="button">Doberman</button>
</a>
<a href="uploadgermanshepherd.php">
  <button class="button">German Shepherd</button>
</a>
<a href="uploadgoldenretriever.php">
  <button class="button">Golden Retriever</button>
</a>
<a href="uploadlabradorretriever.php">
  <button class="button">Labarador Retriever</button>
</a>
<a href="uploadpomeranian.php">
  <button class="button">Pomeranian</button>
</a>
<a href="uploadpug.php">
  <button class="button">Pug</button>
</a>
<a href="uploadrottweiler.php">
  <button class="button">Rottweiler</button>
</a>
<a href="uploadshihtzu.php">
  <button class="button">Shih Tzu</button>
</a>
<a href="uploadsiberianhusky.php">
  <button class="button">Siberian Husky</button>
</a>


<p>&nbsp;</p>
<p>&nbsp;</p>
<h1>User Details</h1>
<table>
    <tr>
        <th> Username </th>
        <th> Password </th>
    </tr>
<?php
    $query= mysqli_query($connection,"select * from login");
    while($row= mysqli_fetch_array($query))
    {
        ?>
        <tr>
            <td><b><?php echo $row['myusername']; ?></b> </td>
            <td> <b> <?php echo $row['mypass']; ?></b> </td>
            
        </tr>  
<?php    }
?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<footer class="footer-distributed">
  <div class="footer-left">
  <h3>Contact Us</h3>
  <div>
    <i class="fa fa-phone"></i>
    <p>+91 9876543210</p>
  </div>
  <div>
    <i class="fa fa-envelope"></i>
    <p>pawsome@gmail.com</p>
  </div>
  </div>
  <div class="footer-right">
    <h3>Social Media</h3>
    <a class="fa fa-facebook-official"></a>
    <a class="fa fa-instagram"></a>
    <a class="fa fa-twitter"></a>
    <a class="fa fa-whatsapp"></a>
    <a class="fa fa-pinterest-p"></a>
    <a class="fa fa-linkedin"></a>
  </div>
  </footer>
</body> 
</html>