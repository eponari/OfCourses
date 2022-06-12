<?php

     // session_start();
    
    // if(isset($_SESSION['user'])){
    
    //   $USER=$_SESSION['user']['email'];
    // }else {
    //     header("Location: ../login.php");
    // }

    include("../Model/User.php");

    $userUpdate = new User();
    
?>