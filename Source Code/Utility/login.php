<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

include("../Utility/validateInput.php");

if(!validateInputs($_POST['submit'],$_POST['username'],$_POST['password'])){
	echo "<script>history.back()</script>";
	exit();
}

$_POST['username'] = htmlentities($_POST['username']);
$_POST['password'] = htmlentities($_POST['password']);

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else{
        // Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $connection = mysqli_connect("localhost", "root", "","ofcoursesdb");

        // SQL query to fetch information of registerd users and finds user match.
        $query = mysqli_query($connection,"select * from users where password='$password' AND email='$username'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user']=$username; // Initializing Session
            header("location: index.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }
        mysqli_close($connection); // Closing Connection
    }
}
?>
