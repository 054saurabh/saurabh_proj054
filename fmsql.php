<?php

// include 'conn.php';
session_start();
header('location:project.html');
echo "welcome";

if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($con,$_POST(['uname']));
    $mobile=mysqli_real_escape_string($con,$_POST(['mobile number']));
    $gmail=mysqli_real_escape_string($con,$_POST(['gmail id']));
    $pass=mysqli_real_escape_string($con,$_POST(['password']));
    
    $con=mysqli_connect("localhost","root","","mysql");

    if($con){
        ?>
        <script>
            alert("connection succesfull");
        </script>
        <?php
        echo "connected";
        $emailquery="select * from sau where gmail_id='$gmail' ";
        $query=mysqli_query($con,$emailquery);
        $emailcount=mysqli_num_rows($query);
        if($emailcount){
            echo "this email already exit";
        }
        else{
            $cquery="INSERT INTO sau(name,mobile,gmail_id,password) VALUE ('$name','$mobile','$gmail','$pass')";
            $run=mysqli_query($con,$cquery);   
        }
    }
    else{
        ?>
        <script>
            alert("connection unsuccesfull");
        </script>
        <?php
    }
}
?>