<?php

 require_once 'connprod.php';

 $sql ="SELECT * FROM pomeranian";
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
    <center><h1>POMERANIAN</h1></center>
    <p>Pomeranians are small-sized dogs belonging to the Spitz breed of dogs. They get their name after the Pomerania region situated in north-west Poland and north-east Germany.
      Owing to their appearance, Pomeranians are classified as toy dogs. They have a tiny body that weighs no more than seven pounds (for an adult). They can don a variety of colours, such as white, cream, blue, red, orange, brown and black. You might also see a Pomeranian with coloured markings on its body.
      The height of Poms generally ranges between 6 to 7 inches. They have an average life expectancy of 12 to 16 years.
      Pomeranians make excellent pets. They are naturally alert, intelligent and easily trained. This is what makes them excellent watch dogs. Although they are playful dogs, they can do without long outdoor walks. As far as you they are regularly exercised indoors, they are good.</p>
      <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="image" style="margin-left: 550px;">
          <img src="images/Pomeranian2.jpg" width="400" height="300">
        </div>
      <table>
        <tr>
        <th>Breed Name</th>
        <th>Pomeranian</th>
      </tr>
        <tr>
          <td>Origin</td>
          <td>Germany, Poland</td>
        </tr>
        <tr>
          <td>Breed Group</td>
          <td>Toy Dog</td>
        </tr>
        <tr>
          <td>Height</td>
          <td>7 – 12 inches (18 – 30 cm)</td>
        </tr>
        <tr>
          <td>Weight</td>
          <td>1.9 – 3.5 kg</td>
        </tr>
        <tr>
          <td>Lifespan</td>
          <td>12 – 16 Years</td>
        </tr>
        <tr>
          <td>Temperament</td>
          <td>Playful, Active, Sociable, Intelligent, Kid Friendly</td>
        </tr>
        <tr>
          <td>Apartment Friendly</td>
          <td>Highly</td>
        </tr>
        <tr>
          <td>Price</td>
          <td>Rs.10, 000 –Rs. 12, 000</td>
        </tr>
      </table>
      <br>
      <br>
      <p style="font-size:xx-large;">Why should you consider having a Pomeranian?</p>
      <ul>
        <li>Pomeranians possess unmatched cuteness!</li>
        <li>Their size makes management easier</li>
        <li>Pomeranians are easy to train</li>
        <li>They are happy creatures</li>
        <li>Pomeranians love being with families</li>
        <li>They will stick around for long!</li>
        <li>Pomeranians are good watch-dogs!</li>
      </ul>
      <p style="font-size:xx-large;">Serious Considerations Before Purchasing Pomeranians</p>
      <p>If you are willing to buy the Pomeranian puppies for sale from the sellers listed with us, simply knowing the perks are not enough.
        There are certain factors you should consider before you go ahead with the process of purchasing a Pomeranian puppy in Pune. These considerations help you prepare better for housing and taking care of your new puppy.</p>
      <ul>
        <li>Pomeranians can get very persistent :  Pomeranians often act like children who are too determined to get something they want really badly. They tend to be very persistent at times and do not give up easily.
          This is essentially because of having a notion that their owners cannot say no to anything they want. This makes them throw various tantrums and force you to give in to their wishes.
          Although this is not that serious an issue in moderate situations, such a nature might get irritating if it persists for too long and gets too frequent.</li>
    <br>
        <li>Their “watch-dog” may go a little overboard! :  While staying alert all the time and giving you signs of danger have their own benefits, Pomeranians often tend to go a little extra here.
          They are always extremely alert, even when they are sleeping! They might start barking at any sound our sight that is alien to them, as they perceive it as a threat.
          This might get problematic when you are living in a close-knit neighbourhood. However, you can tone this down by socialising your Pomeranian puppy and train them to be a little more “reasonable” while being alert.</li>
    <br>
          <li>They are fragile dogs :  Along with the benefits that come with the compact size and stature of Pomeranians, it also comes with the need to beware of harming them.
            You need to be extremely careful while handling Pom puppies and carrying them. Their size and build makes them considerably fragile. Just like your pet, you always need to stay alert!
            This is a common consideration for dogs belonging to the toy group. You need to be careful not to drop them while carrying, not to sit on them and to ensure that children do not harm them in any manner.</li>
    <br>
        <li>Their coat needs extra care :  The beautiful furry coat of Pomeranians comes with a little price. It needs to be extensively taken care of.
          For proper grooming, you need to brush the coat on a daily basis and bathe your dog frequently. On the recommendation of a breeder or a vet, the coat might also need some trimming after specific time periods.
          Owing to the bright colour of their coat and their playful nature, your Pomeranian puppy might get their coats soiled easily. You always need to keep a watch on their activities and get them washed immediately if they spoil their coat.
          Now that you are well aware about the breed of Pomeranians, the perks associate with them and the factors to consider before buying them, you can approach us to help you purchase your furry companion.
          Let us know the specifications and leave the rest on us. We ensure that you will take the most adorable Pomeranian puppy home!</li>
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