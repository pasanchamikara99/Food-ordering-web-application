<?php
	
      include '../config.php';
      session_start();
	

      $page = 'food';
      include('adminnav.php');

        //get meal id 
      $id = $_GET['id'];

      //check database with that id
      $sql = "SELECT * FROM food_items WHERE food_id = '$id' limit 1";
      $result = mysqli_query($conn,$sql);

      if($result)
      {
          //store meal details to array
          while($row = mysqli_fetch_array($result))
          {
              //store current values
              $currtitle = $row['food_name'];
              $currimage_name = $row['food_image'];
              $currprice = $row['food_price'];

              //echo $currtitle;
          }
      }
      else
      {
        echo "<script>alert('fail !!!!')</script>";
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
            
            <br>
            <form action="" method="post" enctype = "multipart/form-data">

            <label for="">Title </label><br>
            <input type="text" name = 'title' placeholder = "title"><br>
            <label for="">Price </label><br>
            <input type="text" name = 'Price' placeholder = "Price" ><br>
            
            <br><br>
            <label for="">Catagory Image </label><br>
            <input type="file" name = 'image' ><br>
            <input type="submit" name = 'submit' value = "Add Fooditem">

            </form>
    </div>



<?php

    if(isset($_POST['submit']))
      {
          //store admin enter details
        $title =  $_POST['title'];
        $price = $_POST['Price'];
        $image_name = $_FILES['image']['name'];

                    
                    if($title == null )
                    {
                            
                        $title = $currtitle;
                    }
                    
                    if( $price == null)
                    {
                        $price = $currprice;
                    }
                    if( $image_name ==  null)
                    {
                                                
                        $image_name = $currimage_name;
                    }
                                    
                        $sql = "UPDATE  food_items SET food_name = '$title',food_price = '$price',food_image = '$image_name' WHERE food_id = '$id' ";       
                        $result = mysqli_query($conn,$sql);
                            if($result)
                                {
                                    echo "<script>
                                    alert('meal update  Suessfully');
                                    window.location.href = 'admin-food.php';
                                    </script>";
                                }
                                else
                                {
                                        echo "<script>alert('meal updated fail !!!!')</script>";
                                        
                                }
                 
          }
    
        ?>      
 
    
    </body>
</html>
