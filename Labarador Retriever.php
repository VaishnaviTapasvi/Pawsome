<?php

 require_once 'connprod.php';

 $sql ="SELECT * FROM labradorretriever";
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
    <center><h1>LABRADOR RETRIEVER</h1></center>
    <p>Labradors, or Labrador Retrievers, are medium to large-sized dogs belonging to the retriever-gun breed. It is a highly popular dog breed across the world, known to be a great companion and a capable working dog.
      Labrador Retrievers sport a dense and hard coat that is usually black, chocolate or yellow in colour. Their head is typically white and they don a beautiful thick “otter tail” that keeps wagging as a sign of the dog always being curious.
      Labrador Retrievers are typically 21 to 24 inches tall and weigh around 55 to 80 pounds, with an average life expectancy of 10 to 12 years. Labradors are extremely friendly dogs. They get along well with humans as well as other pets.
      They are famous for their energy and athletic nature. They are always enthusiastic and are just as good working dogs as they are pets.</p>
      <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="image" style="margin-left: 550px;">
          <img src="images/Labarador1.jpeg" width="400" height="300">
        </div>
      <table>
        <tr>
        <th>Breed Name</th>
        <th>Labrador Retriever</th>
      </tr>
        <tr>
          <td>Origin</td>
          <td>United Kingdom and Canada</td>
        </tr>
        <tr>
          <td>Breed Group</td>
          <td>Sporting Group</td>
        </tr>
        <tr>
          <td>Height</td>
          <td>Male: 23 – 25 inches (57 – 62 cm)
            Female: 22 – 24 inches (55 – 60 cm)</td>
        </tr>
        <tr>
          <td>Weight</td>
          <td>Male: 29 – 36 kg
            Female: 25 – 32 kg            
            </td>
        </tr>
        <tr>
          <td>Lifespan</td>
          <td>10 – 14 Years</td>
        </tr>
        <tr>
          <td>Temperament</td>
          <td>Gentle, Even Tempered, Kind, Intelligent, Kid Friendly, Easy to train</td>
        </tr>
        <tr>
          <td>Apartment Friendly</td>
          <td>Highly</td>
        </tr>
        <tr>
          <td>Price</td>
          <td>Rs.12, 000 –Rs. 60, 000</td>
        </tr>
      </table>
      <br>
      <br>
      <p style="font-size:xx-large;">Why should you consider having a Labrador Retriever?</p>
      <ul>
        <li>Labradors are patient dogs</li>
        <li>They are friendly and happy dogs</li>
        <li>It doesn’t take much to train them</li>
        <li>They make great swimming partners!</li>
        <li>Labradors are playful pets</li>
        <li>They are beautiful creatures!</li>
        <li>Labradors are full of energy</li>
      </ul>
      <p style="font-size:xx-large;">Serious Considerations Before Purchasing Labrador Retriever</p>
      <p>Now that you are thorough with the perks in store for you on availing our services and buying Labrador puppies for sale in Pune from our sellers, there are certain factors you need to consider before bringing them home.
        Although we will provide you with all relevant details once we make all the negotiations with the seller on your behalf, here are a few major considerations that would help you prepare for becoming a Labrador parent.</p>
      <ul>
        <li>Labradors leave their youthful traits late :  One of the major aspects you need to consider before bringing a Labrador home is that they take time in maturing with age. They are likely to have their childish tendencies intact until they reach the age of four.
          Even after your puppy has grown, you might have to deal with juvenile issues such as chewing problems and separation anxiety for a little longer. However, you can take this as an advantage as well, owing to the fact that you get to retain the cute “puppy” phase of your pet longer.</li>
    <br>
        <li>You will encounter frequent shedding :  Labradors may not be the best option if you, or anyone in your family, are allergic to dog hair. They tend to get a thick coat in winter which comes off around late spring.
          Apart from the high seasonal shedding, you will always find hair around in the house if you have a Lab at home. You will have to take additional care in cleaning the house and maintaining a healthy environment due to the shedding tendency of Labradors.</li>
    <br>      
          <li>Their eating habits require special attention :  As mentioned earlier, Labradors are highly energetic dogs. They tend to spend a lot of their energy throughout the day. This implies that they also require a sufficient amount of food intake to feed their energy.
            This often results in the dogs not knowing the limits when to stop eating. Their energy requirements are so high that they may keep on eating beyond the suitable limit. It is therefore important to monitor their daily eating habits and ensure they are not consuming more food than required.
            Along with monitoring their eating habits, it is equally important to check whether they are burning off these calories daily. If you would keep them from their daily exercise routine (a couple of walks at least), Labradors tend to get obese and encounter an array of health issues.
            We love Labradors as much as you do and would ensure that you get the best of Labrador Retriever puppies from our sellers.
            All you need to do is brief us about the kind of puppies you want and we will get in touch with the most ideal sellers, negotiating the deal at the best Lab puppies price. Once you have approached us, you can rest assured that you would take the most beautiful and healthy Labrador puppies home!</li>
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