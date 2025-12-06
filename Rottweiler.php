<?php

 require_once 'connprod.php';

 $sql ="SELECT * FROM rottweiler";
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
    <center><h1>ROTTWEILER</h1></center>
    <p>Rottweiler is a medium to large-sized dog originally from Germany. They get their name from the German term “Rottweiler Metzgerhund” that translates to Rottweil butchers’ dogs.
      This is essentially because the dogs were initially bred for herding livestock and pulling carts of butchered meat to markets.
      A male Rottweiler dons the height of 24 to 27 inches and weighs around 95 to 135 pounds. Females are a little shorter and weigh lighter. They have a short and shiny black coat along with rust markings.
      Rottweilers have an athletic build and a strong appearance. However, this doesn’t mean they do not make great pets. They make adorable domestic pets with their playful and joyous nature. Owing to their appearance and intelligence, a Rottweiler makes for a great guard dog.</p>
      <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="image" style="margin-left: 550px;">
          <img src="images/Rottweiler.jpg" width="400" height="300">
        </div>
      <table>
        <tr>
        <th>Breed Name</th>
        <th>Rottweiler</th>
      </tr>
        <tr>
          <td>Origin</td>
          <td>Germany</td>
        </tr>
        <tr>
          <td>Breed Group</td>
          <td>working Group</td>
        </tr>
        <tr>
          <td>Height</td>
          <td>Male: 24 – 27 inches (61-69 cm)
            Female: 22-25 inches (56-63 cm)
            </td>
        </tr>
        <tr>
          <td>Weight</td>
          <td>Male: 50-60 kg
            Female: 35-48 kg
          </td>
        </tr>
        <tr>
          <td>Lifespan</td>
          <td>8-10 Years</td>
        </tr>
        <tr>
          <td>Temperament</td>
          <td>Calm,Devoted,Confident,Fearless,Obedient,Family-Friendly</td>
        </tr>
        <tr>
          <td>Apartment Friendly</td>
          <td>Moderately</td>
        </tr>
        <tr>
          <td>Price</td>
          <td>Rs.15, 000 –Rs. 60, 000</td>
        </tr>
      </table>
      <br>
      <br>
      <p style="font-size:xx-large;">Why should you consider having a Rottweiler?</p>
      <ul>
        <li>They are affectionate with a good temperament</li>
        <li>They are wonderful playmates!</li>
        <li>They are brainy dogs</li>
        <li>A Rottweiler will always be loyal to you</li>
        <li>They possess unmatched energy</li>
        <li>A Rottweiler can be easily trained</li>
      </ul>
      <p style="font-size:xx-large;">Serious Considerations Before Purchasing Rottweilers</p>
      <p>Buying and maintaining a Rottweiler is great fun, but comes with its own share of challenges. It is important to be familiar with these challenges before you reach out to us and purchase the Rottweiler puppies our sellers have.
        Although your seller would brief you with all important nitty-gritty details about the breed, it is important to consider certain specific factors that would help you overcome challenges and prepare for bringing a Rottweiler puppy home.</p>
      <ul>
        <li>Their temperament might become dominant :  Although Rottweilers have an even and calm temperament for most of the time, there might be instances when they become dominant. Their strong-mindedness may take the better of them, making it difficult to control them.
          This is what makes it difficult for everyone to control a Rottweiler. It is advisable for the dog to be around their owners or trainers as they may get out of control in a stranger’s hands.
          Handling them further gets worse because of their giant size. However, you can alter this temperament of their by training them well.</li>
    <br>
        <li>Rottweilers sheds a lot :  One of the major challenges you can face as a Rottweiler owner is that of cleaning hair all around your house. The coat of Rottweiler sheds a lot on a seasonal basis.
          Apart from the major shedding during specific seasons, they also shed on a frequent basis. If you or any of your family members are allergic to dog hair, getting this breed might not be the best decision.</li>
    <br>
          <li>Do not miss their daily exercise :  Rottweiler dogs require their daily dose of physical activity to keep their system intact. Owing to their size and sufficient intake of calories daily, they need to burn them every single day.
            It is important to take your Rottweilers on a walk twice a day, at least for an hour. Anything more than that would be a bonus, much welcomed by the dog! However, you cannot afford to miss this routine.
            Buying a Rottweiler comes with the responsibility of providing them with the daily physical activity they demand. If you are not able to spend time for this, you can hire professional help as well.
            If you fail to indulge your dog into enough physical activity for too long, they will start getting restless and obese. This may also lead to unwanted health conditions you’d never wish your dog would have to go through.
            Lack of physical and mental stimulation would also lead to your dog losing their calm demeanour and get aggressive. When a dog as huge and strong as a Rottweiler starts getting aggressive, you know things are not going to end up well!</li> 
    <br>
            <li>Not the best option for first-time pet parents :  Handling Rottweiler comes with a lot considerations to be made and patience to be had. It is advisable to bring a Rottweiler puppy home only if you have a previous experience of handling dogs (especially large-sized dogs).
              It might not be the best option to go for if you are a first-time pet parent. You will generally not face issues during the initial years when Rottweiler is still a puppy. However, things might start getting difficult once the little beast starts growing.
              If you are still looking forward to buy a Rottweiler as a first pet, it is advisable to gain sufficient experience in handling it by fostering them first.
              Overall, if trained and handled well, Rottweilers make for excellent pets. We hope you have made up your mind and are waiting for you to get in touch with us.
              You can rest assured that we will help you buy the pet at the best Rottweiler puppy price and help you bring the little beast home!</li>
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