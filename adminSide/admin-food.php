<?php

      session_start();
	  include '../config.php';
      $page = 'food';
      include('adminnav.php');

?>

<?php 
     
            if(isset($_SESSION['deleteMessage']))
            {
                echo $_SESSION['deleteMessage'];
                unset($_SESSION['deleteMessage']);
            }
     ?>


     <div class="managerUser">
            <h2>Manage Food</h2>
            <br>
            <a href="add-fooditem.php" class = "add">Add Meal Item</a><br><br>
            <center>
            <table>
                <tr>
                   
                    <th>Food Title</th>
                    <th>Price</th>
                    <th>Food Image</th>
                    <th>Food category</th>
                    <th>Actions</th>
                </tr>

                <tr>
                <?php
                            $sql = "SELECT * FROM food_items";
                            $result = mysqli_query($conn,$sql);

                            while( $row = mysqli_fetch_array($result))
                            {
                                 $id = $row['food_id'];
                                    ?><tr>
                                        <td><?php echo $row['food_name']?></td>
                                        <td><?php echo $row['food_price']?></td>
                                        <td><img src="../Images/<?=$row['food_image']?>" alt="Image " srcset="" width = "150px" height = "150px"></td>
                                        <td><?php echo $row['food_catagory']?></td>
                                        <td><a href="deletemeal.php?id=<?php echo $id ?>" class = "delete">Delete FoodItem</a>
                                        <a href="updatemeal.php?id=<?php echo $id ?>" class = "update">Updates FoodItem</a></td>
                                    </tr>
                                    <?php
                            }
                        
                        ?>
                    
                </tr>

            </table>
            </center>
            
     </div>








</body>
</html>