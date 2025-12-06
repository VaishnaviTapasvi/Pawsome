<?php

 require_once 'connprod.php';

 $sql ="SELECT * FROM goldenretriever";
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
  
  <div class="abc">
    <center><h1>GOLDEN RETRIEVER</h1></center>
    <p>Golden Retriever is originally a Scottish gundog, extremely popular across the globe. It is a medium to large-sized dog known for the dense golden coat, giving the breed its name.
      Retrievers have a broad head, emotive beady eyes, short ears and a straight muzzle. They move in a playful manner, wagging their feathery tail in a motion commonly referred to as “merry action”.
      While the male dogs are 23-34 inches tall and weigh around 65-75 pounds, females are 21-22 inches tall and weigh around 55-65 pounds. The life expectancy of Golden Retrievers is 10 to 12 years.
      Golden Retrievers naturally excel at retrieving games for hunters that involve tracking and sniffing out. They are highly intelligent and reliable, making them excellent working dogs. They are also highly athletic. Their impeccable athletic nature and competitive obedience makes them favourites in dog sports.
      Golden Retrievers make the most adorable pets. They gel extremely well with their owners and children. They have an inherent urge of pleasing people around them, making them a fun company to have.
      Retrievers are very playful and can be easily trained, owing to their increased motivation for learning.
      </p>
      <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="image" style="margin-left: 550px;">
          <img src="images/Golden Retriever.jpg" width="400" height="300">
        </div>
      <table>
        <tr>
        <th>Breed Name</th>
        <th>Golden Retriever</th>
      </tr>
        <tr>
          <td>Origin</td>
          <td>United Kingdom, Scotland, England</td>
        </tr>
        <tr>
          <td>Breed Group</td>
          <td>Sporting Group</td>
        </tr>
        <tr>
          <td>Height</td>
          <td>Male: 22 – 24 inches (56 – 61 cm)
            Female: 20 – 22 inches (51 – 56 cm)</td>
        </tr>
        <tr>
          <td>Weight</td>
          <td>Male: 29 – 34 kg
            Female: 25 – 29 kg                       
            </td>
        </tr>
        <tr>
          <td>Lifespan</td>
          <td>10 – 12 Years</td>
        </tr>
        <tr>
          <td>Temperament</td>
          <td>Intelligent, Patient, Family Friendly, Reliable, Easy to train</td>
        </tr>
        <tr>
          <td>Apartment Friendly</td>
          <td>Highly</td>
        </tr>
        <tr>
          <td>Price</td>
          <td>Rs.25, 000 –Rs. 60, 000</td>
        </tr>
      </table>
      <br>
      <br>
      <p style="font-size:xx-large;">Why should you consider having a Golden Retriever?</p>
      <ul>
        <li>They act as your personal therapists!</li>
        <li>They are beautiful dogs!</li>
        <li>It is easy to train a Retriever</li>
        <li>Golden Retrievers are naturally funny</li>
        <li>They are big people pleasers!</li>
        <li>They are pet-friendly</li>
        <li>Their loyalty makes them brave</li>
        <li>They will get you to exercise!</li>
        <li>They are fairly gentle for their size</li>
        <li>Golden Retrievers are always enthusiastic!</li>
      </ul>
      <p style="font-size:xx-large;">Serious Considerations Before Purchasing Golden Retrievers</p>
      <p>Before having a look at our Doberman pinscher puppies for sale and taking one home with you, we advise you to consider a few important aspects that might pose a few challenges in tending to them.
      </p>
      <ul>
        <li>Never forget to make them exercise :  One of the major prerequisites for buying a Golden Retriever is the fact that you should be able to spend sufficient amount of time for getting them exercised on a daily basis.
          If you keep them from their daily requirement of physical activities, Retrievers tend to become restless and overweight. By doing this, you would affect the otherwise gentle and playful nature of the breed.</li>
    <br>
        <li>Expect excessive shedding :  Golden Retrievers are extremely fluffy, which implies they are full of hair. They shed majorly twice a year, but you can always expect to find dog hair in the house if you have a Golden Retriever around.
          Please note that it is not advisable to go ahead and buy a Golden Retriever if you (or anyone in your family) is allergic to dog hair.</li>
          <br>
        <li>They are prone to specific diseases :  Golden Retrievers are prone to certain specific health issues. It is advisable to consult your pet shop owner or breeder about this before taking the puppy home.
          Although majority of Retrievers are prone to hip dysplasia, here are some of the common health issues your pet might encounter:
          Progressive Retinal Atrophy, Cataracts, Osteochondrosis Dissecans, Subvalvular Aortic Stenosis, Von Willebrand’s Disease, Gastric Dilatation-Volvulus (bloating), Epilepsy, Hypothyroidism
          In case you encounter any abnormality in the behaviour or appearance of your dog, it is advisable to contact its breeder (if known) or a reliable vet immediately.</li>
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