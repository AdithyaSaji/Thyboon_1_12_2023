<html>
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="/css/bootstrap.css">
      <styles class="css"></styles>
      <link rel="stylesheet" href="style.css">
<body>
<div class="hero">
      <nav>
        <img src="Images/logo(2).jpg" class="logo">
        <ul>
          <li><a href="Index1.html">Home</a></li>
          <li><a href="aboutus.html">About Us</a></li>
          <li><a href="Services.html">Services</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="Contactus.html">Contact Us</a></li>
        </ul>
      </nav>
      <div>
            <title>login</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class ="container">
      <div class ="card">
        <div class ="inner-box" id="card">
          <div class ="card-front">
            <h2>LOGIN</h2>
            <form>
              <input type="email" class="input-box" placeholder="Your Email ID"Required>
              <input type="password" class="input-box" placeholder="Password"Required>
              <button type="submit" class="submit-btn">Submit</button>
              <input type="checkbox"><span>Remember me</span>
            </form>
            <button type="button" class="btn" onclick="openRegister()"> I'M New Here</button>
            <a href="">Forgot Password</a>
          </div>
          <div class ="card-back">
            <h2>REGISTER</h2>
            <form>
              <input type="text" class="input-box" placeholder="Your Name"Required>
              <input type="password" class="input-box" placeholder="Password"Required>
              <button type="submit" class="submit-btn">Submit</button>
              <input type="checkbox"><span>Remember me</span>
            </form>
            <button type="button" class="btn" onclick="openlogin()"> I Have an Account</button>
            <a href="">Forgot Password</a>
          </div>
        </div>
      </div>
    </div>
    <script>
      var card = document.getElementById("card");

      function openRegister(){
        card.style.transform = "rotateY(-180deg)";
              }
      function openlogin(){
        card.style.transform = "rotateY(0deg)";
              }

    </script>

  </body>
</html>