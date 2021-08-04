<?php include('partials/menu.php');?>
<div class="main-content">
    <div class="wrapper">
       <h1>Update Admin</h1>

      <?php

      //1. Get the id of admin to be updated
         $id=$_GET['id'];  
 
          //2.Create sql query to update admin
         $sql="SELECT *FROM tbl_admin WHERE id=$id";

         //3.Execute the query
         $res=mysqli_query($conn,$sql);

         //4.Check whether the query successfully executed or not
         if($res==TRUE)
         {
             //Count to check whether we have data in database
             $count=mysqli_num_rows($res);
            
             //check whether we have admin data or not
             if($count==1)
             {
                 //got the details
                 $row=mysqli_fetch_assoc($res);
                 $full_name=$row['name'];
                 $username=$row['username'];
             }
             else{
                 //redirect to manage admin page
                 header('location:'.SITEURL."admin/manageadmin.php");
             }
         }
      
      
      
      ?>





       <form action="" method="POST">
   <table class="tbl-30">
   <tr>
   <td>ID</td>
   <div><td><?php echo $id;?></td></div>
   </tr>
   <tr>
    <td>Full Name</td>
    <td>
    <input type="text" name="full_name" value="<?php echo $full_name; ?>" required>
    </td>
   </tr>

   <tr>
    <td>Username</td>
    <td>
    <input type="text" name="username" value="<?php echo $username; ?>" required>
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
      $full_name = $_POST['full_name'];
      $username = $_POST['username'];
      
      //create a sql query for update the admin
      $sql= "UPDATE tbl_admin SET
      name = '$full_name',
      username = '$username'
      WHERE id='$id'  
    ";
    
    //execute the query
    $res = mysqli_query($conn,$sql);
    if($res==TRUE)
    {
        $_SESSION['update'] = "<div class='success'>Admin Updated Succesfully</div>";
        //redirect to manage admin page
        header('location:'.SITEURL.'admin/manage-admin.php'); 
    }
    else{
        $_SESSION['update'] = "<div class='error'>Failed to Update</div>";
        //redirect to manage admin page
        header('location:'.SITEURL.'admin/manage-admin.php'); 
    }
  }


?>



<?php include('partials/footer.php');?>