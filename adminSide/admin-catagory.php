<?php

      include '../config.php';

    

      session_start();
	

      $page = 'catagory';
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
            <h2>Manage category</h2>
            <br>
            <a href="add-catagory.php" class = "add">Add category Item</a><br><br>
            <center>
                <table>
                        <tr>
                            <th>Category ID</th>
                            <th>Category Title</th>
                            <th>Category Image</th>
                            <th>Actions</th>
                        </tr>
    


                        <?php
                            $sql = "SELECT * FROM food_catagory";

                            $result = mysqli_query($conn,$sql);

                            while( $row = mysqli_fetch_array($result))
                            {
                                 $id = $row['catagory_ID'];
                                    ?><tr>
                                        <td><?php echo $row['catagory_ID']?></td>
                                        <td><?php echo $row['catagory_name']?></td>
                                        <td><img src="../Images/<?=$row['image_name']?>" alt="Image " srcset="" width = "250px" height = "250px"></td>
                                       <td> <a href="deletecatagory.php?id=<?php echo $id ?>" class = "delete">Delete Category</a></td>
                                    </tr>
                                    <?php
                            }
                        
                        ?>

                </table>
            </center>
                                
    </div>








</body>
</html>