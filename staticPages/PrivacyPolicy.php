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
    <title>Privacy Policy</title>
       

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
            width:100%;
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
                        
            <h2>Privacy Policy</h2>
            </center>
            <p>
                Company may use your personal information for any of the following purposes,
                <br><br>
                : to improve our site (improve our products and services)<br>
                : to protect the security or intergrity of the site<br>
                : to personalize user experience<br>
                : to improve customer services<br>
                : to maintain our service<br>
                : to contact you<br>

                <br><br>
                Types of Data Collected
                <br><br> 
                : Email address<br>
                : First name and last name<br>
                : Phone number<br>
                : Address<br>

                <br><br>
                Security of your personal data
                <br><br>
                The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.<br>

                <br><br>
                If you have any questions about this Privacy Policy, You can ask through,<br>
                : happymeal@email.com

                    
            </p>
            
           
        
        
</body>
</html>
    


