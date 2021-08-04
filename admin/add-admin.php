<?php include('partials/menu.php');?>

<div class="main-content">
<div class="wrapper">
<h1>Add Admin</h1>

    <?php
       if(isset($_SESSION['add']))  //checking whether the session is set or not
       {
           echo $_SESSION['add'];  //Displaying Session Messege
           unset($_SESSION['add']);  //Removing Session Messege
       }

       ?>
<form action="" method="POST">
   <table class="tbl-30">
   <tr>
    <td>Full Name</td>
    <td>
    <input type="text" name="full_name" placeholder="Enter Your Name" required>
    </td>
   </tr>

   <tr>
    <td>Username</td>
    <td>
    <input type="text" name="username" placeholder="Your Username" required>
    </td>
   </tr>

   <tr>
    <td>Password</td>
    <td>
    <input type="password" name="password" placeholder="Your Password" required>
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

<?php include('partials/footer.php');?>

<?php
//Process the value from form and save it in database

//Check whether the submit button is clicked or not

if(isset($_POST['submit']))
{
    //1.Get the data from form
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password =md5($_POST['password']); //Password Encrypted

  //2.SQL Query to save the data into the database
   $sql = "INSERT INTO tbl_admin SET
       name='$full_name',
       username='$username',
       password='$password';
   ";
 

  
  $res=mysqli_query($conn,$sql) or die(mysqli_error());   

  if($res==TRUE)
  {
      //Data inserted
      //Create a session variable to display messege
      $_SESSION['add']="<div class='success'>Admin Added Succesfully</div>";
      //redirect page
      header("location:".SITEURL."admin/manage-admin.php");
  }
  else{
      //Failed to insert
       //Create a session variable to display messege
       $_SESSION['add']="Failed to Insert";
       //redirect page
       header("location:".SITEURL."admin/add-admin.php");
  }


}

?>
