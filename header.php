<?php
require_once 'connprod.php';


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing: border-box;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-decoration: none;
            color: black;
        }
        html{
            font-size: 62.5%;
        }
        header{
            display:flex;
            align-items: center;
            height: 50px;
            padding: 0 20px;
            box-shadow: 1px 1px 1px 1px lightgrey;
            background-color: rgb(7, 137, 124);
        }
        header p{
            position:relative;
            font-size: 20px;
            margin-left: 1200%;
            color: white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        
        
        header p span{
            position: absolute;
            width:20px;
            height: 20px;
            top: -30%;
            right:-30%;
            background-color: black;
            color: white;
            border-radius: 50%;
            font-size: 1.5rem;
            padding: .2em;
            text-align: center;

        }
    </style>
    </head>
    <body>
        <header>
            
            <div id="main_tabs">
                <p>Upload</p>
            </div>
            
        </header>

    </body>
</html>