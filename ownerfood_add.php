<?php
include('config/constants.php');
$username = $_SESSION['username'];
$res_name = $_SESSION['restaurant-name'];
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
    <link rel="stylesheet" href="css/responsive.css">
    <title>Document</title>
</head>
<body>
<div class="main-content">
<div class="wrapper">
<h1>Add Your Food Here</h1>
<form action="" method="POST">
   <table class="tbl-30">
   <tr>
    <td>Food Name</td>
    <td>
    <input type="text" name="food_name" placeholder="Enter Food  Name" required>
    </td>
   </tr>

   <tr>
    <td>Food Category</td>
    <td>
    <input type="text" name="food_category" placeholder="Enter Food Category" required>
    </td>
   </tr>

   <tr>
    <td>Price in BDT</td>
    <td>
    <input type="text" name="price" placeholder="Enter Price in BDT" required>
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

<?php include('partial-front/footer.php');?> 
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    //1.Get the data from form
    
    $food_name = $_POST['food_name'];
    $category = $_POST['food_category'];
    $price =$_POST['price'];

  //2.SQL Query to save the data into the database
   $sql = "INSERT INTO tbl_food SET
       food_name='$food_name',
       res_name='$res_name',
       username='$username',
       category='$category',
       price='$price'

   ";
 

  
  $res=mysqli_query($conn,$sql) or die(mysqli_error());   

  if($res==TRUE)
  {
      //Data inserted
      //redirect page
      echo "
      <script>
         alert('Food Added Successfully.');
         window.location.href = 'ownerfood.php';        
      </script>
      "; 
  
  }
  else{
      //Failed to insert
      //redirect page
      echo "
      <script>
         alert('Failed to Add food.');
         window.location.href = 'ownerfood.php';        
      </script>
      "; 
     
  }


}

?>
