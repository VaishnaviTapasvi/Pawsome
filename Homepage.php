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
    div.scroll-container {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
  padding: 10px;
}

div.scroll-container img {
  padding: 10px;
}
    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides1 {display:none;}
    .mySlides2 {display:none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container 
    {
    width: 1000px;
    position: relative;
    margin: auto;
    height: 400px;
    }

    /* The dots/bullets/indicators */
    .dot 
    {
    height: 15px;
    width: 15px;
    margin: 5px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }

    .active 
    {
    background-color: #717171;
    }

    /* Fading animation */
    .fade 
    {
    animation-name: fade;
    animation-duration: 5s;
    }

    @keyframes fade 
    {
    from {opacity: .4} 
    to {opacity: 1}
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
    <a href="LoginForm.php" class="split">
      <button class="btn" >Login</button>
    </a>
    <a href="adminlogin.php" class="split">
      <button class="btn" >Admin</button>
    </a>
  </div>

  <div class="scroll-container">
    <img src="images/Slide1.png" alt="" width="600" height="400">
    <img src="images/Slide3.png" alt="" width="600" height="400">
    <img src="images/Slide4.png" alt="" width="600" height="400">
    <img src="images/Slide5.png" alt="" width="600" height="400">
    <img src="images/Slide6.png" alt="" width="600" height="400">
    <img src="images/Slide7.png" alt="" width="600" height="400">
  </div>
<br>
<center><h1>We Help You Buy Puppies - Puppies for sale in pune</h1></center>
<p>Happiness comes in four legs, has a furry body and a joyfully wagging tail!</p>
  <p>Dogs are one of the most preferred animals when it comes to having pets. According to statistics, the population of pet dogs in India was recorded as high as 19.5 million in 2018! Moreover, this population is expected to increase to a whopping 31 million (and more) by the end of 2023!</p>
  <p>This clearly indicates that India loves having furry friends as pets. Who wouldn’t want an adorable friend that is a constant companion, acts as a personal therapist, protects you from danger and is loyal without any conditions?</p>
  <p>If you are a fellow dog lover thinking about bringing the most beautiful puppy home, this is just the place for you!</p>
  <p>PAWSOME is a platform for dog lovers where you can find a variety of puppies for sale in Pune.</p> 
  <p>On our website, you will find all major dog breeds and variants of dog puppies for sale. Forget making different Google searches for every different dog breed as we provide you with a centralized platform with all possible options!</p>
  <p>All you need to do is get in touch with us and start preparing a grand welcome for your new guest!</p>
  
<br>
  <div class="slideshow-container">
    <div class="mySlides1 fade">
      <img src="images/Pic2.jpeg" style="width:100%">
    </div>
    <div class="mySlides1 fade">
      <img src="images/Pic3.png" style="width:100%">
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span>
  </div>
    <br>
    <br>
    <div class="scroll-container">
      <img src="images/r1.png" alt="" width="600" height="400">
      <img src="images/r2.png" alt="" width="600" height="400">
      <img src="images/r3.png" alt="" width="600" height="400">
      <img src="images/r4.png" alt="" width="600" height="400"> 
    </div>
    <br>
  
      
   
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
<script>
  let slideIndex1 = 0;
  showSlides();
  function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides1");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex1++;
  if (slideIndex1 > slides.length) {slideIndex1 = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex1-1].style.display = "block";  
  dots[slideIndex1-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>
</body> 
</html>