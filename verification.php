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
         $_SESSION['otp']=$_SESSION['error']="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $otp= $_POST["otp"];
            $_SESSION['otp']=$otp;
            $rand=$_SESSION['rand'];
            $name= $_SESSION['name'];
            $email= $_SESSION['email'];
            $pass=$_SESSION['pass'];
            $newpass=md5($pass);

                if($rand == md5($otp)){
                    $sql="INSERT INTO `user_details`(`NAME`, `EMAIL`, `PASSWORD`) VALUES ('$name','$email','$newpass')";
                    if(setData($sql)==true){
                        ?>
                        <script>
                            swal({
                            title: "Registration Successfull!",
                            text: "You can Login now!",
                            icon: "success",
                            button: "OK"
                        });
                        window.onclick = myFunction;
                        function myFunction() {
                            location.replace("login.php");
                            }
                        </script>
                        <?php
                    }
                }
                else{
                    $_SESSION['error']="Invalid otp.";
                }
                
                
            
            
        }
        
        ?>
        <form action="verification.php" method="POST">
            <div class="form-group">
                <input type="password" class="form-control" name='otp' value="<?php echo $_SESSION['otp'];?>" placeholder="Enter otp:" required >
            </div>
            
            <label style="color:red" for="error-message"><?php echo $_SESSION['error'];?></label>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Verify" name="submit">
            </div>
        </form>
        
    </div>
    
</body>
</html>
</body>
</html>
</body>
</html>