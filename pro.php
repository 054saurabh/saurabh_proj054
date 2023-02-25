<?php

$name=$_POST(['uname']);
$mobile=$_POST(['mobile number']);
$gmail=$_POST(['gmail id']);
$pass=$_POST(['password']);
$con=mysqli_connect("localhost","root","","mysql");
if($con){
    echo "connected";
}

$query="INSERT INTO sau VALUE ('$name','$mobile','$gmail','$pass')";
$run=mysqli_query($con,$query);

?>