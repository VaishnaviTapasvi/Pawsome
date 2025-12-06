<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: lightgrey;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  width:50%;
  margin: 5% auto 15% auto;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid white;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: black;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: black;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
body
{
  background-color: rgb(7, 137, 124);
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="authentication3.php"  method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="Enter Full Name" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email" required>
            <br>
            <br>
            <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="address" name="address" placeholder="Enter Address" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Enter City" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Enter State" required>
              </div>
              <div class="col-50">
                <label for="zip">Pincode</label>
                <input type="number" id="zip" name="zip" data-maxlength="6" data-minlength="6" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" oninput="this.value=this.value.slice(0,this.dataset.minlength)" placeholder="Enter Pincode" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="name">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cname" placeholder="Enter Name on Card" required>
            <label for="ccnum">Credit card number</label>
            <input type="number" id="ccnum" name="ccnum" data-maxlength="16" data-minlength="16" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" oninput="this.value=this.value.slice(0,this.dataset.minlength)" style="width: 200px;" placeholder="Enter Credit Card Number" required>
            <br>
            <br>
            <label for="expmonth">Exp Month</label>
            <input type="number" min="01" max="12" id="expmonth" name="expmonth" style="width: 150px;" placeholder="Enter Exp Month" required>
            <br>
            <br>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="number" style="width: 150px;" data-maxlength="4" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" min="2023" max="2027" id="expyear" name="expyear" placeholder="Enter Exp Year" required>
                <br>
                <br>
              </div>
              
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" maxlength="4"  minlength="3" placeholder="Enter CVV" required>
              </div>
            </div>
          </div>
          
        </div>
        <input type="submit" name="submit" id="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>

</body>
</html>
