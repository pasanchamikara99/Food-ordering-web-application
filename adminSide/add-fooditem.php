<?php
	
      include '../config.php';

     

      session_start();
	

      $page = 'food';
      include('adminnav.php');


      if(isset($_POST['submit']))
      {
          $title = $_POST['title'];
          $price = $_POST['Price'];

           //print_r($_FILES['image']);
         

          if(isset($_POST['catagory']))
          {
            $catagory = $_POST['catagory'];

            if(isset($_FILES['image']['name']))
            {
                      $image_name = $_FILES['image']['name'];
                      //$target = "../Images/".basename($image_name);
  
  
                      //upload the image
                      $sql = "INSERT INTO food_items(food_name,food_price,food_image,food_catagory) VALUES('$title','$price','$image_name','$catagory')";       
                      $result = mysqli_query($conn,$sql);

                      
                      if($result)
                      {
                        echo "<script>alert('meal upload sucessfully !!!!')</script>";
                      }
                      else
                      {
                        echo "<script>alert('meal upload fail !!!!')</script>";
                      }         
                      
            }
            else
            {
                echo "<script>alert('please select a image !!!!')</script>";
            }
          }else
        {
                echo "<script>alert('please select a catagory !!!!')</script>";
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

    <a href="admin-food.php" class = "update">Go Back</a>
            <h2>Add Meal Item</h2>
            <br>

       

            <form action="" method="post" enctype = "multipart/form-data">

            <label for="">Title </label><br>
            <input type="text" name = 'title' placeholder = "title" require><br>
            <label for="">Price </label><br>
            <input type="text" name = 'Price' placeholder = "Price" require><br>
            <label for="">Catagory</label><br><br>
            <?php
                $sql = "SELECT * FROM food_catagory";

                 $result = mysqli_query($conn,$sql);

                 while( $row = mysqli_fetch_array($result))
                    { 
                        $catagory= $row['catagory_name'];?>
    
                        <label for=""><?php echo $catagory;?></label><input type="radio" value = '<?php echo $catagory; ?>' name = 'catagory' require>
                  <?php } 
    
            ?>    
            

            <br><br>
            <label for="">Catagory Image </label><br>
            <input type="file" name = 'image' ><br>
            <input type="submit" name = 'submit' value = "Add Fooditem">

            </form>
    </div>

    
    </body>
</html>
