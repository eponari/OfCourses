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
            $status = $status['weekNr'];
        }
    }

    $grade = $coursesRepo -> getGrade();

    // if($grade){
    //     foreach($grade as $g){
    //         $grade = $g['grade'];
    //     }
    // }

    $weeks = $coursesRepo -> getAllWeeks();

    if($weeks){
        foreach($weeks as $w){
            $title = $w['title'];
            $nr = $w['weekNr'];
            $courseId = $w['courseId'];
            $id = $w['id'];
        }
    }


    $assignment = $coursesRepo -> getAllAssignments();

    if($assignment){
        foreach($assignment as $a){
            $id = $a['id'];
            $weeknrs = $a['weekNr'];
            $grade = $a['grade'];
            $uploadDate = $a['uploadDate'];
            $dueDate = $a['dueDate'];
        }
    }

    $professor = $coursesRepo -> getProfessorForCourse();

    if($professor){
        foreach($professor as $p){
            $fullName = $p['fullName'];
        }
    }

    // $enrolledStudents = $coursesRepo -> studentEnrolled();

    $courseDescription = $coursesRepo -> getCourseDescription();

    if($courseDescription){
        foreach($courseDescription as $cd){
            $courseDesc = $cd['description'];
        }
    }




?>