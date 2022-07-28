<?php

include '../config.php';


session_start();

    //get value
    include('adminnav.php');
    $id = $_GET['id'];


    //sql query

    $sql = "DELETE FROM users WHERE id = '$id'";

    $result = mysqli_query($conn , $sql);

    if($result)
    {
        
        echo "<script>
                    if(confirm('are you sure'))
                    {
                        alert('Delete  User Successfully');
                        window.location.href = 'admin.php';
                    }
                    
            </script>";

    }
    else
    {
        $_SESSION['deleteMessage'] = 'failed to delete User';
        header("Location:admin.php");
    }


?>
