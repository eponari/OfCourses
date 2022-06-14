<?php
      session_start();
      
      if($_SESSION["type"] == 2){
        include("../Utility/professorHeader.php");
      }else{
        include("../Utility/studentHeader.php");
      }
      
      include("../Model/assignment.php");

      $assignmentRepo = new Assignment();

      $assignment = $assignmentRepo->getAssignment($_GET["id"]);

    //   if(!$assignment){
    //     if($_SESSION["type"] == 2){
    //       header("Location: ../Professor/manageCourses.php");
    //     }else{
    //       header("Location: ../Student/courses.php");
    //     }
    //   }
?>
