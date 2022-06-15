<?php
    session_start();

    include("../Model/User.php");

    $userRepository = new User();

    $userRepository->updateUser($_POST["name"],$_POST["password"],$_SESSION["email"]);
?>