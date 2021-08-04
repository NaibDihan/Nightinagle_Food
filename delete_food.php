<?php
   
   //include constants.php file to get the database connection
   include("config/constants.php");
   
   //1. Get the id of food to be deleted
   $id= $_GET['id'];

   //2.Create sql query to delete food
   $sql="DELETE FROM tbl_food WHERE id=$id";

   //3.Execute the query
   $res= mysqli_query($conn,$sql);

   //4.Check whether the query successfully executed or not
    if($res==TRUE)
    { 
        //Query has been executed succesfully
        //redirect to manage ownerfood.php page
       echo "
        <script>
           alert('Food Deleted Successfully.');
           window.location.href = 'ownerfood.php';        
        </script>
        ";

    }
    else{
       // Failed to delete food
       echo "
       <script>
          alert('Failed to delete food');
          window.location.href = 'ownerfood.php';        
       </script>
       ";

    }

?>