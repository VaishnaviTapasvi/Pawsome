<?php
require_once 'connprod.php';
if(isset($_POST["submit"])){
   $productname=$_POST["productname"];
   $age=$_POST["age"];
   $gender=$_POST["gender"];
   $colour=$_POST["colour"];
  
  $price=$_POST["price"];

  $upload_dir="uploads/";
  $product_image=$_FILES["imageUpload"]["name"];
//   $upload_dir.$_FILES["imageUpload"]["name"];
  $upload_file=$upload_dir.basename($_FILES["imageUpload"]["name"]);
  $imageType=strtolower(pathinfo($upload_file,PATHINFO_EXTENSION));
  $check=$_FILES["imageUpload"]["size"];
  $upload_ok=1;

  if(file_exists($upload_file)){
    echo "<script>alert('The file already exists')</script>";
    $upload_ok=0;
  }else{
    $upload_ok=1;
    if($check!==false){
        $upload_ok=1;
        if($imageType=='jpg'||$imageType=='jpeg'||$imageType=='png'){
            $upload_ok=1;   
        }else{
            echo "<script>alert('Please change the image format')</script>";
        }
    }else{
        echo "<script>alert('The photo size is 0 please change the photo')</script>";
        $upload_ok=0;  
    }

  }
  if($upload_ok==0){
    echo "<script>alert('Sorry your file is not uploaded.Please try again')</script>";
  }else{
    if($productname!="" && $age!="" && $gender!="" && $colour!="" &&$price!=""){
      move_uploaded_file($_FILES["imageUpload"]["name"],$upload_file); 

      $sql="INSERT INTO germanshepherd(product_name,age,gender,colour,price,product_image) VALUES('$productname','$age','$gender','$colour',$price,'$product_image')";

      if($conn->query($sql)===TRUE){
        echo "<script>alert('Your product uploaded successfully')</script>";
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <style>
            *{
                margin:0;
                padding: 0;
                text-decoration: none;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            html{
                font-size: 62.5%;
            }
            body{
                background-color: #fff;
            }
            #upload_container{
                margin: 10% auto;
                display: flex;
                flex-direction: column;
                width: 50%;
            }
            #upload_container form{
                display: flex;
                flex-direction: column;

            }
            #upload_container form input{
                padding: 8px;
                outline: none;
                border: 1px solid lightblue;
                margin-bottom: 8px;
            }
            #upload_container form button{
                padding: 8px;
                outline: none;
                background-color: lightblue;
                border: none;
                margin-bottom: 8px;
                cursor: pointer;
            }
            #upload_container form input[type="submit"]{
                background-color: lightgray;
                border: none;
            }
            #upload_container form input[type="submit"]:hover{
                background-color: white ;
                cursor: pointer;
                border:1px solid lightblue;
            }
        </style>
    </head>
    <body>
        <?php
            include_once 'header.php';
        ?>
        <section id="upload_container">
            <form action="uploadgermanshepherd.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="productname" id="productname" placeholder="Product Name" required>
                <input type="text" name="age" id="age" placeholder="Age" required>
                <input type="text" name="gender" id="gender" placeholder="Gender" required>
                <input type="text" name="colour" id="colour" placeholder="Colour" required>
                
                <input type="number" name="price" id="price" placeholder="Product Price" required>
                <input type="file" name="imageUpload" id="imageUpload" required hidden>
                <button id="choose" onclick="upload();">Choose Image</button>
                <input type="submit" value="Upload" name="submit">
            </form>
        </section>
        <script>
            var productname= document.getElementById("productname");
            var age= document.getElementById("age");
            var gender= document.getElementById("gender");
            var colour= document.getElementById("colour");
            
            var price= document.getElementById("price");
            var choose= document.getElementById("choose");
            var uploadImage= document.getElementById("imageUpload");

            function upload(){
                uploadImage.click();
            }
            uploadImage.addEventListener("change",function(){
                var file=this.files[0];
                if(productname.value==""){
                   productname.value=file.name; 
                }
                choose.innerHTML="You can change("+file.name+")picture";
            })
        </script>
    </body>
    </html>