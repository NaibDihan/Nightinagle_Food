<?php
include('config/constants.php');
$username = $_SESSION['username'];
$res_name = $_SESSION['restaurant-name'];
$image =  $_SESSION['image'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/admin1.css"> <!-- manage admin er copy design dekhe admin1.css add korsi -->
    <link rel="stylesheet" href="css/style.php">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Document</title>
</head>
<body>

<div class="main-content">
   <!-- <img src="images/restaurant/<?php echo $image;?>" class="img-responsive" height = "1000px"> -->
    <div class="wrapper">
        <h1 class="text-center" style="margin-bottom:20px; font-style:italic; color:teal;"><?php echo $res_name;?></h1>
       <h1>Manage Your Restaurant Menu details</h1>
    <div class="button">
       <a href="ownerfood_add.php" class="btn-primary">Add Food</a>
       </div>

       <table class="tbl-full">
           <thead>
           <th>S.N</th>
           <th>Food Name</th>
           <th>Category</th>
           <th>Price in BDT</th>
           <th>Actions</th>
      </thead>

           <?php
             //Query to get all admin from database
             $sql="SELECT * FROM tbl_food WHERE username='$username'";

             //execute the query
             $res = mysqli_query($conn,$sql);

             $sn=1; //variable for increment the id

             //check whether the query is executed or not

             if($res==TRUE)
             {
                 //Count to check whether we have data in database
                 $count = mysqli_num_rows($res);  //function to get number of rows in database

                 //Check the number of rows
                 if($count>0)
                 {
                     //we have data in database
                     while($rows=mysqli_fetch_assoc($res)) 
                  {
                      //using while loop to get all the from database
                      //while loop will run as long as we have data in database

                      //get individual data
                      //$username= $rows['username'];
                     // $res_name =$rows['res_name'];
                      $food_name = $rows['food_name'];
                      $category = $rows['category'];
                      $price = $rows['price'];
                      $id = $rows['id'];


                      ?>

            <tbody>         
           <tr>
               
               <td data-label="S.N"><?php echo $sn++;?></td>
               <td data-label="Food"><?php echo $food_name;?></td>
               <td data-label="Category"><?php echo $category;?></td>
               <td data-label="Price in BDT"><?php echo $price;?></td>
               <td data-label="Actions">
                  <a href="<?php echo SITEURL;?>update_food.php?id=<?php echo $id;?>" class="btn-secondary">Update</a> 
                  <a href="<?php echo SITEURL;?>delete_food.php?id=<?php echo $id;?>" class="btn-danger">Delete</a> 
                </td>
           </tr>

                      <?php


                  }

                } 
                 
             }
           ?>
           </tbody> 
       </table>
            </div>
            </div>


       
    <!-- Footer Section Starts-->
    <?php include('partial-front/footer.php');?> 
