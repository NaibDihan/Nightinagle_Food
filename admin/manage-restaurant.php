<?php include('partials/menu.php');?>
    <!-- Main content Section Starts-->
    <div class="main-content">
    <div class="wrapper">
       <h1>Manage Restaurant</h1>

    


       <table class="tbl-full">
           <thead>
           <th>S.N</th>
           <th>Restaurant Name</th>
           <th>Restaurant image</th>
           <th>Actions</th>
           </thead>

           <?php
             //Query to get all admin from database
             $sql="SELECT * FROM tbl_restaurant_info";

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
                      $username = $rows['username'];
                      $res_name= $rows['res_name'];
                      $res_img =$rows['res_img'];

                     
                     

                      ?>

                      
           <tr>
               <td data-label="S.N"><?php echo $sn++;?></td>
               <td data-label="Restaurant Name"><?php echo $res_name;?></td>
               <td data-label="Restaurant Image">
               <?php

               if($res_img!="")
               {
                   ?>
                   <img src="<?php echo SITEURL;?>images/restaurant/<?php echo $res_img ;?>" width="100px">
                   <?php

               } 
               else{

               }
               ?>
               
               </td>
               <td data-label="Actions">
                   <a href="<?php echo SITEURL;?>admin/addrestaurant_front.php?username=<?php echo $username;?>" class="btn-primary">Add</a>
                   <a href="<?php echo SITEURL;?>admin/view_restaurant.php?username=<?php echo $username;?> " class="btn-secondary">View</a>
                   <a href="<?php echo SITEURL;?>admin/delete_restaurant.php?username=<?php echo $username;?>" class="btn-danger">Delete</a> 
                   
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
    <?php include('partials/footer.php');?>