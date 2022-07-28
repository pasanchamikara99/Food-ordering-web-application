<?php

    session_start();
    include '../config.php';
    
    /*if(!isset($_SESSION['username']))
    {
        include("../unregusernavbar.php");
    }
    else
    {
        include('../usernavbar.php');
    }*/

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../style/navbar.css">
    <title>About Us</title>
       

    <style>

        body{
            background-image: url(../Images/menuback.jpg);
            background-position: center;
            background-size: cover;
        }
        h2
        {
            margin:2rem;
            font-size:40px;
            color:#BA4A00;
           
        }

        p{
            width:60%;
            font-size:20px;
            color: white;
        }

        .navbar
        {
            min-height:80px;
        }

        .navbar .navbarname a{
            text-decoration:none;
            color:white;
            font-size:22px;
        }

        table{
            width:70%;
            font-size:20px;
            color:white;
        }
        table i{
            color:#BA4A00;
            background-color:white;
            padding:8px;
            border-radius:20px;
        }
     
    </style>


</head>
<body>
    <header>
        <div class="navbar">

            <div class="navbarname">
                <a href="../index.php"><i id="nameicon" class="fas fa-hamburger"></i>happymeals.com</a>
            </div> 
    </header>

    <center>
        <h2>Our Locations</h2>
        <br><br><br>

        <table>
                <tr>
                    <td><h3>Galle</h3><br><i id="icon" class="fas fa-phone"></i>  091 - 4578963<br><br><i class="fas fa-map-marker-alt"></i>  95/3,Gajasinghe road,Galle<br></td>
                    <td><h3>Matara</h3><br><i id="icon" class="fas fa-phone"></i>  041 - 2224789<br><br><i class="fas fa-map-marker-alt"></i>  45,Galle road,Matara<br></td>
                    <td><h3>Kandy</h3><br><i id="icon" class="fas fa-phone"></i>  051 - 4578963<br><br><i class="fas fa-map-marker-alt"></i>  15/3,Maddumabandara road,Kandy<br></td>
                </tr>

        </table>
    </center>
  

           
        
        
</body>
</html>
    


