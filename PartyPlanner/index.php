<?php
session_start();

if(isset($_SESSION['email'])){
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