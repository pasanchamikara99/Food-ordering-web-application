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
    <title>Terms and Conditions</title>
       

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
                        
            <h2>Terms and Conditions</h2>
            </center>
            <p>
                These terms and conditions apply to the web site www.happymeal.com,
                <br><br>
                Privacy Policy of happymeal.com (hereinafter referred to as either, Company, We, Us, or Our) 
                is committed to protecting the privacy of personal information you may provide us on this website 
                (the site). We believe it is important for you to know how we treat your personal information. 
                The terms of this Privacy Policy apply to all users of this site. If you do not agree with the 
                terms of this Privacy Policy, you should immediately cease the use of this site.<br>

                <br><br>
                Transaction Currency
                <br><br>
                All prices are mentioned in Sri Lankan Rupees (Rs.) and you will be charged based on the 
                prevailing exchange rate.<br>

                <br><br>
                Customer's Information
                <br><br>
                Company collects personally identifiable information that you may voluntarily provide on 
                online forms, which may include your name, contact details, email address, postal address 
                and other online activities. Personal information collected on this site can include some or 
                all of the following: your name, address, telephone number, email addresses, demographic 
                information, and any other information you may voluntarily provide. You will have the choice 
                whether or not to disclose such personal information in the above activities; however, some 
                parts of the site and some services may be more difficult or impossible to use if you choose 
                not to disclose personal information.<br>

                <br><br>
                Contact details of Happymeal.com
                <br><br> 
                Email address : happymealrest@hotel.com<br>
                Head office Tel.No : +94 412224789<br>
                Delivery Hotline : 0715648965<br>    
            </p>
            
           
        
        
</body>
</html>
    


