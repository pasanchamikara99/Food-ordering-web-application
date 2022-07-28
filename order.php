<?php
    include 'config.php';

    session_start();

    error_reporting(0);

    if(!isset($_SESSION['username']))
     {
        $_SESSION['login'] = "Please Log in to system";
        header("Location:login.php");
     }
     else
     {
         include('usernavbar.php');
     }

    $username = $_SESSION['username'];


    $sql = "SELECT * FROM users WHERE username = '$username' limit 1";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        while($row = mysqli_fetch_array($result))
        {
            $email = $row['email'];
            $phoneNo = $row['phoneNo'];
        }
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/footer.css">
    
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
            body
            {
                    color:white;
                    background-image: url(Images/menuback.jpg);
                    background-position: center;
                    background-size: cover;
            }
            form{
                padding: 10px;
                width: 450px;
                min-height: 400px;
                border-radius: 5px;
                padding: 20px 30px;
                border-style: solid;
                border-color: white;
                margin: 4rem auto;
                font-weight: bold;
                color: white;
                align-items: center;
                justify-content: center;
            }
            input[type = submit]
            {
                padding: 12px 6px;
                text-align: center;
                border: none;
                border-radius: 20px;
                font-size: 17px;
                width: 50%;
                margin-left: 6rem;
                background-color: #BA4A00;
                color: white;
                font-weight: bold;
                margin-bottom: 20px;

            }
            h3{
                text-align: center;
                padding: 10px;
                margin-bottom: 30px;
                font-size: 30px;
            }
            .order{
                display:flex;
            }
           input[type = text],
           input[type = email]
            {
                margin-left: 1rem;
                padding: 14px 7px;
                width: 95%;
                margin-bottom: 15px;
                border-style: solid;
                border-color: white;
                border-radius: 8px;
                font-size: 17px;
            }
            input[type = radio]
            {
                margin:15px;
            }

            table{
                width:30%;
                text-align:center;
                max-height:250px;
            }
    </style>
    
    
    <title>order details</title>
</head>
<body>

<div class="order">



            <table>
                <?php        
            
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM cart WHERE user_name = '$id'  OR id = '$id'";
                    $result = mysqli_query($conn,$sql);

                    if($result)
                    {
                       
                        while($row = mysqli_fetch_array($result))
                        {
                            $f_name = $row['food_item'];
                            $f_qty= $row['qty']; 
                            ?>
                            <tr>
                            <td><img src="Images/<?=$row['food_image']?>" alt="Image" srcset="" width = "60px" height = "60px"></td>
                            <td><?php  echo $row['food_item'];?></td>
                            <td><?php  echo $row['qty'];?></td>
                            <td>Rs <?php  echo $row['price']*$row['qty'];?></td>
                            </tr>
                            <?php

                            $total += $row['price']*$row['qty'];
                        }
                    }
            
                ?>  
                 <tr>
                     <td colspan = "3">Total </td>
                     <td>Rs <?php echo $total ?></td>
                </tr>
     </table>


        <form action="" method = "POST" class="loginfrom"> 
            <h3>Order Details</h3>
            <input type="text" placeholder="username" name = "username" value = "<?php echo $username?>" required>

            <input type="email" placeholder="email" name = "email"  value = "<?php echo $email?>" required>

            <input type="text" placeholder="phone no" name = "Phone_No"  value = "<?php echo $phoneNo?>" required>

            <input type="text" placeholder="address" name = "address" value = "<?php echo $address?>" required>

            <br>
            <label for="">Cash On Delivery</label><input type="radio"  name = "payment" value =  "cash on delivery" required>
            <label for="">Card</label><input type="radio"  name = "payment" value =  "card" required>

           <!-- <input type="text" placeholder="card No" name = "card No"  dissabled> -->

            

            <br>

            <input name = "submit" type="submit" value="Order">

           
        </form>



      <?php  
            if(isset($_POST['submit']))
            {
                $address = $_POST['address'];
                $paymentmethod = $_POST['payment']; 

                    $sql = "INSERT INTO orders(user_name,food_name,quentity,Address,phone_no,payment_method,amount) VALUES('$username','$f_name','$f_qty','$address','$phoneNo','$paymentmethod','$total')";
                    $result = mysqli_query($conn,$sql);

                    if($result)
                    {
                        echo "<script>
                        alert('Order confirmed Successfully');
                        window.location.href = 'mycart.php';
                         </script>";


                        $sql = "DELETE FROM cart WHERE id = '$id'";
                        $result = mysqli_query($conn , $sql);
                    }
                    else
                    {
                        echo "<script>alert('oopz !! something went wrong !');</script>";
                    }
              
            }
    ?>



</div>      







 
    
</body>
</html>