<!DOCTYPE html>
<html lang="en">

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

    <?php
      include("../Utility/professorHeader.php");
    ?>

 
    <img src="../images/profImage.jpg" class="container-one">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
     
      <h2>Welcome, <span><?php echo $_SESSION["fullName"] ?>!</span></h2>
      
  </section>

  <main id="main">

       <!-- <h4> Current Courses:
        <br> <a class="buttonExtra" href="categories.html">Browse through categories</a>
       </h4> -->
      
    
    <!-- <div class="flex-container">

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
    </div> -->




  </body>