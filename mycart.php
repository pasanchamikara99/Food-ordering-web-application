<?php
	
	include 'config.php';

        error_reporting(0);



            session_start();
            $page = 'cart';
            include('usernavbar.php');

      
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-image: url(Images/menuback.jpg);
            color:white;
            size:cover;
            position:center;
        }

        table{
            color:white;
            width: 80%;
            border: 0.5px solid white;

        }
        table th,tr,td{
            text-align:center;
            border-bottom: 0.5px solid white;
            border-right: 0.5px solid white;
            height:50px;
        }

        table a{
            text-decoration: none;
            padding: 8px 5px;
            color:white;
            background-color:#BA4A00;
        }

        .order
        {
            background-color:teal;
        }
        .delete{
            background-color:crimson;
        }

        input
        {
            padding:8px 4px;
            text-align:center;
            font-size:15px;
            background-color:#BA4A00;
            color:white;
            font-weight:bolder;
            border:none;
        }
    </style>
    <title>Cart</title>
</head>
<body>
    
</body>
</html>


    <center>
        <br>
    <h2>My cart</h2>
    <br><br>

     
            
           
            <table>
                <?php 

                        $username = $_SESSION['username'];
                        $sql = "SELECT * FROM cart WHERE user_name = '$username'";

                        $result = mysqli_query($conn,$sql);

                        while($row = mysqli_fetch_array($result))
                        {
                            
                            $id = $row['id'];
                           
                            $total += $row['price'] *$row['qty'] ;
                            ?>
                            <tr>
                                
                                <td><img src="Images/<?=$row['food_image']?>" alt="Image" srcset="" width = "80px" height = "80px"></td>
                                <td><?php  echo $row['food_item'];?></td>
                                <td><?php  echo $row['food_catagory'];?></td>
                                <td>Rs <?php  echo $row['price'];?></td>
                                <td><?php  echo $row['qty'];?></td>
                                
                                <td>
                                <a href="deletecart.php?id=<?php echo $id ?>"  class = "delete">Remove Item</a>
                                <a href="order.php?id=<?php echo $id ?>"  class = "order">Order Item</a>   
                                <!--<button type = 'submit' onclick = 'deleteuser($id)'>Delete</button>-->
                                </td>

                            </tr>

                            <?php

                        }  
                        ?>  
                        <th colspan = "4"><h2>Total : </h2></th>
                        <th colspan = "2"><h4>Rs <?php echo $total; ?>.00</h4></th> 
                        <!--<th ><a href="order.php?id=<?php echo $username ?>"  class = "order">Order Items</a></th> </tr>  -->   
            </table>
        </center> 

        <br><br><br><br><br><br>
        <br><br><br><br><br><br>

<?php
  include('footer.php');
 ?>


</body>
</html>