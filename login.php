<?php include('partial-front/menu.php');?>


<section class="food-login text-center">
        <div class="container">
        <h1 class="login-h1">Login here</h1>
            <div class="loginbox">
                <div class = "loginbhitore">
                <form action="" method="POST">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Your Username" required>
                <p >Password</p>
                <input type="password" name="password" placeholder="Enter Your Password" required>
                <p class="userp">User Type</p>
                <select name="usertype">
                    <option value="Admin">Admin</option>
                    <option value="Customer">Customer</option>
                    <option value="Restaurant-Owner">Restaurant Owner</option>
                </select>
                <input type="submit" name="Submit" value="Login"/>
                <a href="forgetpass.php">Forget Password?</a><br>
                <a href="signup.php">Don't have an account?</a>
            </form>
                </div>
            

            </div>
        </div>
    </section>


  


    <?php include('partial-front/footer.php');?>



    

<?php
  if(isset($_POST['Submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $usertype = $_POST['usertype'];

    if($usertype=="Customer"){
        $sql="SELECT * FROM tbl_customer WHERE username='$username' AND password='$password' ";
        $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($res){
            if(mysqli_num_rows($res)>0){
                echo "
                <script>
                alert('You are logged in.');
                window.location.href = 'logoutcustomer.php';
                </script>
                ";

            }
            else{
                $sql2="SELECT * FROM tbl_customer WHERE username='$username'";
                $res2=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
                if($res2){
                    if(mysqli_num_rows($res2)>0){
                        echo "
                        <script>
                        alert('Incorrect Password');
                        window.location.href = 'login.php';
                        </script>
                        ";
        
                    }
                    else{
                        echo "
                        <script>
                        alert('You dont have an account. Please Register.');
                        window.location.href = 'signup.php';
                        </script>
                        ";

                    }
                }
               

            }
        }
        else{
            echo "
                <script>
                alert('Database Error');
                window.location.href = 'login.php';
                </script>
                ";
        }
    }

    else if($usertype=="Restaurant-Owner"){
        $sql="SELECT * FROM tbl_owner WHERE username='$username' AND password='$password' ";
        $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($res){
            if(mysqli_num_rows($res)>0){
                echo "
                <script>
                alert('You are logged in.');
                window.location.href = 'ownerfood.php';
                </script>
                ";
                $sql1="SELECT * FROM tbl_restaurant_info WHERE username='$username'";
                $res1=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
                if($res1)
                {
                    if(mysqli_num_rows($res1)>0)
                    {    $row = mysqli_fetch_assoc($res1);
                        $res_name=$row['res_name'];
                        $image=$row['res_img'];
                        session_start();
                        $_SESSION['restaurant-name']=$res_name;
                        $_SESSION['image']=$image;
                    }
                }
                
                session_start();
                $_SESSION['username']=$username;

            }
            else{
                $sql2="SELECT * FROM tbl_owner WHERE username='$username'";
                $res2=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
                if($res2){
                    if(mysqli_num_rows($res2)>0){
                        echo "
                        <script>
                        alert('Incorrect Password');
                        window.location.href = 'login.php';
                        </script>
                        ";
        
                    }
                    else{
                        echo "
                        <script>
                        alert('You dont have an account. Please Register.');
                        window.location.href = 'signup.php';
                        </script>
                        ";

                    }

            }
        }
    }
        else{
            echo "
                <script>
                alert('Database Error');
                window.location.href = 'login.php';
                </script>
                ";
        }
    }

    else{
        $sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password' ";
        $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($res){
            if(mysqli_num_rows($res)>0){
               $_SESSION['user']=$username; //to check whether admin is logged in or not and logout.php will unset it
                echo "
                <script>
                alert('You are logged in.');
                window.location.href = 'admin/index.php';
                </script>
                ";

            }
            else{
                $sql2="SELECT * FROM tbl_admin WHERE username='$username'";
                $res2=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
                if($res2){
                    if(mysqli_num_rows($res2)>0){
                        echo "
                        <script>
                        alert('Incorrect Password');
                        window.location.href = 'login.php';
                        </script>
                        ";
        
                    }
                    else{
                        echo "
                        <script>
                        alert('You dont have an account. Please Register.');
                        window.location.href = 'signup.php';
                        </script>
                        ";

                    }

            }
        }
    }
        else{
            echo "
                <script>
                alert('Database Error');
                window.location.href = 'login.php';
                </script>
                ";
        }
    }
  }
   

 










?>

