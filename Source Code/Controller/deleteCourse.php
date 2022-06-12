<?php
    session_start();

    if($_SESSION["type"] == 2 || $_SESSION["type"] == 3){
        if(isset($_GET["id"])){
            include("../Model/course.php");

            $courseRepository = new Course();

            $courseRepository->deleteCourse($_GET["id"]);
            header("Location: ../Professor/manageCourses.php");
        }else{
            echo "Error";
            header("Location: ../Student/welcome.php");
        }
    }else{
        echo "Error";
        header("Location: ../index.php");    
    }
?>