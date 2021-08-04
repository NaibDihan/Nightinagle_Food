<?php include('partial-front/menu.php');?>

<section class="food-search text-center">
        <div class="container">
           <form action="">
                <input type="search" name="search" placeholder="Search for restaurants">
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
<section class="restaurant">
        <div class="container">
            <h2 class="text-center h2-padding">Restaurants</h1>
            <p>Grab your favourite food from your favourite restaurant! We are here to serve you with our free home delivery service! So stay home and enjoy your meal :)  </p>
            <?php
            $sql = "SELECT * FROM tbl_addedres_front";
            $res = mysqli_query($conn,$sql) or mysqli_error($conn);
            $count = mysqli_num_rows($res);
            if($res)
            {
                 if($count>0)
                 {
                    while($row  = mysqli_fetch_assoc($res))
                    {
                       $username = $row['username'];
                       $res_name = $row['res_name'];
                       $res_img = $row['res_img'];
                       ?>
               <a href="#">
                <div class="box-3 float-container">
                <?php
                if($res_img=="")
                {

                }
                else
                {
                   ?>
                  <img src="<?php echo SITEURL;?>images/restaurant/<?php echo $res_img;?>" alt="res1" class="img-responsive" height="600px">
                  <?php
                }
                ?>
                 
                 <div class="float-text background">
                    <h3 class="text-white"><?php echo $res_name;?></h3>
                 </div>
            </div> </a>

                       <?php


                    }
                 }
            }


            ?>
           

         

            <div class="clearfix"></div>
        </div>
    </section>


    <?php include('partial-front/footer.php');?>