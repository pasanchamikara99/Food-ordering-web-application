
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/contactus.css">

    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="style/footer.css">
    <title>Contact Us Page</title>
    <style>
        #lbl{
            color:white;
        }
    </style>

</head>
<body>
    <img src="Images/background.jpeg" class = "backgroundImg" alt="">

    <?php
     session_start();

     include 'config.php';

     $page = 'contact';
      
      if(!isset($_SESSION['username']))
      {
          include("unregusernavbar.php");
      }
      else
      {
          include('usernavbar.php');
      }


      
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h1 class="text-center py-2"> Contact Us </h1>
                        <hr> <hr>
                        </br>
                        
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                //fields are not completed 
                                $Msg = " You can't keep the fields empty! ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                //data succesfully saved to the database
                                $Msg = " Your message has been sent Succesfully ! ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                        </br>
                        
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                        <label id="lbl" for="UName">Your Name :- </label> <input type="text" id="textboxid" name="UName" placeholder="User Name" class="form-control mb-2" size="40" ></br></br>
                        <label id="lbl" for="Email">Your Email :- </label> <input type="email" id="textboxid" name="Email" placeholder="Email" class="form-control mb-2" size="40" ></br></br>
                        <label id="lbl" for="Subject">Subject :- </label> <input type="text" id="textboxid" name="Subject" placeholder="Subject" class="form-control mb-2" size="40" ></br></br>
                        <label id="lbl" for="Message">Message :- </label> <textarea name="msg" class="form-control mb-2" placeholder="Write The Message" rows="6" cols="56"></textarea></br></br>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php
   
                                include('footer.php');
   ?>
</body>
</html>