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
    <title>Delivery Coverage</title>
       

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
                        
            <h2>Important Information about your Order</h2>
            </center>
            <p>
                Products 
                <br><br>
                : Products available for delivery are listed on the website, are subject to availability 
                and may change without prior notice.<br>
                : Prices of products may change at the discretion of The happymeal.com<br>

                <br><br>
                Delivery charges, Delivery times and Payment
                <br><br>
                : A delivery charge of Rs. 300 will be added to the final pricing. The delivery charge may 
                change at the discretion of The happymeal.com.<br>
                : We accept VISA/Master Debit and Credit cards, or cash on delivery as payment.<br>
                : Time of delivery is stated as an estimate only and may vary depending on factors 
                such as distance, traffic etc.<br>
                : In case of an unusual delay due to unforeseen circumstances, the customer will be contacted and kept informed.<br>

                <br><br>
                Delivery Locations
                <br><br>
                : Colombo<br>
                : Matara<br>
                : Galle<br>
                : Kandy<br>
                (Deliveries outside of these areas may be subject to a higher delivery charge. Such deliveries can be
                 arranged by calling the phone number given.)<br>
                (Delivery Hotline : 0715648965)<br>

                <br><br>
                Cancellation and Refund Policy
                <br><br> 
                Once order is placed and confirmed, it cannot be cancelled by the guest and is not refundable<br>   
            </p>
            
           
        
        
</body>
</html>
    


