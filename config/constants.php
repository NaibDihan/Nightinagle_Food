<?php
//Session started
session_start();

//Create constants to store non repeating values
define('SITEURL','http://localhost/project2/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','food_nightingale');




$conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error($conn));  //connecting Database
$db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn)); //selecting database

?>