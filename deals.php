<?php
     session_start();

     include 'config.php';

     $page = 'deals';
     

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
    <title>Deals Page</title>

      <style>
          h2,h3,h5{
              color:white;
          }

          .containerOne a{
              font-size:18px;
              color:white;
              padding:4px;
              background-color:#BA4A00;
              border-radius:15px;
          }
          .containerOne a:hover{
            padding-bottom: 1px;
          }


      </style>

</head>
<body>
    
     
            <!--<div class="search">
                <input type="search" name = "search" placeholder = "Search Here">
               <button name = "search">
                    <i class = "fas fa-search"></i>
               </button>
            </div>-->

            <h5> <?php  if(isset($_SESSION['addtocart']))
                {   echo $_SESSION['addtocart']; 
                    unset($_SESSION['addtocart']);
                } ?> 
                
            </h5>

            <br> <br>

            <div class="cuisineselection">
                        <h1><?Php echo 'Deals' ?></h1>
                        <br><br><br>

                <div class="containerOne">
                    <?php
                       
                       
                        $sql = "SELECT catagory_name FROM deals";
                        $result = mysqli_query($conn,$sql);

                        while( $row = mysqli_fetch_array($result))
                        {
                             

                            //get fooditems from fooditems table food_catagory = catagory
                            $sql = "SELECT * FROM deals ";  
                            $result = mysqli_query($conn,$sql); 


                            while($row = mysqli_fetch_array($result))
                            {
                                $fid = $row['deal_id'];
                                ?>

                                <div class="boxOne float-container">

                                    <img src="Images/<?=$row['deal_image']?>"  class = "img-res" alt="" srcset="" width = "200px" height = "200px">
                                    
                                    <h2><?php echo $row['deal_name']?><h2>

                                    <h3>Rs <?php echo $row['deal_price']?><h3>
                                    <a href="addTocartdeals.php?id=<?php echo $fid ?>" class = "addtocart" ><i class = "fa fa-shopping-cart"></i>  Add To Cart</a>
                                    
                                </div>
                                <?php
                            }
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