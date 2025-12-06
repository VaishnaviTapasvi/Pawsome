<html>  
<head>    
<style>
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
.container{  
 padding: 20px;
  margin:5% auto 10% auto;
  width: 40%;
  background-color:lightgray;
  font-family: 'Arial','Calibri',sans-serif;  
}  
label, input {
  display: block;
  font-size: x-large;
  margin-left: 550px;
  
}
input {
  width: 30%;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  /* margin: 8px 0; */
  display: inline-block;
  padding: 12px 20px;
  margin-left: 550px;
}
.button{  
width: 10%;
  padding: 5px 15px;
  border-radius: 10px;
  border: 10px solid transparent;
  background-color:black;
  font-size: large;
  color: white;
  cursor: pointer;
  display: inline-block;
  outline-style: none;
  outline-width: 0px;
  overflow-wrap: break-word;
  position: relative;
  text-align: center;
  margin-left: 680px;  
}
.button:hover{
    opacity:0.5;
} 
body
{
  background-color:rgb(7, 137, 124);
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
    <div id = "container">  
          
        <form name="f1" action = "admin_authentication.php" onsubmit = "return validation()" method = "POST">  
            <center><h1 style="font-size: 50px;">Login</h1></center>
            
            <p>  
                <label> UserName: </label>
                <input type = "text" placeholder="Enter Username" id ="myusername" name  = "myusername" required>  
            </p>  
            <p>  
                <label> Password:(Enter a 6-digit number) </label>  
                <input type = "password" maxlength="6" placeholder="Enter Password" id ="mypass" name  = "mypass" />  
            </p>  
            
            
            <p>     
                <button type = "submit" class ="button" >Login</button> 
            </p>  
        </form>  
    </div>  
       
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                } 
                                          
            }  
        </script>  
</body>     
</html>