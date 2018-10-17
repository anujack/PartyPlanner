<?php
session_start();

if(isset($_SESSION['email'])){
    include_once "PostLogin/index.php";
} else {
    include_once "PreLogin/index.php";
}

// echo date_default_timezone_set("";)
echo "The time is " . date("m");