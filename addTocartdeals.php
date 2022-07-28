<?php
     session_start();

     include 'config.php';

     $page = 'menu';
     if(!isset($_SESSION['username']))
     {
        $_SESSION['login'] = "Please Log in to system";
        header("Location:login.php");
     }
     else
     {
        $username=  $_SESSION['username'];

        $sql = "SELECT * FROM users WHERE  username = '$username' limit 1";
        $result = mysqli_query($conn,$sql);

            if($result)
            {
                while( $row = mysqli_fetch_array($result))
                {
                    $userID = $row['id'];
                    //$username = $row['username'];

                    $id = $_GET['id'];

                $sql = "SELECT * FROM deals WHERE deal_id = '$id'";
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
                            $qty = 1;
                            $foodimage = $row['deal_image'];
                            $foodid = $row['deal_id'];
                            $foodname = $row['deal_name'];
                            $foodcatagory = $row['catagory_name'];
                            $foodprice = $row['deal_price'];

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

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!--<link rel="stylesheet" href="style/menu.css">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>

      <style>
          h2,h3{
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
    
            <br> <br>

            <div class="cuisineselection">
                        <h1>Cart</h1>
                        <br><br><br>

                <div class="containerOne">
                    <?php
                       
                       
    
                    ?>    

                </div>
            </div>

     <br><br><br><br><br><br>

     <?php
       include('footer.php');
      ?>


</body>
</html>