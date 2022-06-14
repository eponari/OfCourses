<?php
      session_start();
      if($_SESSION["type"] == 2){
        include("../Utility/professorHeader.php");
      }else{
        include("../Utility/studentHeader.php");
      }
      
      include("../Model/course.php");

      $courseRepo = new Course();

      if($_SESSION["type"] == 2){
        $course = $courseRepo->getCourseFromProfessor($_SESSION["email"],$_GET["courseId"]);
      }else{
        $course = $courseRepo->getCourseFromStudent($_SESSION["email"],$_GET["courseId"]);
      }
      
      if(!$course){
        if($_SESSION["type"] == 2){
          header("Location: ../Professor/manageCourses.php");
        }else{
          header("Location: ../Student/courses.php");
        }
      }
?>