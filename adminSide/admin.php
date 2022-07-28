<?php
	
	  include '../config.php';


      session_start();
      $page = 'user';
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

     <h2>Manage User</h2>
            <br><br>
            
            <center>
            <table>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>E - mail</th>
                    <th>Actions</th>
                </tr>


                <?php 
                        $sql = "SELECT * FROM users WHERE userType = 'customer'";

                        $result = mysqli_query($conn,$sql);



                        while( $row = mysqli_fetch_array($result))
                        {
                            $id = $row['id'] ;
                            ?>
                            <tr>
                                <td><?php  echo $row['id'] ;?></td>
                                <td><?php  echo $row['username'];?></td>
                                <td><?php  echo $row['email'];?></td>
                                <td>
                                    <a href="deleteuser.php?id=<?php echo $id ?>" class = "delete">Delete User</a>
                                   <!-- <a href="#" class = "update">Update User</a>

                                    <button type = 'submit' onclick = 'deleteuser($id)'>Delete</button>-->
                                </td>

                            </tr>

                            <?php

                        }

                       
                
                ?>
                
            </table>
            </center>
            
     </div>








</body>
</html>