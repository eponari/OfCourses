<?php
    session_start();

    include("../Utility/validateInput.php");

    if(!validateInputs($_GET["id"])){
        echo "<script>history.back()</script>";
        exit();
    }

    $_GET["id"] = htmlentities($_GET["id"]);

    if($_SESSION["type"] == 2 || $_SESSION["type"] == 3){
        if(isset($_GET["id"])){
            include("../Model/course.php");

            $courseRepository = new Course();

            $courseRepository->deleteCourse($_GET["id"]);
            if($_SESSION["type"] == 2){
                header("Location: ../Professor/manageCourses.php");
            }else{
                header("Location: ../Administator/validateCourses.php");
            }
            
        }else{
            echo "Error";
            header("Location: ../Student/welcome.php");
        }
    }else{
        echo "Error";
        header("Location: ../index.php");    
    }
?>