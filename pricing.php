<?php
  include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <link rel="stylesheet" href="css/styleprice.css">
    <style>
         .price-col{
            display: grid;
            flex-wrap: nowrap; 
        }
        .container{
            background: #fff;
        }
        .container h2{
              color: #000;
    
        }
        .price-col{
           background: #22a6b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Choose your plan</h2>   
    <div class="price-row">
        <div class="price-col">
            <p>Starter</p>
            <h3>19$ <span>/ month</span></h3>
            <ul>
                <li>1 Website</li>
                <li>10 GB Disk Space</li>
                <li>Free Wed Builder</li>
                <li>Basic Web Builder</li>
                <li>No SSL Certificate</li>
                <li>Limited Support</li>
            </ul>
            <button>Add To Cart</button>
        </div>
    
   
        <div class="price-col">
            <p>Advanced</p>
            <h3>29$ <span>/ month</span></h3>
            <ul>
                <li>10 Website</li>
                <li>50 GB Disk Space</li>
                <li>Free Email Address</li>
                <li>Advanced Web Builder</li>
                <li>Free SSL Certificate</li>
                <li>Unlimited Support</li>
            </ul>
            <button>Add To Cart</button>
        </div>
    
    
        <div class="price-col">
            <p>Premium</p>
            <h3>49$ <span>/ month</span></h3>
            <ul>
                <li>100 Website</li>
                <li>100 GB Disk Space</li>
                <li>Free Email Address</li>
                <li>Advanced Web Builder</li>
                <li>Free SSL Certificate</li>
                <li>Unlimited Support</li>
            </ul>
            <button>Add To Cart</button>
        </div>
    </div>
    
</div>
</body>
</html>