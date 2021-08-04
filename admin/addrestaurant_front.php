<?php
include("../config/constants.php");

$username = $_GET['username'];

$sql = "SELECT * FROM tbl_restaurant_info WHERE username = '$username'";
$res = mysqli_query($conn,$sql) or mysqli_error($conn);
if($res){
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
                      $username = $rows['username'];
                      $res_name= $rows['res_name'];
                      $res_img =$rows['res_img'];

                      $sql1 = "INSERT INTO tbl_addedres_front SET
                      username='$username',
                      res_name = '$res_name',
                      res_img = '$res_img'
                      ";

$res1 = mysqli_query($conn,$sql1) or mysqli_error($conn);
if($res1)
{
  echo "
  <script>
  alert('Added Restaurant to Website');
  window.location.href = 'manage-restaurant.php';
    </script>
  ";
}
else
{
  echo "
  <script>
  alert('This Restaurant has already been Added to Website');
  window.location.href = 'manage-restaurant.php';
    </script>
  ";
}

}
                 }
                }


?>