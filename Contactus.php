<?php
  include_once "header.php";
  include_once "dbactions.php";
?> 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Responsive contact us</title>
   <link rel="stylesheet" href="css/stylecontact.css">
   
</head>
<body>
  <?php
         session_start();
         $_SESSION['name']=$_SESSION['email']=$_SESSION['message']="";
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
             $name= $_POST["name"];
             $_SESSION['name']=$name;
             $email= $_POST["email"];
             $_SESSION['email']=$email;
             $message= $_POST["message"];
             $_SESSION['message']=$message;

         }
         
    ?>
    
    <section class="Contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="Contact-wrapper">
                <div class="Contact-form">
                    <h3> Send Us a Message</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Enter your name" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter your email" required="required">
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Enter Message here" required="required"></textarea>
                        </div>
                        <button type="submit">send message</button>
                    </form>
                </div>
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><i class="fas fa-phone"></i> +91-999-7777</p>
                    <p><i class="fas fa-envelope"></i> thyboon2023@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i>123 street,Pathanamthitta</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>  