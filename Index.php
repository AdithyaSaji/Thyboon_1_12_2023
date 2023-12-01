<?php
  include_once "header.php";
?>
<html>
  <body>
    <head>
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <style> 
       .content .login-btn {
          padding: 15px 30px;
          font-size:16px;

       }
       .content{
        margin-top:20px;
       }
       .login-btn{
        background-image: linear-gradient(45deg, #547bf2, #460ade);
    } 

      .content p{
          margin: 10px 0 30px;
          padding:15px;
          color: #333;
          animation-delay: 0.5s;
          text-align: justify;
      }
      @media only screen and (max-width: 600px){
           .logo{
                  width: 100px;
           }         
  }
      </style>  
    </head>

  <div class="content">
        <h1 class="anim">Simplifying the supply chain</h1>
        <p class="anim">Thyboon provides Companies all over the world with unparalleled supply chain agility and resiliency. 
        With fast, confident decision-making, we're revolutionizing planning across integrated business planning and the digital supply chain. 
        We combine human intelligence with artificial intelligence and concurrent planning to assist businesses in planning for any future, 
        monitoring risks and opportunities, and responding at the speed of change.</p>
        <p>Thyboon provides Companies all over the world with unparalleled supply chain agility and resiliency. 
        With fast, confident decision-making, we're revolutionizing planning across integrated business planning and the digital supply chain. 
        We combine human intelligence with artificial intelligence and concurrent planning to assist businesses in planning for any future, 
        monitoring risks and opportunities, and responding at the speed of change.</p>
        <p>Thyboon provides Companies all over the world with unparalleled supply chain agility and resiliency. 
        With fast, confident decision-making, we're revolutionizing planning across integrated business planning and the digital supply chain. 
        We combine human intelligence with artificial intelligence and concurrent planning to assist businesses in planning for any future, 
        monitoring risks and opportunities, and responding at the speed of change.</p>


        <a href="services.php"><button class="login-btn anim">Learn More</button></a>
        <a href="login.php" ><button class="login-btn anim">Click for a Quote</button></a>
  </div>
      <!-- <img src="images/plain3.jpg" class="Feature-img anim">
      <img src="images/ship2.jpg" class="Feature-img1 anim">
      <img src="images/train1.jpg" class="Feature-img2 anim"> -->
    <!-- </div> -->
  </body>
  <?php
  include_once "footer.php";
   ?>
</html>