<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to OfCourses.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Template Main CSS File -->
  <link href="../css/navbarStyle.css" rel="stylesheet">
  <link href="../css/studentStyle.css" rel="stylesheet">
  <link href="../css/openCourse.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <?php
    include("../Utility/studentHeader.php");
    include("../Controller/studentLanding.php");
  ?>

  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
  
    <img src="../images/image6.jpg" style="width:30%;"  class="container-three">
    <h2 >  <?php echo $course['id']; echo " "; echo $course['name']; ?> 
        <p style="text-decoration: underline;"> <?php echo $fullName; ?></p>
        <!-- <p style="color: gray;"> Students enrolled: <?php echo $enrolledStudents; ?> </p> -->
       
        <br> <p style="color: black;"> <?php echo $course['id']; echo " "; echo $course['name'];  ?>
        </p>
    </h2>
  

    <div class="flex-container" style="width: 100%;">

        <div class="border">
          
          <h4><a href="" class="stretched-link">Course Description: </a></h4>
         <p style="text-align:left; text-justify:inter-word;"> <?php echo $courseDesc ?></p>

         <!-- <h5> Key Skills: Artistic ability, creativity, analytical skills, communication skills, leadership, time-efficiency, computer skills.</h5> -->
         
         <!-- <h4><a href="" class="stretched-link">Course Objectives: </a></h4>
         <p style="text-align:left; text-justify:inter-word;"> This course introduces the basic concepts of Computer Graphics Design by providing the necessary theoretical material
             as well as enough practical applications connected with appropriate software programs which will make the workflow 
            process smoothly. Further on, this course aims to teach students the programming languages needed for the program along with demonstrative scripts 
        and assignments which can be solved both creatively and experimentally. </p> -->

        <p style="color: gray; text-align: left;"> Weeks 14: 14 </p>
        <h4><a href="" class="stretched-link">Lessons: </a></h4>
        <li> <a href="viewWeek.php" class="stretched-link">Week 1 </a></li>
        <li> <a href="viewWeek.php" class="stretched-link">Week 2 </a></li>
        <li> <a href="viewWeek.php" class="stretched-link">Week 3 </a></li>
        <li> <a href="viewWeek.php" class="stretched-link">Week 4 </a></li>
        <li> <a href="viewWeek.php" class="stretched-link">Week 5 </a></li>
        <li> <a href="viewWeek.php" class="stretched-link">Week 6 </a></li>
        <li> <a href="viewWeek.php" class="stretched-link">Week 7 </a></li>
        <li> <a href="viewWeek.php" class="stretched-link">Week 8 </a></li>
        <li> <a href="viewWeek.php" class="stretched-link">Week 9 </a></li>
        <li> <a href="viewWeek.php" class="stretched-link">Week 10 </a></li>
        <li> <a href="viewWeek.php" class="stretched-link">Week 11 </a></li>
        <li> <a href="viewWeek.php" class="stretched-link">Week 12 </a></li>
        <li> <a href="viewWeek.php" class="stretched-link">Week 13 </a></li>
        <li> <a href="viewWeek.php" class="stretched-link">Week 14 </a></li>
    

    <h4><a href="" class="stretched-link">Graded Assignments: </a></h4>
    <table>
        <tr>
          <th>Assignments</th>
          <th>Grades</th>
          
        </tr>
        <tr>
          <td>Homework 1 </td>
          <td> 98 </td>
        </tr>
        <tr>
          <td>Homework 2</td>
          <td>  85</td>
        </tr>
        <tr>
            <td> Quiz 1 </td>
            <td>  80 </td>
          </tr>
          <tr>
            <td> Final Project </td>
            <td>  90 </td>
          </tr>
      </table>

      <h4><a href="" class="stretched-link">Status of the course: </a></h4><p style="padding:10px; background-color: rgb(63, 156, 63); font-weight: bold; text-align: left;"> Completed </p> 
    </p>
    
    <h5>CGPA: 3.50/4.00 </h5> 

        




  </div>
