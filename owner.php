<?php
 include('config/constants.php');
//session_start();
 $username = $_SESSION['username'];

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Document</title>
</head>
<body>
<div class="welcome-img">
<div class="container">
<h1 class="owner-k-dak-dibo text-center">Hey There,</h1>
      <p class="owner-pickupline">Really glad that you showed interest to grow your business with us. Give us your information and connect with us. Cheers...</p>
    <div class="welcome">
    
      <div class="restaurant-info text-center">
     <form action="" method="POST" enctype="multipart/form-data">
        <p>Restaurant name</p>
        <input type="text" name="res-name" placeholder="Enter Your Restaurant name" required>
        <p>Set your Restaurant image</p>
        <input type="file" name="res-img"> <br>
        <input type="submit" name="submit" value="Submit"/>
     </form>
    </div>
      </div>
    </div>
</div>


<?php include('partial-front/footer.php');?> 
    
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $res_name = $_POST['res-name'];


    //check wherther the image is selected or not and set the value for image name accordingly
    // print_r($_FILES['res-img']);
    //die();
    if(isset($_FILES['res-img']['name'])){
      //upload the image
      //To upload image we need image name ,source path and destination path
      $image_name = $_FILES['res-img']['name'];

      //Auto rename our image
      //Get the extension of our image(jpg,png,gif,etc)
      
      $ext = end(explode('.',$image_name));
      
      //rename the image
      $image_name  = "Restaurant_image_".rand(000,999).'.'.$ext;

      $source_path = $_FILES['res-img']['tmp_name'];

      $destination_path = "images/restaurant/".$image_name;

      //finally upload the image
      $upload = move_uploaded_file($source_path,$destination_path);

      //check whether the image uploaded or not
      //and if the image is not uploaded then we will stop the process and redirect with error message
      if($upload==false)
      {
        echo "
      <script>
      alert('Failed to upload image.');
      window.location.href = 'owner.php';
      </script>
      ";
      die();


      }
    }
    else{
      //dont uplolad image and set the image_name as blank
      echo "
      <script>
      alert('You did not chose Restaurant image. please chose it.');
      window.location.href = 'owner.php';
      </script>
      ";
    }
    
    $sql = "INSERT INTO tbl_restaurant_info SET
    res_name='$res_name',
    res_img = '$image_name',
    username='$username'
";
$res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($res)
{
  echo "
  <script>
   alert('Information Added. Preceed further to give us more information.');
   window.location.href = 'ownerfood.php';
  </script>
  ";
  session_start();
  $_SESSION['restaurant-name'] = $res_name;
  $_SESSION['image'] = $image_name;
 

}
else{
  echo "
  <script>
   alert('Database Error');
   window.location.href = 'owner.php';
  </script>
  ";
}



}



?>