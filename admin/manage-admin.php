<?php include('partials/menu.php');?>
    <!-- Main content Section Starts-->
    <div class="main-content">
    <div class="wrapper">
       <h1>Manage Admin</h1>

    <?php
       if(isset($_SESSION['add']))
       {
           echo $_SESSION['add'];  //Displaying Session Messege
           unset($_SESSION['add']);  //Removing Session Messege
       }

       if(isset($_SESSION['delete']))
         {
             echo $_SESSION['delete'];
             unset($_SESSION['delete']);

         }

         if(isset($_SESSION['update']))
         {
             echo $_SESSION['update'];
             unset($_SESSION['update']);
         }

         if(isset($_SESSION['password-changed']))
         {
             echo $_SESSION['password-changed'];
             unset($_SESSION['password-changed']);
         }

         if(isset($_SESSION['invalid-currentpass']))
         {
             echo $_SESSION['invalid-currentpass'];
             unset($_SESSION['invalid-currentpass']);
         }

        

       ?>

       <!--Button to Add Admin-->
       <div class="button">
       <a href="add-admin.php" class="btn-primary">Add Admin</a>
       </div>

       <table class="tbl-full">
           <thead>
           <th>S.N</th>
           <th>Full Name</th>
           <th>User Name</th>
           <th>Actions</th>
           </thead>

           <?php
             //Query to get all admin from database
             $sql="SELECT * FROM tbl_admin";

             //execute the query
             $res = mysqli_query($conn,$sql);

             $sn=1; //variable for increment the id

             //check whether the query is executed or not

             if($res==TRUE)
             {
                 //Count to check whether we have data in database
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
                      $id= $rows['id'];
                      $full_name =$rows['name'];
                      $username = $rows['username'];

                      ?>

                      
           <tr>
               <td data-label="S.N"><?php echo $sn++;?></td>
               <td data-label="Full Name"><?php echo $full_name;?></td>
               <td data-label="User Name"><?php echo $username;?></td>
               <td data-label="Actions">
                   <a href="<?php echo SITEURL;?>admin/change-password.php?id=<?php echo $id;?>" class="btn-primary">Change Password</a>
                  <a href="<?php echo SITEURL;?>admin/update-admin.php?id=<?php echo $id;?>" class="btn-secondary">Update Admin</a> 
                  <a href="<?php echo SITEURL;?>admin/delete-admin.php?id=<?php echo $id;?>" class="btn-danger">Delete</a> 
                   
               </td>
           </tr>

                      <?php


                  }

                } 
                 
             }
           ?>
       </table>
</div>
</div>
       
    <!-- Footer Section Starts-->
    <?php include('partials/footer.php') ?>