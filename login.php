<?php
session_start();
include_once "header.php";
include_once "dbactions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="stylereglogin.css">
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="container">
        <?php
            $_SESSION['email'] ="";
            $_SESSION['error'] ="";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email= $_POST["email"];
                $_SESSION['email']=$email;
                $pass= md5($_POST["password"]);
                $qry="SELECT * FROM `user_details` WHERE `EMAIL`='$email'";
                $result = getData($qry);
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    if($pass == $row['PASSWORD']){
                        ?>
                        <script>
                          swal({
                         
                          text: "Welcome <?php echo $row['NAME'];?>!",
                          icon: "success",
                          button: "OK"
                          });
                          window.onclick = myFunction;
                          function myFunction() {
                            location.replace("lander.php");
                          }
                        </script>
                        <?php
                    }else{
                        $_SESSION['error'] ="Password is not matching";
                    }
                  }
                } else{
                    $_SESSION['error'] ="User not Found";
                }
            }
        ?>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" value="<?php echo $_SESSION['email'];?>" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <label style="color:red" for="error-message"><?php echo $_SESSION['error'];?></label>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
    </div>
    <a href="forgot.php">Forgot password?</a>
</body>
</html>