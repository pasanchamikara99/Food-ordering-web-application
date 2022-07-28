<?php

include '../config.php';


session_start();

    //get value
    include('adminnav.php');
    $id = $_GET['id'];


    //sql query
    $sql = "DELETE FROM food_catagory WHERE catagory_ID = '$id'";

    $result = mysqli_query($conn , $sql);

    if($result)
    {

        echo "<script>
                    if(confirm('are you sure'))
                    {
                        alert('Delete  catagory Successfully');
                        window.location.href = 'admin-catagory.php';
                    }
                    
            </script>";
    }
    else
    {
        $_SESSION['deleteMessage'] = 'fail to delete catagory';
        header("Location:admin-catagory.php");
    }


?>
