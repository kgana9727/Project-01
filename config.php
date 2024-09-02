<?php
$host = "199.0.0.2";
$username = "gana";
$password = "123";
$db = "gana";
$conn = mysqli_connect($host,$username,$password,$db);
if($conn=mysqli_connect_error()){
    echo "Error";
} 
?>