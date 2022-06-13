<?php
    session_start();
    include("../Model/course.php");

    $courseRepository = new Course();

    $courseRepository->enrollStudent($_GET["id"],$_SESSION["email"]);

    header("Location: ../Student/courses.php");
?>