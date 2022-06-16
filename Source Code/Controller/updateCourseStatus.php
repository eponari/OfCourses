<?php
    include("../Utility/administatorHeader.php");
    include("../Model/course.php");

    include("../Utility/validateInput.php");

    if(!validateInputs($_GET['id'])){
        echo "<script>history.back()</script>";
        exit();
    }

    $courseRepo = new Course();

    $courseRepo->updateStatus($_GET['id']);

    header("Location: ../Administator/validateCourses.php");
?>