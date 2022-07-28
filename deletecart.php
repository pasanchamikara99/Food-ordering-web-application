<?php

include 'config.php';


session_start();

    //get value
    $id = $_GET['id'];


    //sql query
    $sql = "DELETE FROM cart WHERE id = '$id'";

    $result = mysqli_query($conn , $sql);

    if($result)
    {
        
        echo "<script>
                    if(confirm('are you sure'))
                    {
                        alert('Delete  meal item Successfully');
                        window.location.href = 'mycart.php';
                    }
                    
            </script>";
    }
    else
    {
        echo "<script>
        
            alert('fail');
            window.location.href = 'mycart.php';
        </script>";
                    
    }


?>
