<?php
session_start();
if(isset($_POST['submit'])){
    session_unset();
    session_destroy();
    echo "Logout Successful";
  //  header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}
