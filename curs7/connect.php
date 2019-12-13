<?php
//$con = mysqli_connect("localhost","my_user","my_password","my_db");
//$con = mysqli_connect("localhost","root","","mysite");
$con = mysqli_connect("localhost","test_mysite","test","mysite");
// Check connection
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

 ?>
