<?php include('partial-front/menu.php');?>

    <section class="food-forget text-center">
        <div class="container">
            <div class="loginbox forget">
                <h1>Validation</h1>
                
                <form action="" method="POST">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Your Username" required>
                <p>New Password</p>
                <input type="password" name="newpassword" placeholder="New Password" required>
                <p>Confirm Password</p>
                <input type="password" name="confirmpass" placeholder="Confirm Password" required>
                <p class="userp">User Type</p>
                <select name="usertype">
                    <option value="Admin">Admin</option>
                    <option value="Customer">Customer</option>
                    <option value="Restaurant-Owner">Restaurant Owner</option>
                </select>
                <input type="submit" name="Submit" value="Submit"/>
            </form>

            </div>
        </div>
    </section>

    <?php include('partial-front/footer.php');?>

<?php

if(isset($_POST['Submit'])){
    $username = $_POST['username'];
    $usertype = $_POST['usertype'];
    $newpass = md5($_POST['newpassword']);
    $confirmpass = md5($_POST['confirmpass']);

    if($newpass == $confirmpass )
    {
        if($usertype == "Customer"){
            $sql = "SELECT * FROM tbl_customer WHERE username='$username'";
            $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($res){
                if(mysqli_num_rows($res)>0){
                    $sql1 = "UPDATE tbl_customer SET password='$newpass' 
                    WHERE username='$username'";
                     $res1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
                     if($res1){
                         echo "
                         <script>
                         alert('Password Changed Successfully');
                         window.location.href = 'index.html';
                         </script>
                         
                         ";
                     }
                     else{
                        echo "
                        <script>
                        alert('Database Error');
                        window.location.href = 'forgetpass.php';
                        </script>
                        
                        ";
                     }

                }
                else{
                    echo "
                    <script>
                    alert('Username is not valid');
                    window.location.href = 'forgetpass.php';
                    </script>
                    
                    ";
                }

            }
            else{
                echo "
                <script>
                alert('Database Error');
                window.location.href = 'forgetpass.php';
                </script>
                
                ";
             }
        }

        if($usertype == "Restaurant-Owner"){
            $sql = "SELECT * FROM tbl_owner WHERE username='$username'";
            $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($res){
                if(mysqli_num_rows($res)>0){
                    $sql1 = "UPDATE tbl_owner SET password='$newpass' 
                    WHERE username='$username'";
                     $res1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
                     if($res1){
                         echo "
                         <script>
                         alert('Password Changed Successfully');
                         window.location.href = 'owner.php';
                         </script>
                         
                         ";
                     }
                     else{
                        echo "
                        <script>
                        alert('Database Error');
                        window.location.href = 'forgetpass.php';
                        </script>
                        
                        ";
                     }

                }
                else{
                    echo "
                    <script>
                    alert('Username is not valid');
                    window.location.href = 'forgetpass.php';
                    </script>
                    
                    ";
                }

            }
            else{
                echo "
                <script>
                alert('Database Error');
                window.location.href = 'forgetpass.php';
                </script>
                
                ";
             }
        }

        if($usertype == "Admin"){
            $sql = "SELECT * FROM tbl_admin WHERE username='$username'";
            $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($res){
                if(mysqli_num_rows($res)>0){
                    $sql1 = "UPDATE tbl_admin SET password='$newpass' 
                    WHERE username='$username'";
                     $res1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
                     if($res1){
                         echo "
                         <script>
                         alert('Password Changed Successfully');
                         window.location.href = 'admin/index.php';
                         </script>
                         
                         ";
                     }
                     else{
                        echo "
                        <script>
                        alert('Database Error');
                        window.location.href = 'forgetpass.php';
                        </script>
                        
                        ";
                     }

                }
                else{
                    echo "
                    <script>
                    alert('Username is not valid');
                    window.location.href = 'forgetpass.php';
                    </script>
                    
                    ";
                }

            }
            else{
                echo "
                <script>
                alert('Database Error');
                window.location.href = 'forgetpass.php';
                </script>
                
                ";
             }
        }
    }
   
    
    else{
        echo "
        <script>
        alert('New and Confirm Password did not match');
        window.location.href = 'forgetpass.php';
        </script>
        
        ";
     }
}


?>


