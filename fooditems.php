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



      //display catagory part
      $id = $_GET['id'];
      $sql = "SELECT catagory_name FROM food_catagory WHERE catagory_ID = '$id' limit 1;";
      $result = mysqli_query($conn,$sql);

      while($row = mysqli_fetch_array($result))
      {
          $catagory = $row['catagory_name'];
      }






      //add to cart part

      if(isset($_POST['addtocart']))
      {
            $qty = $_POST['qty'];

            $id = $_GET['id'];
            
            if(!isset($_SESSION['username']))
                {
                    $_SESSION['login'] = "Please Log in to system";
                    header("Location:login.php");
                }
            else
            {
                $username =  $_SESSION['username'];

                $sql = "SELECT * FROM users WHERE  username = '$username' limit 1";
                $result = mysqli_query($conn,$sql);

                    if($result)
                    {
                        while( $row = mysqli_fetch_array($result))
                        {
                            $userID = $row['id'];
                            //$username = $row['username'];

                            $id = $_GET['id'];

                            $sql = "SELECT * FROM food_items WHERE food_id = '$id'";
                            $result = mysqli_query($conn,$sql);


                            if($result)
                            {

                                $sql2 = "SELECT * FROM cart WHERE food_id = '$id' AND user_name = '$username'";
                                $result2 = mysqli_query($conn,$sql2);

                                if(mysqli_num_rows($result2)> 0)
                                {
                                    $_SESSION['addtocart'] = "alredy in cart";
                                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                                }
                                else
                                {
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        $foodid = $row['food_id'];
                                        $foodimage = $row['food_image'];
                                        $foodname = $row['food_name'];
                                        $foodcatagory = $row['food_catagory'];
                                        $foodprice = $row['food_price'];

                                        $sql = "INSERT INTO cart(user_id,user_name,food_image,food_id,food_item,food_catagory,price,qty) VALUES ('$userID','$username','$foodimage','$foodid','$foodname','$foodcatagory','$foodprice','$qty')";  
                                        $result =  mysqli_query($conn,$sql);

                                        if($result)
                                        {
                                            $_SESSION['addtocart'] = "Add to cart sucessfully";
                                            header('Location: ' . $_SERVER['HTTP_REFERER']);
                                        }
                                        else
                                        {
                                            echo "<script>alert('add to cart fail !!!!')</script>";
                                        }
                                    }

                                 }
                        
                            
                            }
                        }
                    }
        }
        
            
                
            
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
        input[type = number]
        {
            padding:4px 2px;
            text-align:center;
            font-size:12px;
            color:white;
            background-color:#BA4A00;
            font-weight:bolder;
            border:none;
        }
        button
        {
            padding:8px 6px;
            width :75%;
            text-align:center;
            font-size:18px;
            color:white;
            font-weight:bold;
            background-color:#BA4A00;
            border:none;
         

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
                        <h1><?Php echo $catagory ?></h1>
                        <br><br><br>

                <div class="containerOne">
                    <?php
                       
                       //get catagory name from food_catagory table
                        $sql = "SELECT * FROM food_catagory WHERE catagory_ID = '$id' limit 1;";
                        $result = mysqli_query($conn,$sql);

                        while( $row = mysqli_fetch_array($result))
                        {
                            $catagory = $row['catagory_name']; //store food catagory name to caragory variable

                            //get fooditems from fooditems table food_catagory = catagory
                            $sql = "SELECT * FROM food_items WHERE food_catagory = '$catagory';";  
                            $result = mysqli_query($conn,$sql); 


                            while($row = mysqli_fetch_array($result))
                            {
                                $fid = $row['food_id'];
                                ?>

                                <div class="boxOne float-container">

                                <form action="?id=<?php echo $fid ?>" method = "POST">

                                    <img src="Images/<?=$row['food_image']?>"  class = "img-res" alt="" srcset="" width = "200px" height = "200px">
                                    
                                    <h2><?php echo $row['food_name']?><h2>

                                    <h3>Rs <?php echo $row['food_price']?><h3>
                                    <input type="number"  value = "1" min="1" max="100" name = "qty"><br><br>
                                    <button type = "submit" name = "addtocart">
                                    <i class = "fa fa-shopping-cart"></i>  Add to cart
                                    </button>
                                   
                                    </form>
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