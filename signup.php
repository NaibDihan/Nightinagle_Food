<?php include('partial-front/menu.php');?>


    <section class="food-signup text-center">
        <div class="container">
            <div class="signupbox">
                <h1>Signup here</h1>
                <form action="" method="POST">
                <p>Full Name</p>
                <input type="text" name="fullname" placeholder="Enter Your Full Name" required>
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Your Username" required>
                <p>Email</p>
                <input type="email" name="email" placeholder="Enter Your Email" required>
                <p>Address</p>
                <input type="text" name="address" placeholder="Enter Your Address" required>
                <p>Enter Password</p>
                <input type="password" name="password" placeholder="Enter Your Password" required>
                <p>Confirm Password</p>
                <input type="password" name="confirmpass" placeholder="Confirm Password" required>
                <p class="userp">Select User Type</p>
                <select name="usertype" >
                    <option value="Customer">Customer</option>
                    <option value="Restaurant-Owner">Restaurant Owner</option>
                </select> 
                <input type="submit" name="Submit" value="Signup"/>
                <a href="login.php">Already an account?</a>
            </form>



            </div>
        </div>
    </section>

    <?php include('partial-front/footer.php');?>


<?php
//Process the value from form and save it in database

//Check whether the submit button is clicked or not

if(isset($_POST['Submit']))
{
    //1.Get the data from form
    $full_name = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password =md5($_POST['password']); //Password Encrypted
    $confirmpass =md5($_POST['confirmpass']);
    $usertype = $_POST['usertype'];
        

  //2.SQL Query to save the data into the database
  

    if($password==$confirmpass){
        if($usertype=="Customer"){
            $sql1="SELECT * from tbl_customer where username='$username'";
            $res1= mysqli_query($conn,$sql1) or die(mysqli_error($conn));
            if($res1)
            {
                if(mysqli_num_rows($res1)>0)
                {
                    echo "
                    <script>
                    alert('This Username already exist.Please try another username.');
                     window.location.href='signup.php';
                     </script>
                     ";
                 }
                    else{
                        $sql = "INSERT INTO tbl_customer SET
        full_name='$full_name',
        username='$username',
        password='$password',
        email='$email',
        address='$address'

    ";
      $res=mysqli_query($conn,$sql) or die(mysqli_error($conn)); 
      if($res)
  {
      echo "
       <script>
            alert('you are registered');
            window.location.href='logoutcustomer.php';

       </script>
      
      ";
      
  }
  else{
    echo "
    <script>
         alert('failed');
         window.location.href='signup.php';

    </script>
   
   ";
     
  }

}

}

}
        

else if($usertype=="Restaurant-Owner"){
    $sql1="SELECT * from tbl_owner where username='$username'";
            $res1= mysqli_query($conn,$sql1) or die(mysqli_error($conn));
            if($res1)
            {
                if(mysqli_num_rows($res1)>0)
                {
                    echo "
                    <script>
                    alert('This Username already exist.Please try another username.');
                     window.location.href='signup.php';
                     </script>
                     ";
                     
                    }
                 else{
    $sql = "INSERT INTO tbl_owner SET
    full_name='$full_name',
    username='$username',
    password='$password',
    email='$email',
    address='$address'

";
  $res=mysqli_query($conn,$sql) or die(mysqli_error($conn)); 
  if($res)
{
  echo "
   <script>
        alert('you are registered');
        window.location.href='owner.php';

   </script>
  
  ";
  session_start();
  $_SESSION['username']=$username;
  
}
else{
echo "
<script>
     alert('failed');
     window.location.href='signup.php';

</script>

";
 
}

}

}

}
    }
    
    else{
        echo "
        <script>
             alert('pass mile nai');
             window.location.href='signup.php';
    
        </script>
       
       ";
    }
}


?>

