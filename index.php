<?php include('partial-front/menu.php');?>
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

  <?php include('partial-front/footer.php');?>