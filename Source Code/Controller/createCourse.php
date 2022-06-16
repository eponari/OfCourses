<?php
    include("../Utility/professorHeader.php");
    session_start();

    include("../Utility/validateInput.php");

    if(!validateInputs($_POST["weeks"],$_POST["description"],$_POST["title"],$_POST["startDate"],$_POST["endDate"])){
        echo "<script>history.back()</script>";
        exit();
    }
    
    if(isset($_POST["weeks"]) and isset($_POST["description"]) and isset($_POST["title"]) and isset($_POST["startDate"]) and isset($_POST["endDate"])){
        $weeks = $_POST["weeks"];
        $description = $_POST["description"];
        $title = $_POST["title"];
        $startDate = $_POST["startDate"];
        $endDate = $_POST["endDate"];

        if(!empty($weeks) and !empty($description) and !empty($title) and !empty($startDate) and !empty($endDate)){
            include("../Model/course.php");

            $courseRepo = new Course();

            $course = $courseRepo->createCourse($_SESSION["email"],$title,$description,$startDate,$endDate,$weeks);
        }
    }

    header("Location: ../Professor/manageCourses.php");
?>