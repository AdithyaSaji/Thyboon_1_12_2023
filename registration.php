<?php
include_once "header.php";
include_once "dbactions.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="stylereglogin.css">
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    
    <div class="container">
    <?php
        $rand=rand(9999,1000);
         session_start();
        
        $_SESSION['rand']=$_SESSION['name']=$_SESSION['email']=$_SESSION['error']="";
        $_SESSION['pass']=$_SESSION['rpass']="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name= $_POST["fullname"];
            $_SESSION['name']=$name;
            $email= $_POST["email"];
            $_SESSION['email']=$email;
            $pass= $_POST["password"];
            $_SESSION['pass']=$pass;
            $rpass= $_POST["repeat_password"];
            $_SESSION['rpass']=$rpass;
            $uppercase=preg_match('@[A-z]@', $pass);
            $lowercase=preg_match('@[a-z]@', $pass);
            $number=preg_match('@[0-9]@', $pass);
            $specialchars=preg_match('@[^\w]@', $pass);
            function checkemail($str) {
                return (!preg_match("/^([a-z0-9\+\-]+)(\.[a-z0-9\+\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
          }
            $qry="SELECT * FROM `user_details` WHERE `EMAIL`='$email'";
            $result = getData($qry);
            if ($result->num_rows != 0) {
                $_SESSION['error']="Email already exist.";
            } 
            else if(!checkemail("$email")){
                $_SESSION['error']="Invalid email .";
              }
            else if(!$uppercase || !$lowercase || !$number || !$specialchars || strlen($pass) < 8 ){
                $_SESSION['error']=" password should be at least 8 characters in length and should include at least one  upper 
                case letter ,one lower case letter ,one number,and one special character";
            }
             else if($pass != $rpass){
                $_SESSION['error']="Password mismatch.";
            } else{
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host ='smtp.gmail.com'; //thyboon.com ,change.
                $mail->SMTPAuth = true;
                $mail->Username ='adithyasaji9@gmail.com';//enter your email id
                $mail->Password = '';//enter your  password
                $mail->SMTPSecure ='ssl';
                $mail->Port = 465;
                $mail->setFrom('adithyasaji9@gmail.com');//enter your email id
                $mail->addAddress($_POST["email"]) ;
                $mail->isHTML(true);
                $mail->Subject ="Verification code for Registration.";
                $mail->Body ="Your verification code for the Registration on Tyboon is ".$rand.". Donot Share it with anyone.";
                $mail->send();
            
                
                $_SESSION['rand']=md5($rand);
                
                    ?>
                    <script>
                    swal({
                            title: "Please verify your email id",
                            text: "An otp has been send to your email address",
                            icon: "success",
                            button: "OK"
                        });
                        window.onclick = myFunction;
                        function myFunction() {
                            location.replace("verification.php");
                        }
                    </script>
                    <?php
                
            }
            
        }
        
        ?>
        <form action="registration.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name='fullname' value="<?php echo $_SESSION['name'];?>" placeholder="Full Name:" required >
            </div>
            <div class="form-group">
                <input type="email" class="form-control email" name='email' value="<?php echo $_SESSION['email'];?>" placeholder="Email:" required>
                
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name='password' placeholder="Password:" value="<?php echo $_SESSION['pass'];?>" required >
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name='repeat_password' placeholder="Repeat Password:" value="<?php echo $_SESSION['rpass'];?>" required  >
            </div>
            
            <label style="color:red" for="error-message"><?php echo $_SESSION['error'];?></label>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div>
            <br>   
        <div><p>Already Registered <a href="login.php">LOGIN HERE</a></p></div>
      </div>
    </div>
    
</body>
</html>
</body>
</html>
</body>
</html>