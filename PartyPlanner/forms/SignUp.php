<?php
include_once "../includes/db.php";
$first_name = mysqli_real_escape_string($conn,$_POST['FirstName']);
$last_name = mysqli_real_escape_string($conn,$_POST['LastName']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$password = hash("md5",$password);

$query = "SELECT * FROM users WHERE email='$email';";
$r = mysqli_query($conn,$query);
if(mysqli_num_rows($r)>0) {
    echo "The User Already Exists Please click the link below and type in other email";
    exit();
} else{
    $query = "INSERT INTO users(first_name,last_name,email,pasword) VALUES ('$first_name','$last_name','$email','$password');";
    mysqli_query($conn,$query);
    echo "Thank You Bitch!!";
}