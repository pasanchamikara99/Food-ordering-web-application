<?php
	
	  include '../config.php';


      session_start();
      $page = 'order';
      include('adminnav.php');
?>



     <div class="managerUser">

     <?php 
     
            if(isset($_SESSION['deleteMessage']))
            {
                echo $_SESSION['deleteMessage'];
                unset($_SESSION['deleteMessage']);
            }
     ?>

     <h2>Orders</h2>
            <br><br>
            
            <center>
            <table>
                <tr>
                    <th>order ID</th>
                    <th>User Name</th>
                    <th>Meal item</th>
                    <th>Quantity</th>
                    <th>Address</th>
                    <th>Payment Method</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>


                <?php 
                        $sql = "SELECT * FROM orders";

                        $result = mysqli_query($conn,$sql);



                        while( $row = mysqli_fetch_array($result))
                        {
                            $id = $row['id'] ;
                            ?>
                            <tr>
                                <td><?php  echo $row['id'] ;?></td>
                                <td><?php  echo $row['user_name'];?></td>
                                <td><?php  echo $row['food_name'];?></td>
                                <td><?php  echo $row['quentity'];?></td>
                                <td><?php  echo $row['Address'];?></td>
                                <td><?php  echo $row['payment_method'];?></td>
                                <td>Rs <?php  echo $row['amount'];?></td>
                               <td><?php echo $row['date']; ?></td>
                            </tr>

                            <?php

                        }

                       
                
                ?>
                
            </table>
            </center>
            
     </div>








</body>
</html>