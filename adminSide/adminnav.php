
<?php

        if(!isset($_SESSION['username']) || isset($_SESSION['username']) && $_SESSION['username'] != 'admin')
        {
  
          if(!isset($_SESSION['username']))
          {
              header("Location:../index.php");
          }
          else
          {
              header("Location:../index.php");
          }
           
        }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="../style/admin.css">
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Food</title>

    <style>
        .navbar .navbarname a{
            text-decoration:none;
            color:white;
        }

    </style>
</head>
<body>

        
<header>
    <div class="navbar">

        <div class="navbarname">
            <a href="../index.php"><i id="nameicon" class="fas fa-hamburger"></i>happymeals.com</a><?php  echo "/".$_SESSION['username'];?>
        </div>

        <div class="navBtns">
            <a href="admin.php" class="<?php  if($page == 'user') {echo 'active';} ?>">User</a>
            <a href="admin-catagory.php" class="<?php  if($page == 'catagory') {echo 'active';} ?>">Category</a>
            <a href="admin-food.php" class="<?php  if($page == 'food') {echo 'active';} ?>">Food</a>
            <a href="admin-deals.php" class="<?php  if($page == 'deals') {echo 'active';} ?>">Deals</a>
            <a href="admin-order.php" class="<?php  if($page == 'order') {echo 'active';} ?>">Order</a>
            <a href="admin-contact.php" class="<?php  if($page == 'contact') {echo 'active';} ?>">Contacts</a>
        </div>

        <div class="navBarTitles">
            <div class="navtitlesicons">
                <a href="../logout.php"><i class="fas fa-user-alt"></i></a>
            </div>

            <div class="navtitleNames">
                <label for="">Log Out</label>
            </div>
        </div>  
    </div>
 </header>

</body>
</html>