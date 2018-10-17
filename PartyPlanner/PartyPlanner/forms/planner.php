<<<<<<< HEAD
<?php
include_once "../includes/db.php";
session_start();
if(isset($_SESSION['email'])){
    if(isset($_POST['name'])&&isset($_POST['address'])&&isset($_POST['date'])&&isset($_POST['time'])){
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);
        $date = mysqli_real_escape_string($conn,$_POST['date']);
        $time = mysqli_real_escape_string($conn,$_POST['time']);
        $email = $_SESSION['email'];
        $query = "INSERT INTO parties(name,address,email,date,time) VALUES ('$name','$address','$email','$date','$time');";
        mysqli_query($conn,$query);
        echo "Party Planned!!";

    } else {
        header("Location: ../Plan.php?form=empty");
        exit();
    }    
} else {
    header("Location: ../Plan.php?form=notloggedin");
    exit();
}

=======
<?php
include_once "../includes/db.php";
session_start();
if(isset($_SESSION['email'])){
    if(isset($_POST['name'])&&isset($_POST['address'])&&isset($_POST['date'])&&isset($_POST['time'])){
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);
        $date = mysqli_real_escape_string($conn,$_POST['date']);
        $time = mysqli_real_escape_string($conn,$_POST['time']);
        $email = $_SESSION['email'];
        $query = "INSERT INTO parties(name,address,email,date,time) VALUES ('$name','$address','$email','$date','$time');";
        mysqli_query($conn,$query);
        echo "Party Planned!!";

    } else {
        header("Location: ../Plan.html?form=empty");
    }    
} else {
    header("Location: ../Login.html?form=notloggedin");
}
>>>>>>> 9dfab4a1ee77befbfb391935d18e5b996b8b4bfc
