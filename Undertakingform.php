<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
  function myFunction() {
   document.getElementById("agree").required=true;
    
  }
  </script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: rgb(7, 137, 124);
}
 
label{
  margin-left: 40px; 
}

input[type=text], select {
  width: 30%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-top: 20px;
  margin-bottom: 16px;
  margin-left: 20px;
}

input[type=submit] {
  background-color:  black;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  opacity: 0.4;
}

.container {
  border-radius: 5px;
  background-color: rgb(255, 219, 88);
  padding: 20px;
  margin-left: 400px;
  margin-right: 400px;
}

</style>
</head>
<body>

<center><h1 style="color:rgb(255, 219, 88) ;">Undertaking Form</h1></center>

<div class="container">
  <form action="authentication2.php" method="POST">
    <label for="vname">Name of the Vendor</label>
    <input type="text" id="vname" name="vname" placeholder="vendor's name" style="margin-left: 45px;" required>

<br>    
      <label for="pname">Name of the Purchaser</label>
      <input type="text" id="pname" name="pname" placeholder="purchaser's name" style="margin-left: 25px;" required>
<br>
      <label for="paddress">Purchaser's Address</label>
      <input type="text" id="paddress" name="paddress" placeholder="purchaser's address" style="margin-left:45px;" required>
<br>  
      <label for="breed">Breed</label>
      <select  name="breed" id="Breed" style="width: 34%; margin-left: 150px;" required="required" />
      <option value="" style="width: 10%;">Select</option>
        <option value="beagle" style="width: 10%;">Beagle</option>
        <option value="doberman" style="width: 10%;">Doberman</option>
        <option value="german shepherd" style="width: 10%;">German Shepherd</option>
        <option value="golden retriever" style="width: 10%;">Golden Retriever</option>
        <option value="lab retriever" style="width: 10%;">Labrador Retriever</option>
        <option value="pomeranian" style="width: 10%;">Pomeranian</option>
        <option value="pug" style="width: 10%;">Pug</option>
        <option value="rottweiler" style="width: 10%;">Rottweiler</option>
        <option value="shih tzu" style="width: 10%;">Shih Tzu</option>
        <option value="husky" style="width: 10%;">Siberian Husky</option>
      </select>
<br>
<label for="age" style="margin-left: 40px;">Age</label>
      <input type="text" id="age" name="age" placeholder="_years" style="width: 30%;margin-left: 160px;" required>
<br>     
     <label for="gender">Gender</label>
      <select id="gender" name="gender" style="width: 34%;margin-left: 140px;" required="required" />
      <option value="" style="width: 10%;">Select</option>
      <option value="Dog (Male)" style="width: 10%;">Dog(Male)</option>
      <option value="Bitch (Female)" style="width: 10%;">Bitch(Female)</option>
      </select>
<br>
      <label for="colour">Colour(Dog)</label>
      <input type="text" id="colour" name="colour" placeholder="colour" style="width: 31%;margin-left: 100px;" required>
      <br>
      <br>   
      <label for="sprice" style="margin-left: 40px;">Sale Price</label>
      <input type="number" id="sprice" name="sprice" placeholder="Rs." style="width: 35%;margin-left: 107px;" required>

<br>
<br>
      <input type="checkbox" id="agree" name="agree">
      <label for="agree"> I hereby agree to accept all the terms and conditions and follow all the rules and regulations given by the Animal Welfare Board of India. I will not indulge in any malpractices and will take full responsibility of any unwanted situation caused because of my careless actions.</label><br>

 <center><input type="submit" name="submit" id="submit" value="submit" onclick="myFunction()"></center>
</form>
</div>

</body>
</html>
