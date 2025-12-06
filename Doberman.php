<?php

 require_once 'connprod.php';

 $sql ="SELECT * FROM doberman";
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
                height: 600px;
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
                margin-top: 4em;
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
    <center><h1>DOBERMAN</h1></center>
    <p>Doberman, also known as Doberman pinscher, is originally a German breed that is believed to be a mix of multiple breeds, such as Black and Tan Terrier, Rottweiler and German Pinscher.
      Doberman pinschers sport a sleek coat, have an athletic build and look almost aristocratic in appearance. They are extremely energetic, curious an intelligent, which makes them instrumental in police and military services as well.
      With a long head and a muscular body, a Doberman flaunts a short coat which can be dark red, black, fawn or blue in color. Majority of these dogs also have rust-colored marks on their body, tail and face.
      So, as far as being friendly is concerned, forget about putting the sign warning people to beware of your dog!They have a life expectancy of 10 to 12 years. On an average, a male Doberman would be 60 cm tall and weigh 32 kg. Females are shorter in height and weigh less. Doberman pinschers are extremely loyal to their owners. If they are raised along with children, they tend to develop a strong bond with them.
      
      </p>
      <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="image" style="margin-left: 550px;">
          <img src="images/Doberman1.png" width="400" height="300">
        </div>
      <table>
        <tr>
        <th>Breed Name</th>
        <th>Doberman</th>
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
          <td>26 - 28 inches (66 - 72 cm)</td>
        </tr>
        <tr>
          <td>Weight</td>
          <td>Male: 40 - 45 kg
            Female: 32 - 35 kg            
            </td>
        </tr>
        <tr>
          <td>Lifespan</td>
          <td>10 - 13 Years</td>
        </tr>
        <tr>
          <td>Temperament</td>
          <td>Obedient Loyal Intelligent, Kid Friendly, Confident</td>
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
      <p style="font-size:xx-large;">Why should you consider having a Doberman?</p>
      <ul>
        <li>Treat for the eyes!</li>
        <li>A Doberman is Loyal</li>
        <li>Doberman pinschers are super-brainy!</li>
        <li>They make excellent exercising buddies!</li>
        <li>A Doberman is multi-talented</li>
        <li>They are supreme protectors!</li>
        <li>Doberman pinchers are low maintenance</li>
      </ul>
      <p style="font-size:xx-large;">Serious Considerations Before Purchasing Doberman Puppies</p>
      <p>Before having a look at our Doberman pinscher puppies for sale and taking one home with you, we advise you to consider a few important aspects that might pose a few challenges in tending to them.
      </p>
      <ul>
        <li>Health issues :  It is important to be aware about the health issues your pet may encounter before bringing them home.
          It is advisable to get a pet insurance done to be on a safe side in case your Doberman puppy encounters health issues. Dobermans are often prone to bloat, which is an adverse digestive condition that could be life-threatening. You should also beware of Hip Dysplasia taking a toll on your pet.
          A few Doberman pinschers may also suffer from cardiomyopathy. This is a genetic condition of having an enlarged heart. Another genetic condition your pet might be having is a clotting disorder called von Willebrand’s disease.
          It is always advisable to consult a pet breeder on a regular basis and a vet in case you feel something is wrong with your otherwise athletic hunk. </li>
    <br>
        <li>Try fostering as a first-time owner :  It is advisable to be familiar and comfortable with the tactics of a Doberman before owning the pet. Just like it is important for you to adjust with the pet, it is equally important for a pet to adjust with you.
          You can gain this familiarity and comfort by fostering a Doberman and learning more about the breed before you avail our services in buying the puppy.
          If you are thorough with all these considerations about keeping Doberman puppy with you, all you need to do is get in touch with us and we will guide you in taking the hunk home!</li>
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