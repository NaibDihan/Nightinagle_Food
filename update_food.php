<?php
  include('config/constants.php');
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
    <title>Document</title>
</head>
<body>
    

<div class="main-content">
    <div class="wrapper">
       <h1>Update Food </h1>

      <?php

      //1. Get the id of food to be updated
         $id=$_GET['id'];  
 
          //2.Create sql query to update food
         $sql="SELECT * FROM tbl_food WHERE id=$id";

         //3.Execute the query
         $res=mysqli_query($conn,$sql);

         //4.Check whether the query successfully executed or not
         if($res==TRUE)
         {
             //Count to check whether we have data in database
             $count=mysqli_num_rows($res);
            
             //check whether we have food data or not
             if($count==1)
             {
                 //got the details
                 $row=mysqli_fetch_assoc($res);
                 $food_name = $row['food_name'];
                 $category = $row['category'];
                 $price = $row['price'];
             }
             else{
                 //redirect to manage ownerfood.php page
                 header('location:'.SITEURL."ownerfood.php");
             }
         }
      
      
      
      ?>





       <form action="" method="POST">
   <table class="tbl-30">
   <tr>
    <td>Food Name</td>
    <td>
    <input type="text" name="food_name" value="<?php echo $food_name; ?>" required>
    </td>
   </tr>

   <tr>
    <td>Food Category</td>
    <td>
    <input type="text" name="category" value="<?php echo $category; ?>" required>
    </td>
   </tr>

   <tr>
   <td>Price in BDT</td>
    <td>
    <input type="text" name="price" value="<?php echo $price; ?>" required>
    </td> 
   </tr>

   <tr>
   <td colspan="2">
   <input type="submit" name="submit" value="Submit" class="btn-secondary">
   </td>
   </tr>
   </table>

</form>
       </div>
</div>

<?php
  if(isset($_POST['submit']))
  {
      //get all the values from form to update
      $food_name = $_POST['food_name'];
      $category = $_POST['category'];
      $price = $_POST['price'];

      
      //create a sql query for update the food
      $sql= "UPDATE tbl_food SET
      food_name = '$food_name',
      category = '$category',
      price = '$price'
      WHERE id=$id  
    ";
    
    //execute the query
    $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if($res==TRUE)
    {
        echo "
        <script>
           alert('Food Updated Successfully.');
           window.location.href = 'ownerfood.php';        
        </script>
        "; 
    }
    else{
        echo "
        <script>
           alert('Failure to update.');
           window.location.href = 'ownerfood.php';        
        </script>
        ";
    }
  }


?>



<?php include('partial-front/footer.php');?> 
