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
  <!-- <link href="../css/studentCourseStyle.css" rel="stylesheet"> -->
  <link href="../css/profCoursesStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="https://github.com/eponari/OfCourses/blob/main/projectLogo.jpg?raw=true">

</head>

<body>

  <?php
    include("../Utility/studentHeader.php");
  ?>

  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">

    <img src="../images/image3.jpg" class="container-three">
    <h2> <img src="../images/avatar.png" class="container-two"><span>Browse your courses!</span></span></h2>

    <div style="display: flex;flex-direction: row;">
    <?php
    include("../Controller/getAllUnregisteredCourses.php");
    ?>
    <br>
    <?php
    include("../Controller/getAllRegisteredCourses.php");
    ?>
    </div>
   
</div>

 
 </div>

</div>

</body>