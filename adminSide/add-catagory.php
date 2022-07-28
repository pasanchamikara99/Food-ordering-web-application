<?php
	
      include '../config.php';


      session_start();
	

      $page = 'catagory';
      include('adminnav.php');


      if(isset($_POST['submit']))
      {
          $title = $_POST['title'];

          
          //print_r($_FILES['image']);


          if(isset($_FILES['image']['name']))
          {
                    $image_name = $_FILES['image']['name'];
                    //upload the image
                    $sql = "INSERT INTO food_catagory(catagory_name,image_name) VALUES('$title','$image_name')";       
                    $result = mysqli_query($conn,$sql);


                    if($result)
                    {
                        echo "<script>alert('catagory upload sucessfully !!!!')</script>";
                    }
                    else
                    {
                        echo "<script>alert('catagory upload fail !!!!')</script>";
                    }       
                    
          }
          else
          {
            echo "<script>alert('please select a image !!!!')</script>";
          }

         
             

            
        }
          
      

?>

<html>
    <head>
        <style>
            form{
                padding: 10px;
                width: 450px;
                border-radius: 5px;
                padding: 20px 30px;
                border-style: solid;
                border-color: white;
                margin: 4rem auto;
                font-weight: bold;
                color: white;
                align-items: center;
                justify-content: center;  
            }

            form input{
                margin-left: 1rem;
                padding: 10px 5px;
                width: 95%;
                margin-bottom: 15px;
                border-style: solid;
                border-color: white;
                border-radius: 8px;
                font-size: 17px;
            }

            form label{
                margin-left: 1rem;
                font-size: 17px;
            }

            form input[type=submit]
            {
                padding: 12px 6px;
                text-align: center;
                border: none;
                border-radius: 20px;
                font-size: 17px;
                width: 50%;
                margin-left: 6rem;
                background-color: #BA4A00;
                color: white;
                font-weight: bold;
                margin-bottom: 20px;
            }

            table {
                margin: 1rem auto;
                border:1px solid white;
                width: 80%;
                
            }

            table th{
                border:1px solid white;
            }
        </style>
    </head>

    <body>
   
    <div class="managerUser">

    <a href="admin-catagory.php" class = "update">Go Back</a>
            <h2>Add catagory</h2>
            <br>

            <form action="" method="post" enctype = "multipart/form-data">

            <label for="">Catagory Title </label><br>
            <input type="text" name = 'title' placeholder = "title" require><br>
            <label for="">Catagory Image </label><br>
            <input type="file" name = 'image' ><br>
            <input type="submit" name = 'submit' value = "Add catagory">

            </form>
    </div>

    
    </body>
</html>
