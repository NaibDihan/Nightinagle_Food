<?php
   
   //include constants.php file to get the database connection
   include("../config/constants.php");
   
   //1. Get the id of admin to be deleted
   $id= $_GET['id'];

   //2.Create sql query to delete admin
   $sql="DELETE FROM tbl_admin WHERE id=$id";

   //3.Execute the query
   $res= mysqli_query($conn,$sql);

   //4.Check whether the query successfully executed or not
    if($res==TRUE)
    { 
        //Query has been executed succesfully
        //Create session variable to display message
        $_SESSION['delete']="<div class='success'>Admin Deleted Successfully</div>";
        //redirect to manage admin page
        header('location:'.SITEURL."admin/manage-admin.php");

    }
    else{
       // Failed to delete admin
       $_SESSION['delete']="<div class='error'>Failed to Deleted Admin</div>";
        header('location:'.SITEURL."admin/manage-admin.php");

    }

?>