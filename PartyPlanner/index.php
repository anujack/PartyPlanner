<?php
session_start();

if(isset($_SESSION['email'])){
<<<<<<< HEAD
    include_once "PostLogin/index.php";
} else {
    include_once "PreLogin/index.php";
}

// echo date_default_timezone_set("";)
echo "The time is " . date("m");
=======
    echo "<a href='Login.html'>Login Form</a><br>
    <a href='Signup.html'>SignUp Form</a><br>
    <a href='Plan.html'>Planner</a><br>
    <form action='forms/logout.php' method='POST'>
    <button type='submit' name='submit' class='btn btn-default'>Logout</button>
    </form>";
} else {
    echo "<a href='Login.html'>Login Form</a><br>
    <a href='Signup.html'>SignUp Form</a><br>
    <a href='Plan.html'>Planner</a>";
}
>>>>>>> 9dfab4a1ee77befbfb391935d18e5b996b8b4bfc
