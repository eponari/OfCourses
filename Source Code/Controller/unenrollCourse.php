<?php
    session_start();
    include("../Model/course.php");

    $courseRepository = new Course();

    $courseRepository->unenrollStudent($_GET["id"],$_SESSION["email"]);
    
    header("Location: ../Student/courses.php");
?>