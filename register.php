<?php
    include 'config.php';

    session_start();
    if(isset($_POST['submit']))
    {
        //get and store user details to variables
            $username = $_POST['username'];
            $email = $_POST['email'];
            $phoneno = $_POST['Phone_No'];
            $password = md5($_POST['passwrod']);
            $cpassword = md5($_POST['confirmpasswrod']);


                //check password
            if($password == $cpassword)
            {
                $sql_e= "SELECT * FROM users WHERE email = '$email'";
                $sql_u= "SELECT * FROM users WHERE username = '$username'";
                $result_u = mysqli_query($conn,$sql_u);
                $result_e = mysqli_query($conn,$sql_e);
            
                if(mysqli_num_rows($result_u)  > 0)//check user name already use
                    {
                        echo "<script>alert('Sorry ! username has already taken !!!!')</script>";  
                       
                    }
                else if(mysqli_num_rows($result_e)  > 0)//check email already registered
                    {
                        echo "<script>alert('Sorry email already used !!!!')</script>"; 
                    }
                else
                    {
                        //store user details in users table
                        $sql = "INSERT INTO users (username,phoneNo,email,password,userType)  VALUES ('$username','$phoneno','$email','$password','customer')";
                        $result = mysqli_query($conn,$sql);
        
                        if($result)
                            {
                                $username = "";
                                $phoneno = "";
                                $email = " ";
                                $_POST['passwrod'] = "" ;
                                $_POST['confirmpasswrod'] = "";


                                /*$_SESSION['login'] = "Sign Up Successfully";
                                header("Location:login.php");*/

                                echo "<script>
                                        alert('User Registered Successfully');
                                        window.location.href = 'login.php';
                                </script>";

                                
                            }
                        else
                            {
                                echo "<script>alert('Some thing went wrong !!!!')</script>";
                            }
                    }
                        
               
            }
            else
            {
                echo "<script>alert('Password mismatch')</script>";
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
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <title>Register</title>
</head>
<body>

    


        <form action="" method = "POST" class="loginfrom"> 
            <h3>Become A Member</h3>
            <input type="text" placeholder="username" name = "username"  required><br>

            <input type="email" placeholder="email" name = "email"  required><br>

            <input type="text" placeholder="phone no" name = "Phone_No"  pattern="[0-9]{10}" required><br>

            <input type="password" placeholder="password" name = "passwrod"  required>

            <br>
            <input type="password" placeholder="Confirm password" name = "confirmpasswrod" required>

            <br>

            <input name = "submit" type="submit" value="Register">

            <p>Have an  account ? <a href="login.php">Login Here</a></p>
        </form>


        







 
    
</body>
</html>