<!DOCTYPE html>
<html lang="en">

<?php
  session_start();

  if(isset($_SESSION["type"])){
    switch($_SESSION["type"]){
      case 1:
        header("Location: ../Student/Welcome.php");
        break;
      case 3:
        header("Location: ../Administator/Welcome.php");
        break;
    }
  }else{
    header("Location: ../login.php");
  }
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to OfCourses!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Template Main CSS File -->
  <link href="../css/professorStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="https://github.com/eponari/OfCourses/blob/main/projectLogo.jpg?raw=true">

</head>

<body>

  <!-- ======= Header ======= -->
  
      <div class="container">
        <nav class="navbar">
        <div class="container-fluid">
        
            <a class="button" href="professorIndex.html">OfCourses</a>
           
            <a class="btn" href="../Utility/logout.php">Log Out</a></li>
            <a class="btn" href="myProfile.html">My Profile</a></li>
            <a class="btn" href="askTheProfessor.html">Ask the Professor</a></li>
            <a class="btn" href="manageCourses.html">Manage Courses</a></li>         
        </div>
       
      </div>
    </nav>
  </header>
  <!-- End Header -->

 
    <img src="../images/profImage.jpg" class="container-one">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
     
      <h2>Welcome, <span><?php echo $_SESSION["fullName"] ?>!</span></h2>
      
  </section>

  <main id="main">

       <h4> Current Courses:
        <br> <a class="buttonExtra" href="categories.html">Browse through categories</a>
       </h4>
      
    
    <div class="flex-container">

      <div class="border">
        
        <h4><a href="" class="stretched-link">Object Oriented Programming</a></h4>
       <p> Introduction to OOP with JAVA as a programming 
         <br> language. This course teaches from JAVA 
         <br> fundamentals to System Design and creating 
         <br> large-scale systems. </p>
       </p>
       <a class="btnExtra" href="deleteCourse.html">Delete</a>
       <h5> 120 enrolled students </h5>
      </div>

      <div class="border">
        <h4><a href="" class="stretched-link">Web Design Development.</a></h4>
        <p>Learn how to use HTML, CSS, Javascript
          <br> and PHP to build a website
          <br> from scratch. 
        </p>
        <a class="btnExtra" href="deleteCourse.html">Delete</a>
        <h5> 131 enrolled students </h5>
      </div>

      <div class="border">
        <h4><a href="" class="stretched-link">Media Design.</a></h4>
        <p> The objective of the course is to provide 
          <br> thestudents with an overview of the most 
          <br> relevant tools, materials, mechanics and
          <br> strategies of media design. </p>
          <a class="btnExtra" href="deleteCourse.html">Delete</a>
          <h5> 119 enrolled students </h5>
        </p>
      </div>

      <div class="border">
        <h4><a href="" class="stretched-link">C++ Programming</a></h4>
        <p>This course will start with the fundamental  
          <br> programming concepts before digging deeper  
          <br> into the more advanced C++ topics. </p>
          <a class="btnExtra" href="deleteCourse.html">Delete</a>
          <h5> 109 enrolled students </h5>
        </p>
      </div>

      <div class="border">
        
        <h4><a href="" class="stretched-link">Object Oriented Programming</a></h4>
       <p> Introduction to OOP with JAVA as a programming 
         <br> language. This course teaches from JAVA 
         <br> fundamentals to System Design and creating 
         <br> large-scale systems. </p>
       </p>
       <a class="btnExtra" href="deleteCourse.html">Delete</a>
       <h5> 120 enrolled students </h5>
      </div>

      <div class="border">
        <h4><a href="" class="stretched-link">Web Design Development.</a></h4>
        <p>Learn how to use HTML, CSS, Javascript
          <br> and PHP to build a website
          <br> from scratch. 
        </p>
        <a class="btnExtra" href="deleteCourse.html">Delete</a>
        <h5> 131 enrolled students </h5>
      </div>

      <div class="border">
        <h4><a href="" class="stretched-link">Media Design.</a></h4>
        <p> The objective of the course is to provide 
          <br> thestudents with an overview of the most 
          <br> relevant tools, materials, mechanics and
          <br> strategies of media design. </p>
          <a class="btnExtra" href="deleteCourse.html">Delete</a>
          <h5> 119 enrolled students </h5>
        </p>
      </div>

      <div class="border">
        <h4><a href="" class="stretched-link">C++ Programming</a></h4>
        <p>This course will start with the fundamental  
          <br> programming concepts before digging deeper  
          <br> into the more advanced C++ topics. </p>
          <a class="btnExtra" href="deleteCourse.html">Delete</a>
          <h5> 109 enrolled students </h5>
        </p>
      </div>

      <div class="border">
        
        <h4><a href="" class="stretched-link">Object Oriented Programming</a></h4>
       <p> Introduction to OOP with JAVA as a programming 
         <br> language. This course teaches from JAVA 
         <br> fundamentals to System Design and creating 
         <br> large-scale systems. </p>
       </p>
       <a class="btnExtra" href="deleteCourse.html">Delete</a>
       <h5> 120 enrolled students </h5>
      </div>

      <div class="border">
        <h4><a href="" class="stretched-link">Web Design Development.</a></h4>
        <p>Learn how to use HTML, CSS, Javascript
          <br> and PHP to build a website
          <br> from scratch. 
        </p>
        <a class="btnExtra" href="deleteCourse.html">Delete</a>
        <h5> 131 enrolled students </h5>
      </div>

      <div class="border">
        <h4><a href="" class="stretched-link">Media Design.</a></h4>
        <p> The objective of the course is to provide 
          <br> thestudents with an overview of the most 
          <br> relevant tools, materials, mechanics and
          <br> strategies of media design. </p>
          <a class="btnExtra" href="deleteCourse.html">Delete</a>
          <h5> 119 enrolled students </h5>
        </p>
      </div>

      <div class="border">
        <h4><a href="" class="stretched-link">C++ Programming</a></h4>
        <p>This course will start with the fundamental  
          <br> programming concepts before digging deeper  
          <br> into the more advanced C++ topics. </p>
          <a class="btnExtra" href="deleteCourse.html">Delete</a>
          <h5> 109 enrolled students </h5>
        </p>
      </div>

    </div>




  </body>