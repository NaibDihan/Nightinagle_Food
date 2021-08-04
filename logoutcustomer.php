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
         <a href="index.html"><img src="images/logo2.png" alt="Restaurant logo" class="img-responsive"></a>
        </div>

        <div class="menu text-right">
         <ul>
             <li>
                 <a href="index.html">Home</a>
             </li>
             <li>
                <a href="#">Restaurants</a>
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
                <a href="index.html">logout</a>
            </li>
         </ul>

         <div class="mobile-menu">
             <span onclick="openNav()">&#9776;</span>
             <div id="myNav" class="overlay">
             <a href="javascript:void(0)" onclick="closeNav()" class="closebtn">&times;</a>
             <div class="overlay-content">
                <a onclick="closeNav()" href="#">Home</a>
                <a onclick="closeNav()" href="#">Restaurants</a>
                <a onclick="closeNav()" href="#">Cart</a>
                <a onclick="closeNav()" href="#">About</a>
                <a onclick="closeNav()" href="#">Contact</a>
                <a onclick="closeNav()" href="#">Login/Register</a>
               </div>
            </div>
            </div>
        </div>
   
        <div class="clearfix"></div>
    </nav>
</div>

    </header>
    <!--Navbar section End-->
     
    <!--food-search section start-->
    <section class="food-search text-center">
        <div class="container">
            <div class="text">
            <h1>Are you Hungry?</h1>
            <p>Make your every bite delicious</p>
            </div>

            <form action="">
                <input type="search" name="search" placeholder="Search for restaurants">
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!--food-search section end-->
    
    <!--restaurant section start-->
    <section class="restaurant">
        <div class="container">
            <h2 class="text-center">Best Selling Restaurants</h1>
            <a href="#">
                <div class="box-3 float-container">
                 <img src="images/res1.jpg" alt="res1" class="img-responsive">
                 <div class="float-text background">
                    <h3 class="text-white">Faria's Cafe</h3>
                 </div>
            </div> </a>

         <a href="#">
              <div class="box-3 float-container">
                <img src="images/res2.jpg" alt="res1" class="img-responsive">
                <div class="float-text background text-center">
                   <h3 class="text-white">Naib's Cafe</h3>
                </div>
           </div> 
        </a>
         
        <a href="#">
            <div class="box-3 float-container">
            <img src="images/res3.jpg" alt="res1" class="img-responsive">
            <div class="float-text background text-center">
               <h3 class="text-white">Faib's Corner</h3>
            </div>
       </div> 
    </a>

            <div class="clearfix"></div>
        </div>
    </section>

    <!--restaurant section end-->

    <!--specialities section start-->
    <section class="specialities">
        <div class="container">
            <div class="special-container">
            <div class="special-box">
                <div class="icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>24/7 Support</h3>
                <p>Are you hungry at midnight? Don't worry!! Food Nightiangle is with you 24/7. Close your eyes and wait for us.</p>
            </div>
            
            <div class="special-box">
                <div class="icon">
                    <i class="fas fa-biking"></i>
                </div>
                <h3>Free Delivery Charge</h3>
                <p>Enjoy your food. Why do you care for delivery charges? We provide delivery for free.</p>
            </div>

            <div class="special-box">
                <div class="icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Easy Payment</h3>
                <p>We are offering you all easy methods of paying such as Cash on delivery, BKash , Nagad , Rocket etc.</p>
               </div>
            </div>
            
            <div class="clearfix"></div>


        </div>
    </section>
    <!--specialities section end-->

    <!--our-team section start-->
    <section class="our-team text-center">
        <div class="container">
            <h2>our team</h2>
             <div class="team">
            <div class="team-member">
              <img src="./images/member1.jpg" alt="faria">
               <div class="text-member">
                   <h2>Faria Hasan</h2>
                   <p>Owner & Founder</p>
               </div>
             <div class="social-link">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
             </div>
             </div>

             <div class="team-member">
                <img src="./images/member2.jpg" alt="naib">
                 <div class="text-member">
                     <h2>Naib Uddin</h2>
                     <p>Owner & Co-Founder</p>
                 </div>
               <div class="social-link">
                  <ul>
                      <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
               </div>
               </div>
               </div>
               <div class="clearfix"></div>
               </div>
    </section>
   <!--our-team section end-->

   <!--footer section start-->
    <section class="footer">
        <div class="container">
           <div class="foot text-center">
            <div class="logo1">
                <img src="images/logo2.png" alt="Restaurant logo" class="img-responsive">
           </div>
           </div>
           
           <div class="foot text-center">
               <h3>Contact Us</h3>
               <p class="email">afmnaibuddin@gmail.com</p>
               <p class="mobile">+8801999296099</p>
            <div class="social-link">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
             </div>
           </div>
           
           <div class="clearfix"> </div>
        </div>
        <div class="copy">
            <p class="copyright">© Copyright Naib-Faria.All rights reserved</p>
            <p>Designed by Team FN.</p>  
            </div>
    </section>
    <!--footer section end-->

    
    
   <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
   <script src="main.js"></script>


 
</body>
</html>