<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manage Courses</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="../css/profCoursesStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    
    <?php
      include("../Utility/professorHeader.php");
    ?>

 
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
     
      <h2> </h2>
      
  </section>

  <main id="main">

       <h4> <a class="buttonExtra" href="addCourse.php">Add New Course</a>
       </h4>
      
    
       <?php
        session_start();

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
                "<h4><a href='' class='stretched-link'>{$course['name']}</a></h4>".
                "<p> {$course['description']} </p>".
                "<a class='btnExtra' href='../Controller/deleteCourse.php?id={$course['id']}'>Delete</a>".
                "<h5> {$course['status']}: {$course['cnt']} enrolled students </h5>".
              "</div>";
          }
          echo "</div>";
        }
      ?>
    




  </body>