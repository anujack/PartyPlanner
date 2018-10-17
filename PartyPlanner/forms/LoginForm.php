<?php
session_start();
include_once "../includes/db.php";

$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

$query = "SELECT * FROM users WHERE email='$email';";
$r = mysqli_query($conn,$query);

// $row = mysqli_fetch_assoc($r);
// echo "password: ",$row['pasword'];

if(mysqli_num_rows($r)<=0) {
    // echo "LOGIN FAILED!!";
    header("Location: ../Login.php?login=error");
    exit();
} else {
    $row = mysqli_fetch_assoc($r);
    if($row['pasword']===substr(hash("md5",$password),0,20)){
        header("Location: ../index.php");
        $_SESSION['first_name']=$row['first_name'];
        $_SESSION['last_name']=$row['last_name'];
        $_SESSION['email']=$row['email'];
    } else {
        // echo "LOGIN FAILED!!";
        header("Location: ../Login.php?login=error");
        exit();
    }    
}