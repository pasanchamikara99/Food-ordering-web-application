
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/index.css">
    <script src="script/noodleCustomize.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home Page</title>

    <style>
        .navBarTitles{
            width :20%;
        }
        
    </style>
</head>
<body>
  <header>
    <div class="navbar">

        <div class="navbarname">
            <p><i id="nameicon" class="fas fa-hamburger"></i>happymeals.com<?php  echo "<br>   Hello , ".$_SESSION['username'];?></p>
        </div>

        <div class="navBtns">

            <a href="index.php" class="<?php  if($page == 'home') {echo 'active';} ?>">Home</a>
            <a href="menu.php" class="<?php  if($page == 'menu') {echo 'active';} ?>">Menu</a>
            <a href="deals.php" class="<?php  if($page == 'deals') {echo 'active';} ?>">Deals</a>
            <a href="contactus.php" class="<?php  if($page == 'contact') {echo 'active';} ?>">Contact Us</a>
        </div>

        <div class="navBarTitles">
            <div class="navtitlesicons">
                <a href="account.php"><i class="fas fa-user-alt"></i></a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                <a href="mycart.php"><i class="fa fa-shopping-cart"></i></a>
            </div>

            <div class="navtitleNames">
                <label for="">Account</label>
                <label for="">Log Out</label>
                <label for="">My Cart</label>
            </div>
        </div>  
    </div>
 </header>
</body>
</html>