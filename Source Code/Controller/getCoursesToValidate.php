<?php

    function processDescription($desc){
        $result = "";
        $count = 0;
        
        

        for($count=0;$count+100<strlen($desc);$count+=100){
            $result.=substr($desc,$count,100)."<br>";
        }

        $result.=substr($desc,$count)."<br>";

        return $result;

    }

    include("../Model/course.php");

    $courseRepository = new Course();

    $courses = $courseRepository->getAllUnverifiedCourses();

    foreach($courses as $course){
        $desc = processDescription($course['description']);
        echo "<div class='border'>
        <h3 class='professor-name'>{$course['fullname']}</h3>
        <h4>{$course['name']}</h4>
       <p> {$desc}</p> 
       <a class='btnExtra' href='../Controller/updateCourseStatus.php?id={$course['id']}'>Approve</a>
       <a class='btnDelete' href='../Controller/deleteCourse.php?id={$course['id']}'>Delete</a>
      </div>";
    }
?>