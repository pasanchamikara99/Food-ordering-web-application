<?php
	

      session_start();
	  include '../config.php';
      $page = 'deals';
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
            <h2>Manage Deals</h2>
            <br>
            <a href="add-deals.php" class = "add">Add Deal Item</a><br><br>
            <center>
            <table>
                <tr>
                   
                    <th> Title</th>
                    <th>Price</th>
                    <th>Deal Image</th>
                    <th>Deal category</th>
                    <th>Actions</th>
                </tr>

                <tr>
                <?php
                            $sql = "SELECT * FROM deals";
                            

                            $result = mysqli_query($conn,$sql);

                            while( $row = mysqli_fetch_array($result))
                            {
                                 $id = $row['deal_id'];
                                    ?><tr>
                                        <td><?php echo $row['deal_name']?></td>
                                        <td><?php echo $row['deal_price']?></td>
                                        <td><img src="../Images/<?=$row['deal_image']?>" alt="Image " srcset="" width = "150px" height = "150px"></td>
                                        <td><?php echo $row['catagory_name']?></td>
                                        <td><a href="deletedeal.php?id=<?php echo $id ?>" class = "delete">Delete Deal</a></td>
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