<?php
     session_start();

     include 'config.php';

     $page = 'menu';
      
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
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
</head>
<body>
    
     
            <!--<div class="search">
                <input type="search" name = "search" placeholder = "Search Here">
               <button name = "search">
                    <i class = "fas fa-search"></i>
               </button>
            </div>-->

            <br> <br>

            <div class="cuisineselection">
                        <h1>Cuisine Selection</h1>
                        <br><br><br>

                    <div class="containerOne">

                    


                    <?php
                        $sql = "SELECT * FROM food_catagory";

                        $result = mysqli_query($conn,$sql);

                        while( $row = mysqli_fetch_array($result))
                        {
                            $id = $row['catagory_ID'];
                                ?> 
                                <div class="boxOne float-container">
                                    <img src="Images/<?=$row['image_name']?>"  class = "img-res" alt="" srcset="">
                                    <a href="fooditems.php?id=<?php echo $id ?>" class =  "float-text"><?php echo $row['catagory_name']?></a>
                                </div>
                                <?php
                        }
    
                    ?>    

                    </div>
            </div>


























     <br><br><br><br><br><br>

     <?php
       include('footer.php');
      ?>


</body>
</html>