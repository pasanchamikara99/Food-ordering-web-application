<?php 

 $server = "localhost:3307";
 $user = "root";
 $pass = "";
 $database = "happy_meal";


 $conn = mysqli_connect($server,$user,$pass,$database);


 if(!$conn)
 {
     echo "<script>alert('Connection faild')</script>";
 }


?>