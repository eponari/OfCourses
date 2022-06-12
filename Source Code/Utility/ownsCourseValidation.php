<?php
      include("../Utility/professorHeader.php");
      include("../Model/course.php");

      $courseRepo = new Course();

      $course = $courseRepo->getCourseFromProfessor($_SESSION["email"],$_GET["courseId"]);

      if(!$course){
        header("Location: manageCourses.php");
      }
?>