<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
       <h1>Change Password</h1>
   
   <?php
       if(isset($_SESSION['not-match']))
       {
           echo $_SESSION['not-match'];
           unset($_SESSION['not-match']);
       }
      
        
   ?>

       <?php
         //1. Get the id of admin to change the password
          if(isset($_GET['id']))
          {
              $id=$_GET['id'];
          }  
       ?>

<form action="" method="POST">
   <table class="tbl-30">
   <tr>
    <td>Current Password</td>
    <td>
    <input type="password" name="current_password" placeholder="Current Password" required>
    </td>
   </tr>

   <tr>
    <td>New Password</td>
    <td>
    <input type="password" name="new_password" placeholder="New Password" required>
    </td>
   </tr>

   <tr>
    <td>Confirm Password</td>
    <td>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
    </td>
   </tr>

   <tr>
   <td colspan="2">
   <input type="submit" name="submit" value="Change Password" class="btn-secondary">
   </td>
   </tr>
   </table>

</form>
   </div>
</div>

<?php
  if(isset($_POST['submit']))
  {
      //Get the data from the form
      $current_password = md5($_POST['current_password']);
      $new_password = md5($_POST['new_password']);
      $confirm_password =md5($_POST['confirm_password']);
     
      //check whether the current id and current password exist or not
        $sql="SELECT *FROM tbl_admin WHERE id='$id' AND password='$current_password'";

        //execute the query
        $res=mysqli_query($conn,$sql);
        if($res==TRUE)
        {
            //check the data is available or not
            $count=mysqli_num_rows($res);
            if($count==1)
            {
                //check whether new password and confirm password matched or not
                if($new_password==$confirm_password)
                {
                    //update the password in database
                    $sql1="UPDATE tbl_admin SET
                    password='$new_password' 
                    WHERE id='$id'
                    ";
                    //execute this query
                    $res2=mysqli_query($conn,$sql1);
                    if($res2==TRUE)
                    {
                        $_SESSION['password-changed']="<div class='success'>Password Changed Successfully</div>";
                        //redirect to manage admin page with password chnaged successfully messege
                        header('location: '.SITEURL.'admin/manage-admin.php');

                    }
                    else{
                        $_SESSION['password-changed']="<div class='success'>Fail to change the password</div>";
                        //redirect to manage admin page with error
                        header('location: '.SITEURL.'admin/manage-admin.php');
                    }
                }
                else{
                    $_SESSION['not-match']="<div class='error'>New and Confirm Password did not match</div>";
                    //redirect to change-password page with New and Confirm Password did not match messege
                    header('location: '.SITEURL.'admin/change-password.php');

                }
               
            }
            else{
                $_SESSION['invalid-currentpass']="<div class='error'>Current password is invalid.</div>";
                //redirect to manage admin page with User Not Found messege
                header('location: '.SITEURL.'admin/manage-admin.php');
            }
           
        }
       
       //change password if all above is true

}

?>


<?php include('partials/footer.php');?>