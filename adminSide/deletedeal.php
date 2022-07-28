<?php

include '../config.php';


session_start();

    //get value
    include('adminnav.php');
    $id = $_GET['id'];


    //sql query

    $sql = "DELETE FROM deals WHERE deal_id = '$id'";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
        $_SESSION['deleteMessage'] = 'Deleted Deal Successfully';
        header("Location:admin-deals.php");
    }
    else
    {
        $_SESSION['deleteMessage'] = 'Failed to delete the Deal';
        header("Location:admin-deals.php");
    }


?>
