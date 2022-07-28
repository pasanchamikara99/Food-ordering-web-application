<?php
     session_start();
	  include 'config.php';
     
      if(isset($_SESSION['username']))
      {
          include("usernavbar.php");
      }
      else
      {
        
         header("Location:index.php");
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
    <title>My account</title>

    <style>
        body{
            background-image:url("Images/menuback.jpg");
            size:cover;
            position:center;
            color:white;
        }
        table{
            width:80%;
            border:1px solid white;
            min-height:50px;
        }

        table th{
            border:1px solid white;
        }

    </style>
</head>
<body>

<center>
    <br>

        <h2>Account Details</h2><br><br>

   <table>
            <?php 

                $username= $_SESSION['username'];
                $sql = "SELECT * FROM users WHERE username = '$username'";
                $result = mysqli_query($conn,$sql);

                if($result)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                           ?><tr>
                               <th><?php echo $row['username'];?></th>
                               <th><?php echo $row['phoneNo'];?></th>
                               <th><?php echo $row['email'];?></th>
                            </tr>
                            <?php
                    }
                }
                else
                {
                    echo "<script>alert('fail');</script>";
                }
            ?>
    </table>

    <br><br>
    <h2>Order History</h2><br><br>

    <table id="table">
        <tr>
            <th>Order ID</th>
            <th>Meal Item</th>
            <th>Quantity</th>
            <th>Amount</th>
            
        </tr>

    <?php

    

    $username= $_SESSION['username'];
    $sql = "SELECT * FROM orders WHERE user_name = '$username'";
    $result = mysqli_query($conn,$sql);

    if($result)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                        $id = $row['food_name'];
                           ?><tr>
                               <th><?php echo $row['id'];?></th>
                               <th><?php echo $row['food_name'];?></th>
                               <th><?php echo $row['quentity'];?></th>
                               <th>Rs <?php echo $row['amount'];?></th>
                               
                            </tr>
                            <?php
                    }
                }
    ?>

</table>

</center>


     
      
</body>
</html>
</body>
</html>