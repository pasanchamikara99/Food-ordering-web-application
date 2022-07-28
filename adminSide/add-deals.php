<?php
	
      include '../config.php';

   

      session_start();
	

      $page = 'deals';
      include('adminnav.php');


      if(isset($_POST['submit']))
      {
          $title = $_POST['title'];
          $price = $_POST['Price'];
          $catagory = $_POST['Catagory'];
         

      
        

            if(isset($_FILES['image']['name']))
            {
                      $image_name = $_FILES['image']['name'];
                      $target = "../Images/".basename($image_name);
  
  
                      //upload the image
                      $sql = "INSERT INTO deals(deal_name,deal_price,deal_image,catagory_name) VALUES('$title','$price','$image_name','$catagory')";       
                      $result = mysqli_query($conn,$sql);
                      if($result)
                      {
                        echo "<script>alert('Deal upload sucessfully !!!!')</script>";
                      }
                      else
                      {
                        echo "<script>alert('Deal upload fail !!!!')</script>";
                      }         
                      
            }
            else
            {
                echo "<script>alert('please select a image !!!!')</script>";
            }
        
          
          //print_r($_FILES['image']);
        


         
             

            
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

    <a href="admin-deals.php" class = "update">Go Back</a>
            <h2>Add Deal Item</h2>
            <br>

       

            <form action="" method="post" enctype = "multipart/form-data">

            <label for="">Title </label><br>
            <input type="text" name = 'title' placeholder = "title" require><br>
            <label for="">Price </label><br>
            <input type="text" name = 'Price' placeholder = "Price" require><br>
            <label for="">Catagory</label><br><br>
            <input type="text" name = 'Catagory' placeholder = "Catagory" require><br>
            

            <br><br>
            <label for="">Deal Image </label><br>
            <input type="file" name = 'image' ><br>
            <input type="submit" name = 'submit' value = "Add Deal">

            </form>
    </div>

    
    </body>
</html>
