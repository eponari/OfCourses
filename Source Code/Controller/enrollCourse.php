<?php
    include("../Utility/studentHeader.php");
    include("../Model/course.php");

    include("../Utility/validateInput.php");

    if(!validateInputs($_GET["id"])){
        echo "<script>history.back()</script>";
        exit();
    }

    $courseRepository = new Course();

    $courseRepository->enrollStudent($_GET["id"],$_SESSION["email"]);

    header("Location: ../Student/courses.php");
?>