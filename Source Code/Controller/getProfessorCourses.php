<?php

        include("../Model/course.php");

        $courseRepository = new Course();

        $myCourses = $courseRepository->getProfessorCourses($_SESSION["email"]);

        if(count($myCourses)>0){
          echo "<div class='flex-container'>";
          foreach($myCourses as $course){
            if(strlen($course["description"])>200){
              $course["description"] = substr($course["description"],0,200)."...";
            }
  
            echo "<div class='border' id='oop' style='width: 300px;'>".
                "<h4><a href='../Professor/viewCourse.php?courseId={$course["id"]}' class='stretched-link'>{$course['name']}</a></h4>".
                "<p> {$course['description']} </p>".
                "<a class='btnExtra' href='../Controller/deleteCourse.php?id={$course['id']}'>Delete</a>".
                "<h5> {$course['status']}: {$course['cnt']} enrolled students </h5>".
              "</div>";
          }
          echo "</div>";
        }
?>