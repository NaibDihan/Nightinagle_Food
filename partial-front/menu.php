<?php include('config/constants.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style1.css">
   
    <link rel="stylesheet" href="css/responsive.css">
    <title>Document</title>
</head>
<body>
    <!--Navbar section start-->
    <header>
   <nav>
    <div class="container">
      
        <div class="logo">
         <a href="<?php echo SITEURL;?>"><img src="images/logo2.png" alt="Restaurant logo" class="img-responsive"></a>
        </div>

        <div class="menu text-right">
         <ul>
             <li>
                 <a href="<?php echo SITEURL;?>">Home</a>
             </li>
             <li>
                <a href="<?php echo SITEURL;?>restaurant.php">Restaurants</a>
            </li>
            <li>
                <a href="#">Cart</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <li>
                <a href="<?php echo SITEURL;?>login.php">Login/Register</a>
            </li>
         </ul>

         <div class="mobile-menu">
             <span onclick="openNav()">&#9776;</span>
             <div id="myNav" class="overlay">
             <a href="javascript:void(0)" onclick="closeNav()" class="closebtn">&times;</a>
             <div class="overlay-content">
                <a onclick="closeNav()" href="<?php echo SITEURL;?>">Home</a>
                <a onclick="closeNav()" href="<?php echo SITEURL;?>restaurant.php">Restaurants</a>
                <a onclick="closeNav()" href="#">Cart</a>
                <a onclick="closeNav()" href="#">About</a>
                <a onclick="closeNav()" href="#">Contact</a>
                <a onclick="closeNav()" href="<?php echo SITEURL;?>login.php">Login/Register</a>
               </div>
            </div>
            </div>
        </div>
   
        <div class="clearfix"></div>
    </nav>
</div>

    </header>