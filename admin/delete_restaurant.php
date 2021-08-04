<?php
   
   //include constants.php file to get the database connection
   include("../config/constants.php");
   
   //1. Get the username of admin to be deleted
   $username= $_GET['username'];

   //2.Create sql query to delete restaurant
   $sql="DELETE FROM tbl_restaurant_info WHERE username='$username' ";

   //3.Execute the query
   $res= mysqli_query($conn,$sql) or die(mysqli_error($conn));

   $sql1="DELETE FROM tbl_owner WHERE username='$username' ";

   //3.Execute the query
   $res1= mysqli_query($conn,$sql1) or die(mysqli_error($conn));

   $sql2="DELETE FROM tbl_addedres_front WHERE username='$username' ";

   //3.Execute the query
   $res2= mysqli_query($conn,$sql2) or die(mysqli_error($conn));

   $sql3="DELETE FROM tbl_food WHERE username='$username' ";

   //3.Execute the query
   $res3= mysqli_query($conn,$sql3) or die(mysqli_error($conn));
 
   //4.Check whether the query successfully executed or not
    if($res==TRUE)
    { 
        echo "
        <script>
        alert('Restaurant Deleted Successfully.');
        window.location.href = 'manage-restaurant.php';
        </script>

        ";

    }
    else{
        echo "
        <script>
        alert('Failed to delete Restaurant');
        window.location.href = 'manage-restaurant.php';
        </script>

        ";

    }

?>