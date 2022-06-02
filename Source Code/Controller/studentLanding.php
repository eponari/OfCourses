<?php
    // session_start();
    
    // if(isset($_SESSION['user'])){
    
    //   $USER=$_SESSION['user']['email'];
    // }else {
    //     header("Location: ../login.php");
    // }

    include("../Model/course.php");

    $coursesRepo = new Course();

    $courses = $coursesRepo -> getAllCourses();

    if($courses) {
        foreach($courses as $c){
            $id = $c['id'];
            $name = $c['name'];
            $description = $c['description'];
            $professorEmail = $c['professorEmail'];
            $startDate = $c['startDate'];
            $endDate = $c['endDate'];
        }
    }

    $courseName = $coursesRepo -> getCourseName();

    if($courseName){
        foreach($courseName as $course){
            $id = $course['id'];
            $name = $course['name'];
        }
    }

    $weekNumber = $coursesRepo -> getCurrentWeek();

    if($weekNumber){
        foreach($weekNumber as $week){
            $weekNr = $week['weekNr'];
            $weekTitle = $week['title'];
        }
    }

    $status = $coursesRepo -> getStatus();

    if($status){
        foreach($status as $status){
            
        }
    }

    $grade = $coursesRepo -> getGrade();

    if($grade){
        foreach($grade as $grade){

        }
    }


?>