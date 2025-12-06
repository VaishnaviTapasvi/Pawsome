<?php

 require_once 'connprod.php';

 $sql ="SELECT * FROM siberianhusky";
 $all_product=$conn->query($sql);

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
   
    .abc h1{
  position:relative;
  top: 100px;;
  bottom:200px;
  font-size: xx-large;
}
.abc p{
  
    position:relative;
    top:100px;
    left:400px;
    bottom:600px;
    width:50%;
    font-size: larger;
    font-family: cursive;
}
.abc table{
  position:relative;
    bottom:200px;
    top:100px;
    left:250px;
    width:70%;
    font-size: larger;
    font-family: cursive;
    border: 1px solid black;
    text-align:center;
}

.abc ul,li{
  position:relative;
    bottom:100px;
    top:50px;
    left:250px;
    font-size: large;
    font-family: cursive;
    text-align:left;
    width: 50%;
   
}   
    body
{
  background-color:white;
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
  width: 80%;
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
main{
                max-width: 1500px;
                width: 95%;
                margin: 30px auto;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                margin: auto;
            }
            main .card{
                max-width: 300px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                 flex: 1 1 210px;  
                text-align: center;
                font-family: arial;
                height: 500px;
                border: 1px solid lightgray;
                margin: auto;
                background-color: aliceblue;
            }
            main .card .image{
                height:50%;
                margin-bottom: 20px;
            }
            main .card .image img{
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            main .card .caption{
                padding-left: 1em;
                text-align: left;
                
                height: 25%;
            }
            main .card .caption p{
                font-size: 20px;
            }
             main .card a{
                width: 50%;
            } 
            main .card button{
                border: 2px solid black;
                padding: 12px;
                outline: 0;
                width: 100%;
                font-size: 18px;
                cursor: pointer;
                margin-top: 3em;
                font-weight: bold;
                position: relative;
            }
            main .card button:before{
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                width: 0;
                background-color: black;
                transition: all .5s;
                margin: 0;   
            }
            main .card button:after{
                content: "";
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                width: 0;
                background-color: black;
                transition: all .5s;  
            }
            main .card button:hover::before{
                width: 30%;
            }
            main .card button:hover::after{
                width: 30%;
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
  <br>
  
  <div class="abc">
    <center><h1>SIBERIAN HUSKY</h1></center>
    <p>Siberian Husky is a medium-sized dog that belongs to the Spitz family, originating from Siberia. It looks familiar to an Alaskan Malamute and can easily be recognised by its thick and furry double coat.
      Huskies have deep and almond-shaped eyes that can be blue or multi-coloured. Their coat is often a mix of white and shades of gray bearing varied markings. Their beautiful facial masks are another strikingly unique feature about their appearance.
      Siberian Huskies sport a muscular wolf-like look full of elegance. They are generally quick and nimble-footed, giving them a powerful yet effortless style of walking. They are naturally clean dogs that make great pets.
      Talking about the size, male Huskies sport a height of 21 to 23.5 inches and weigh 45 to 60 pounds. On the other hand, females are 20 to 22 inches tall, weighing around 35-50 pounds. They live for an average of 12 to 14 years.</p>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="image" style="margin-left: 550px;">
        <img src="images/Siberian Husky1.jpg" width="400" height="500">
      </div>
      <table>
        <tr>
        <th>Breed Name</th>
        <th>Siberian Husky</th>
      </tr>
        <tr>
          <td>Origin</td>
          <td>Siberia</td>
        </tr>
        <tr>
          <td>Breed Group</td>
          <td>working Group</td>
        </tr>
        <tr>
          <td>Height</td>
          <td>Male: 21 – 23.5 inches (53 – 60 cm)
            Female: 20 – 22 inches (50 – 56 cm)</td>
        </tr>
        <tr>
          <td>Weight</td>
          <td>Male: 20 – 27 kg
            Female: 16 – 23 kg
          </td>
        </tr>
        <tr>
          <td>Lifespan</td>
          <td>12 – 15 years</td>
        </tr>
        <tr>
          <td>Temperament</td>
          <td>Intelligent, Alert, Outgoing, Friendly, Kid Friendly</td>
        </tr>
        <tr>
          <td>Apartment Friendly</td>
          <td>Moderately</td>
        </tr>
        <tr>
          <td>Price</td>
          <td>Rs.22, 000 –Rs. 50, 000</td>
        </tr>
      </table>
      <br>
      <br>
      <p style="font-size:xx-large;">Why should you consider having a Siberian Husky?</p>
      <ul>
        <li>They are outgoing and well-behaved</li>
        <li>They are wonderful exercising partners!</li>
        <li>They are immensely appealing to the eye!</li>
        <li>Huskies are great to play with!</li>
        <li>Huskies are low maintenance dogs</li>
        <li>They are independent dogs</li>
        </ul>
      <p style="font-size:xx-large;">Serious Considerations Before Purchasing Siberian Huskys</p>
      <p>Despite all the perks you get on availing our services, maintaining a Siberian Husky is not free of challenges. There are several factors you need to consider before you process with the purchase of a Husky puppy from our sellers.
        Having good knowledge of these challenges would prepare you for bringing a Siberian Husky puppy into your family and taking care of it in the best way possible.</p>
      <ul>
        <li>High risk of escaping :  No matter how dearly you keep them, Siberian Huskies would often try breaking out of your house. They have a natural tendency to escape through the smallest of exits without any solid reason for doing so.
          Therefore, especially during the first few years, you need to be pretty careful about the whereabouts of your Husky. Have good fencing around your house and try not keeping them off the leash when there is an exit around.</li>
    <br>
        <li>Beware of strong predatory instincts :  Although they tend to be very friendly and playful around people and other dogs, Siberian Huskies can cause serious issues with their predatory instincts.
          It is therefore advisable to keep them away from smaller and weaker animals, especially cats and hamsters. However, if you are bringing in a Husky puppy in a home that has other pets and if it grows up with them, the other pets will certainly not be the victims of Husky’s predatory instincts.</li>
    <br>
          <li>You cannot afford to skip their daily exercise :  If you are quite a couch potato, you should either reconsider your lifestyle or the decision of buying a Siberian Husky!
            Huskies are ever-energetic dogs with high stamina need to indulge in some or the other physical activity on a daily basis. The least they require are a couple of walks every day.
            If you deprive them from these activities for a long time, Huskies might start getting increasingly irritable and lose their temper.</li>  
    <br>
          <li>Expect heavy shedding :  Huskies shed their coats majorly twice every year. You can also find dog hair around your house on a frequent basis. If you are allergic to dog hair if they gross you out, you might either want to reconsider the option of getting a Husky puppy or indulge into frequent cleaning of your house.</li>
    <br>
          <li>Huskies might get too noisy :  Although they do not bark too much, the sheer volume of their wolf-like howling may cause trouble with your neighbours. These howls are often long and sharp-sounding, especially when Huskies are left alone.
            We hope you are pretty well-versed with the tactics, perks and challenges pertaining to Siberian Huskies. Now is the time you get in touch with us and start making preparations for bringing this gorgeous animal home!
            Whether you are a first-time pet parent or possess enough experience in housing pets, we will guide you all the way from decision-making to receiving the puppies at your home.</li>     
            </ul>
  </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<main>
            <?php
                while($row=mysqli_fetch_assoc($all_product)){
            ?>
            <div class="row">
              <div class="column">
            <div class="card">
                <div class="image">
                    <img src="images/<?php echo $row["product_image"]; ?>" alt="" >
                </div>
                <div class="caption">
                  
                   <p class="product_name"><center><b><?php echo $row["product_name"]; ?></b></center> </p>
                   <p class="age"><center>Age: <b><?php echo $row["age"];?></b></center></p>
                   <p class="gender"><center>Gender: <b><?php echo $row["gender"];?></b></center></p>
                   <p class="colour"><center>Colour:<b> <?php echo $row["colour"];?></b></center></p>
                   <p class="price"><center>Price: <b>Rs.<?php echo$row["price"]; ?></b></center></p>
                </div>
                <a href="Undertakingform.php">
                <button data-id="<?php echo $row["product_id"]; ?>" >Proceed to Payment</button>
                </a>
            </div>
            </div>
            </div>
            <?php
                }
            ?>
        </main>
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