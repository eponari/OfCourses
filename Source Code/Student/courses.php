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
    <div class="main">

        <div class="flex-container">

            <div class="border">
              <h1> Which course do you want to ask about? </h1>

             <br> <label for="subjects">Choose a subject:</label>

             <select name="subject" id="subject">
             
            </select>  <br>


            
            <label for="bio">Ask the question: <span></label> <span></span><bR>
            <textarea id="bio" name="bio" rows="17" cols="40" >Ask something here... </textarea> <br><br>
            
            <a class="btn" href="submitQuestion.html">Submit</a>

            </div>
            
          </div>


        
   
<div class="newFlex-container">

  <h6><fieldset>Your courses: </fieldset> 
  </h6>
<?php 
  foreach($courseName as $courses){ ?>
    <div class="border">
     
    <h4><a href="" class="stretched-link"><?php echo $courses['id']; echo " "; echo $courses['name']; ?></a> </h4>

    <?php 
    echo "<p style='color: gray;'> Weeks 14: {$weekNumber['weekNr']}</p>";
    ?>


    <?php
      echo "<p> Status of the course:<p style='padding:10px; background-color: rgb(63, 156, 63); font-weight: bold;'> <?php echo $status; ?> </p>";
    ?>

    <?php
      echo "<h5><span> CGPA: {$grade['grade']} </h5> </span>";
    ?>



    <?php
  }
  ?>

     
   <a class="btnExtra" href="openCourse.html">Open Course.</a>
</p>
   
  </div>


       <!-- <div class="border">
     <h4><a href="" class="stretched-link">Fundamentals of Data Strctures.</a></h4>
     <p style="color: gray;"> Weeks 6: 12 </p>
     <p> Status of the course:<p style="padding:10px; background-color: rgb(88, 135, 210); font-weight: bold;"> Ongoing </p>
    </p>
     <a class="btnExtra" href="openCourse.html">Open Course.</a>
    <h5><span> CGPA: /4.00 </h5> </span>
   </div>

   <div class="border">
    <h4><a href="" class="stretched-link">Digital Media and Mobile Applications.</a></h4>
    <p style="color: gray;"> Weeks 13: 13 </p>
    <p> Status of the course:<p style="padding:10px; background-color: rgb(220, 234, 99); font-weight: bold;"> Pending </p>
    <a class="btnExtra" href="openCourse.html">Open Course.</a>
    <h5><span> CGPA: /4.00 </h5> </span>
      </p>
  </div>


  <div class="border">
    <h4><a href="" class="stretched-link">Introduction basics to Cyber Security.</a></h4>
    <p style="color: gray;"> Weeks 16: 16 </p>
    <p> Status of the course:<p style="padding:10px; background-color: rgb(205, 22, 22); font-weight: bold;"> Failed </p>
    <a class="btnExtra" href="openCourse.html">Open Course.</a>
    <h5><span> CGPA: 1.00/4.00 </h5> </span>
      </p>
  </div> -->

   

</div>

 
 </div>

</div>

</body>