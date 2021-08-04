<?php
//Authorization - Access Control
//Check whether the user is logged in or not
if(!isset($_SESSION['user']))
{
    //user is not logged in
    //redirect to login page with message

    //$_SESSION['no-login-message'] = "<div class='error'>Please login to access Admin Panal</div>"
    // header('location:'.SITEURl.'admin/login.php');
    //upore j 2 ti line likhe rekhechi ta diyeo kora jabe.chinta kore dekho
    echo "
    <script>
    window.location.href = '../login.php';
    alert('Please login to access admin panal');
    
    </script>
    ";
}


 ?>