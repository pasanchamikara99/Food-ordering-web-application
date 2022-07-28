<?php
     session_start();
	  include 'config.php';
      $page = 'home';
     

    

      if(!isset($_SESSION['username']))
      {
          include("unregusernavbar.php");
      }
      else
      {
          include('usernavbar.php');
      }
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/index.css">
    <title>Index Page</title>

      <style>
         
                .second h2{
                    font-family: 'Poppins', sans-serif;
                }
      </style>

</head>
<body>
   




        <div class="coverImage">         
                <h2>Order From</h2>
                <h1>happymeals Resturant</h1>
                <h3>Enjoy mouth-watering dishes from our handcrafted</h3>
                <h3>food delivery menus at happymeals Resturant</h3>
                <br>
                <a href="menu.php">Check Menu</a>                    
        </div>




        <div class="second">

            <center>
            <h4>RELISH EXQUISITE FLAVOURS RIGHT AT YOUR HOME</h4> <br>
            <h2>Flavours of the world brought to you, by happymeals!</h2><br>

            <h6>happymeals resturant brings flavours of the world, right to your doorstep!
            Bring the ultimate food experience to the comfort and safety of your home, from our star class restaurant.</h6>
            </center>

        </div>


        <div class="third">

            <center>
                
                <h2>Food Orders are delivered daily from</h2>

                <h4>11.00 A.M - <i class="fas fa-clock"></i> - 11.30 P.M</h4>
            </center>
                
        </div>


        <div class="four">

            <div class="icon">

                    <center>
                        <img src="Images/chef.png" alt="chef" srcset="">
                        <h4>Safety</h4>
                        <h5>Stringent protocols are followed infood preparation and handling</h5>
                    </center>
                        
            </div>
            <div class="icon">
                    <center>
                        <img src="Images/car.png" alt="chef" srcset="">
                        <h4>Delivery</h4>
                        <h5>Deliveries are made solely by resturant staff members</h5>
                    </center>
            </div>
            <div class="icon">
                    <center>
                        <img src="Images/5star.png" alt="chef" srcset="">
                        <h4>Quality</h4>
                        <h5>star quality and service</h5>
                    </center>
            </div>
    
        </div>
        

  





      <!--Footer-->
      <?php
       include('footer.php');
      
      ?>
      
</body>
</html>
</body>
</html>