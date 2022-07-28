<?php
    

    include 'config.php';
  

    session_start();


   

    if(isset($_POST['submit']))
    { 
            //get user email and password
            $email = $_POST['email'];
            $password = md5($_POST['password']);   


            //check that details in user table
            $sql_u = "SELECT * FROM users WHERE email = '$email'  OR username = '$email' AND password = '$password'";
  
            $getusername = mysqli_query($conn,$sql_u);
       

            
            //store user details in array
            $row = mysqli_fetch_array($getusername);

            if($row['username'] == $email || $row['email'] == $email) //check user email or username equal with enter username or password
            {
                if($row['password'] == $password) //check password
                {
                        if($row['userType'] == 'admin') //check user type 
                        {
                            header("Location:adminside/admin.php");
                            $_SESSION['username'] = $row["username"];
                        }
                        else
                        {
                            header("Location:index.php");
                            $_SESSION['username'] = $row["username"];
                        }
                }
                else
                {
                    echo "<script>alert('Invalid Password')</script>";
                }
            }
            else
            {
                echo "<script>alert('Invalid Username')</script>";
            }



  
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/footer.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <title>Login</title>
</head>
<body>

       
   
    
         <h1>Login</h1>
    


        <form action="" method = "POST" class="loginfrom"> 


        <center>
            <h5> <?php  if(isset($_SESSION['login']))
                {   echo $_SESSION['login']; 
                    unset($_SESSION['login']);
                } ?> 
                
            </h5>

        </center>

        



            <h3><i  id="burger" class = "fas fa-hamburger"></i>Login</h3>
            <input type="text" placeholder="email/username" name = "email" required>

            <br>
            <input type="password" placeholder="password" name = "password" required>

            <br>

            <input type="submit" name="submit" value="Login">

            <p><span class="span">or</span> <br></p>

            <p>Havn't account ? <a href="register.php">create one</a></p>

           <!--<p><span class="span">or</span> <br>Login with Social Media</p>
            <div class="SocialMedia">
                <a href="www.facebook.com"> <i class="fab fa-facebook-f"></i></a>
                <a href="www.twitter.com"> <i class="fab fa-twitter"></i></a>
                <a href="www.linkedIn.com"> <i class="fab fa-linkedin"></i></a>
                <a href="www.facebook.com"> <i class="fab fa-instagram"></i></a>
            </div>-->
        </form>


        








    
</body>
</html>