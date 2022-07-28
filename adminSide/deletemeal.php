<?php

include '../config.php';


session_start();

    
    include('adminnav.php');
    //get value
    $id = $_GET['id'];


    //sql query
    $sql = "DELETE FROM food_items WHERE food_id = '$id'";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
       
        echo "<script>
                    if(confirm('are you sure'))
                    {
                        alert('Delete  food item Successfully');
                        window.location.href = 'admin-food.php';
                    }
                    else
                    {
                        window.location.href = 'admin-food.php';
                    }
                    
            </script>";
    }
    else
    {
        $_SESSION['deleteMessage'] = 'failed to delete food item';
        header("Location:admin-food.php");
    }


?>
