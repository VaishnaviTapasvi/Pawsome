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
    
    .topnav 
    {
      overflow: hidden;
      background-color:rgb(255, 219, 88);
      padding: 10px 5px;
      width:100%;
    }
    
    /* Style the links inside the navigation bar */
    .topnav a 
    {
      float:left;
      color:black;
      text-align:center;
      padding: 10px;
      text-decoration: none;
      font-size: 20px;
      font-family: 'Times New Roman', Times, serif; 
      line-height: 20px;
      border-radius: 10px;
      
      
     
    }
    
    /* Change the color of links on hover */
    .topnav a:hover 
    {
      background-color: white;
      color: black;
    }
    
    .btn{
      background-color: white;
      color: black;
      padding: 5px;
      font-size: 20px;
      border: none;
      text-decoration: none;
      font-family: 'Times New Roman', Times, serif;
      line-height: 20px;
      border-radius: 10px;
      width:100px;
    }
    .topnav a.split {
    float: right;
    }
    .dropbtn 
    {
      background-color: rgb(255, 219, 88);
      color: black;
      padding: 10px;
      font-size: 20px;
      border: none;
      text-decoration: none;
      font-family: 'Times New Roman', Times, serif;
      line-height: 20px;
      border-radius: 10px;
      
    }
    
    .dropdown 
    {
      float:left;
      overflow: hidden;
    }
    
    .dropdown-content 
    {
      display: none;
      position: absolute;
      background-color:rgb(255, 219, 88);
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a 
    {
      float:none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
      font-family: 'Times New Roman', Times, serif;
    }
    
    .dropdown-content a:hover 
    {
      background-color: white;
    }
    
    .dropdown:hover .dropdown-content 
    {
      display: block;
    }
    
    .dropdown:hover .dropbtn 
    {
    background-color: white;
    color:black;
    }
    body
{
  background-color:white;
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
      text-align:justify;
    }
footer
{
	position:static;
	bottom: 0;
  left:0;
  right:0;
}
.footer-distributed
{
  overflow: hidden;
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
  text-align: center;
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
  <img src="images/logo4.png" height="200px" width="400px" class="logo"><center></center>
</div>
  <div class="topnav">
    <a href="Homepage.php" class="dropbtn">Home</a>
    <div class="dropdown">
    <button class="dropbtn">Dog breeds</button>
    <div class="dropdown-content">
      <a href="Beagle.php">Beagle</a>
      <a href="Doberman.php">Doberman</a>
      <a href="German Shepherd.php">German Shepherd</a>
      <a href="Golden Retriever.php">Golden Retriever</a>
      <a href="Labarador Retriever.php">Labarador Retriever</a>
      <a href="Pomeranian.php">Pomeranian</a>
      <a href="Pug.php">Pug</a>
      <a href="Rottweiler.php">Rottweiler</a>
      <a href="Shih Tzu.php">Shih Tzu</a>
      <a href="Siberian Husky.php">Siberian Husky</a>
    </div>
    </div>
    <a href="Privacy Policy.php" class="dropbtn">Privacy Policy</a>
    <a href="Terms and Conditions.php" class="dropbtn">Terms and Conditions</a>
    <a href="Registerform.php" class="split">
      <button class="btn" >Register</button>
    </a>
    <a href="Loginform.php" class="split">
      <button class="btn" >Login</button>
    </a>
    <a href="adminlogin.php" class="split">
      <button class="btn" >Admin</button>
    </a>
  </div>
  <center><h1>Terms & Conditions</h1></center>
  <p>HOME » TERMS & CONDITIONS<p>
    <p>Welcome to our website. If you continue to browse and use this website you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern PAWSOME’ relationship with you in relation to this website. The term ‘PAWSOME ‘ or ‘us’ or ‘we’ refers to the owner of the website whose registered office is G-15, Galaxy Mall, SM Road, Nehrunagar, Ahmedabad – 380015. Our company registration number is +91 98091 13111. The term ‘you’ refers to the user or viewer of our website.</p>
    <p>THE USE OF THIS WEBSITE IS SUBJECT TO THE FOLLOWING TERMS OF USE:</p>
    <p>The content of the pages of this website is for your general information and use only. It is subject to change without notice.</p>
    <p>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products or information available through this website meets your specific requirements.</p>
    <p>All trademarks reproduced in this website which is not the property of, or licensed to, the operator is acknowledged on the website.</p>
    <p>Unauthorized use of this website may give rise to a claim for damages and/or be a criminal offense.</p>
    <p>From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</p>
    <p>You may not create a link to this website from another website or document without PAWSOME’ prior written consent.</p>
    <p>Your use of this website and any dispute arising out of such use of the website is subject to the laws of India or other regulatory authority.</p>
    <p>Free Shipping on selected locations.</p>
    <p>We are offering 2 type of payment methods:-</p>
    <p>Cash on delivery (Pay at the time of delivery).</p>
    <p>Debit card/credit card/net banking (Pay at the time of checkout)</p>
    <p>TERMS AND CONDITION FOR SHIPPING</p>
    <p>In case of any uncertain logistic reasons if you see the parcel damaged on the arrival for the delivery, we would request you to reject the order and do not accept the order.</p>
    <p>Our usual turn around time for any delivery is under 4 to 5 working days. Except very remote locations.</p>
    <p>TERMS AND CONDITION FOR OFFERS/COUPONS</p>
    <p>Information on how to participate forms part of these Terms & Conditions.</p>
    <p>By participating, claimants agree to be bound by these Terms & Conditions.
    Claimants must comply with these Terms & Conditions for a coupon to be valid.
    Each claimant is entitled to one coupon per accommodation establishment.
     Coupons are not transferable and are not redeemable for cash and cannot be combined with any other coupons or any other offer or discounts or promotions offered by PAWSOME.
    Each coupon is identified by a code and has different rewards. The claimant can decide the reward desired during the Order phase whilst being bound by the conditions linked to the redemption of the coupon.
    To redeem the coupon code, the claimant types the coupon code into the promotional box in the booking field of the PAWSOME’s websites and the relevant discount will be automatically deducted from the final price of the qualifying purchase. If the claimant fails to enter the coupon code at the time of purchase as specified, the purchase will not be eligible for the discount. Discounts may not be claimed after confirmation of a claimant’s purchase on the PAWSOME’s websites.
    Each coupon is valid for a limited time only and expires on the date specified in the email sent to the claimant by PAWSOME.
    Coupons cannot be replaced if emails are deleted by the claimant.
    A coupon cannot be applied to orders previously placed with PAWSOME.
    The coupon is not necessarily valid for all periods of the year. There may be periods, particularly during the seasons, for which the coupon may not be usable.
    PAWSOME shall not be liable for any loss, damage or injury suffered or sustained (even if caused by negligence) as a result of accepting and/or using the coupon, except for any liability which cannot be excluded by law.
    PAWSOME accepts no responsibility for late, lost or misdirected email or other communications. PAWSOME assumes no responsibility for any failure to receive a claim or for inaccurate information or for any loss, damage or injury as a result of technical or telecommunications problems, including security breaches. If such problems arise, then PAWSOME may modify, cancel, terminate or suspend the coupon</p>
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