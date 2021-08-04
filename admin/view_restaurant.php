<?php 
include('partials/menu.php');
?>



<div class="main-content">
    <div class="wrapper">
    <h1 class="text-center"></h1>

  <?php

  $username=$_GET['username'];


    $sql = "SELECT DISTINCT(category) as category FROM tbl_food WHERE username = '$username'";
    $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if($res)
    {
        $count = mysqli_num_rows($res);

        if($count>0)
        { 
            //we have data in database
            while($rows=mysqli_fetch_assoc($res)) 
         {
             //using while loop to get all the from database
             //while loop will run as long as we have data in database

             //get individual data
             $category = $rows['category'];
            

             ?>

               
         
               <table class="tbl-full">
           <thead>
           <th>S.N</th>
           <th>food Name</th>
           <th>Price</th>
           </thead>

             <?php
             $sn=0;
             $sql1 = "SELECT * FROM tbl_food WHERE category = '$category' AND username = '$username'";
    $res1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
    if($res1)
    {
        $count1 = mysqli_num_rows($res1);

        if($count1>0)
        {    
            
            //we have data in database
            ?>
            <h1><?php echo $category;?></h1>
            <?php
            
            while($rows1=mysqli_fetch_assoc($res1))
            {
                $sn++;
                $food_name = $rows1['food_name'];
                $price = $rows1['price'];
            
            ?>
          
           <tr>
               <td data-label="S.N"><?php echo $sn;?></td>
               <td data-label="Food Name"><?php echo $food_name;?></td>
               <td data-label="price"><?php echo $price;?></td>
               
           </tr>

            <?php
            }

           

    }
}
         }
        }
    }
    ?>
     </table>
       </div>
</div>
    
    <!-- Footer Section Starts-->
    <?php include('partials/footer.php');?>