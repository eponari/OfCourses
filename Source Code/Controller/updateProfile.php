<?php
    session_start();

    include("../Model/User.php");

    include("../Utility/validateInput.php");

    if(!validateInputs($_POST["name"],$_POST["password"],$_SESSION["email"])){
        echo "<script>history.back()</script>";
        exit();
    }

    $userRepository = new User();

    $userRepository->updateUser($_POST["name"],$_POST["password"],$_SESSION["email"]);
?>