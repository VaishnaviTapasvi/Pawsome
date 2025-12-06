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
  color:aliceblue;
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
  <center><h1>Privacy Policy</h1></center>
  <p>HOME » PRIVACY POLICY</p>
    <p>This Privacy and Cookie Policy (“Policy”) applies to visitors and customers (“users” or “you”) of ‘PAWSOME,’ a brand owned by PAWSOME SPALONS PVT LTD. It pertains to users who surf the website www.PAWSOMEstore.com (“Website”) and/or use the mobile application ‘PAWSOME’ (“App”). Collectively, the Website and App are referred to as the “Platform.”</p>
    
    <p>At PAWSOME, we prioritize the privacy of our users and are committed to safeguarding their personal information. This Policy aims to clarify our data protection practices and how they affect you. It also outlines the measures we take to protect your privacy and provide you with control over your communication preferences for our products and services.</p>
    
    <p>When we mention “PAWSOME SPALONS PVT LTD,” “PAWSOME,” “our,” “we,” or “us,” we are referring to all the products and services offered through our Platform. This Policy applies to all our services, features, software, and the Platform operated under the trade name www.PAWSOMEstore.com or PAWSOME, unless otherwise specified.</p>
    
    <p>This Policy explains the process of gathering information, our privacy practices, and the dissemination of information. PAWSOME SPALONS PVT LTD has developed this Policy to demonstrate our firm commitment to protecting your personal information and privacy.</p>
    
    <p>To the best of our ability, we have adopted the following practices to safeguard the confidentiality of your personal information:</p>
    
   <p>WHAT PERSONAL DATA WE COLLECT AND WHY WE COLLECT IT</p>
    <p>1. Introduction</p>
    <p>This Privacy Policy outlines our commitment to protecting the privacy of users who visit, register, purchase products, or subscribe to services on our Platform.</p>
    
    <p>2. Scope</p>
    <p> In this Privacy Policy, “personal information” refers to information relating to an identified or identifiable natural person. An identifiable person is someone who can be directly or indirectly identified, particularly by reference to an identifier such as a name, identification number, location data, online identifier, or factors specific to their identity. The use of information collected through our Platform is limited to providing the requested services, delivering products, and fulfilling the purposes outlined in Clause 4 of this Privacy Policy.</p>
    
    <p>Our Platform may contain links to other websites and mobile apps. The information practices and content of such other websites and apps are governed by their respective privacy statements. We recommend reviewing the privacy statements of these websites and apps to understand their information practices before using them.</p>
    
    <p>This Privacy Policy covers account information as defined in Section 3, as well as other information we collect during your registration or authentication process for our services. It also addresses security and privacy practices, including how we protect, collect, and use electronic data, text, messages, communications, or other materials you submit to and store within the Platform (“Service Data”).</p>
    
    <p>3. Information Collected by Us</p>
    <p>Our Platform collects the following information:</p>
    
    <p>i) Information you submit: When you place an order or avail our services, you provide personal details such as your name, contact number, email address, etc. For online payment methods, you may provide your debit or credit card number, UPI details, or other bank account information. Testimonials submitted by you are also considered information you submit.</p>
    
    <p>ii) Information not directly submitted by you: This information includes:</p>
    
    <p>User Activity: We collect information about your activity on our Platform, such as login timestamps, features used, searches, clicks, and visited pages.</p>
    
    <p>Device Information: We collect information about your device(s), including IP address, device ID and type, device specifications, app settings, error reports, browser type and version, operating system, and identifiers associated with cookies or other technologies that uniquely identify your device or browser.</p>
    
    <p>SMS Permission: We may request SMS permission to authenticate transactions via OTP sent by the Payment Gateway.</p>
    
    <p>4. Usage of Information Collected by Us</p>
    <p>We use the collected information in the following ways:</p>
    <p>To provide services and products, including registering you for our services, verifying your identity and authority to use our services, enabling your use of the Platform, and facilitating product purchases.</p>
    <p>To manage your account.</p>
    <p>To provide customer support and respond to your queries.</p>
    <p>For internal record-keeping purposes.</p>
    <p>To conduct research and analysis of your product and service usage, enabling us to offer better services.</p>
    <p>To periodically send promotional messages, emails, or information about our services, products, special offers, or PAWSOME that we believe may interest you.</p>
    <p>To communicate with you by email or phone regarding services, deliveries, or information you have requested.</p>
    <p>5. Sharing Your Information</p>
    <p>Unless explicitly stated on the Website or App or as described below, we do not sell, rent, share, trade, or disclose any of your personal information.</p>
    
    <p>With our service providers and partners: We may engage third-party service providers to develop, host, maintain, back up, store, process payments, analyze data, and provide other services on our behalf. If a service provider needs access to your information to perform services, they do so under our strict instructions, including confidentiality obligations.</p>
    
    <p>With law enforcement agencies: We will disclose your personally identifiable information when required by law or when we believe that disclosure is necessary to protect our rights, the interests of other users, and comply with a judicial proceeding, court order, or legal process served on our website.</p>
    
    <p>6. Accessing and Controlling Your Information</p>
    <p>We provide tools for managing your information. You have the right to access, rectify, and update the information you have provided by visiting our site or app. The following rights are available to you:</p>
    
    <p>Reviewing your information: You have the right to review and edit personal information on our Platform.</p>
    
    <p>Withdrawing consent and deleting your account: You have the right to withdraw your consent for processing your personal information. Please note that by withdrawing your consent, your profile will be deleted, and we will be unable to provide further services. To delete your account, please contact us at support@PAWSOMEstore.com. However, certain information may need to be retained for record-keeping purposes, to complete transactions, comply with legal obligations, and adhere to applicable laws.</p>
    
    <p>7. Security Measures</p>
    <p>We adhere to generally accepted industry standards to protect the personal information submitted to us. All information, including sensitive data, is restricted within our offices. Only employees who require the information to perform specific tasks are granted access. If you have any security-related questions, please contact us at the provided email address.</p>
    
    <p>While we implement safeguards to protect your information, it’s important to note that no security system is completely impenetrable. Due to the inherent nature of the internet, we cannot guarantee the absolute security of data during transmission, storage on our systems, or when under our care. When you enter sensitive information (such as a credit card number) during our registration or order process, the information is encrypted and protected using industry-standard encryption software.</p>
    
    <p>8. Retention of Information</p>
    <p>We retain your personal information as long as you use our service and as permitted or required by applicable law. We delete or anonymize your information upon deleting your account, unless retention is necessary for legal obligations, fraud prevention, protecting our Website and App’s integrity, resolving disputes, enforcing agreements, supporting business operations, or improving our services. We retain information for analytical purposes related to service usage, without specifically analyzing personal characteristics.</p>
    
    <p>9. Cookies and Tracking Technology</p>
    <p>We and our authorized partners may use cookies and other tracking technologies for various purposes. These technologies may provide us with personal information, information about your devices and networks used to access our Platform, and other data regarding your interactions.</p>
    
    <p>Third-party partners may display advertisements on our Website and App or manage our advertising on other sites. These partners may also use cookies to collect information about your activities on our Platform and other sites, enabling personalized advertisements based on your browsing activities and interests.</p>
    
    <p>Web beacons, tags, and scripts may be used on our Website, App, or in electronic communications to deliver cookies, track visits, understand usage and campaign effectiveness, and determine email opening and engagement. Reports based on these technologies’ use by our third-party service providers are generated on an individual and aggregated basis.</p>
    
    <p>You are free to decline our cookies if your browser allows it, but this may limit certain features on the Platform and may require more frequent password re-entry.</p>
    
    <p>10. Changes to the Privacy Policy</p>
    <p>We reserve the right to modify the Privacy Policy at any time by posting the revised policy on the Website and App. We may do so without prior notice. By continuing to use the Website and App, you indicate your acceptance of the revised Privacy Policy. Please check the Website and App regularly for any posted revisions and modifications, as they will include a listing of changes and their corresponding effective dates.</p>
    
    <p>11. Your Consent</p>
    <p>By using the Website and/or App and/or providing your information, you consent to the collection and use of the disclosed information in accordance with this Privacy Policy. This includes your consent to share your information as described herein</p>
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