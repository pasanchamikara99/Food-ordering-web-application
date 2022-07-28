<?php
	

	  include '../config.php';


      session_start();
      $page = 'contact';
      include('adminnav.php');
?>

<div class="managerUser">
            <h2>User Complains</h2>
            <br>
            <center>
                <table>
                        <tr>
                            <th>User Name</th>
                            <th>User E-mail</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
    


                        <?php
                            $sql = "SELECT * FROM tb_contact";

                            $result = mysqli_query($conn,$sql);

                            while( $row = mysqli_fetch_array($result))
                            {
                                 $id = $row['ID'];
                                    ?><tr>
                                        <td><?php echo $row['U_name']?></td>
                                        <td><?php echo $row['U_mail']?></td>
                                        <td><?php echo $row['Sub']?></td>
                                        <td><?php echo $row['Msg']?></td>
                                        <td><?php echo $row['date']?></td>
                                        
                                    </tr>
                                    <?php
                            }
                        
                        ?>

                </table>
            </center>
                                
                        </div>

