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
            color: white;;
            padding:25px;
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
                        
            <h2>About Us</h2>
            <p>
                happymeals,a subsidiary of Yum!Generations of Sri Lankans have grown up
                with various flavours and we’ve always valued our customer relationships
                and pay tribute to all those who have believed in us we always try our
                best for provide what actually customer wish.<br /><br />
                We started our first store with five members and it was over a one year
                ago.we make sure every item of food we produce for our customer has that
                extra bit of personal commitment and care.In the very begining we only
                started with dine-in and now we have provided fast delivery for our
                customers.
            </p>
            </center>
           
        
        
</body>
</html>
    


