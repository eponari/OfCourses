<?php
    session_start();

    echo "Welcome student {$_SESSION["fullName"]}"; 
?>

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<?php
    include("../Utility/studentHeader.php");
  ?>

  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">

    <img src="../images/image1.jpg" class="container-three">
    <h2> <img src="../images/avatar.png" class="container-two"><span>Welcome to your home page!</span></span></h2>


        <div class="main">


            <div class="flex-container">

              <h3> Choose your categories: 
              </h3>
 
                <div class="border">
                  
                  <label class="form"> 
                  <input type="checkbox" name="checkbox"/>Engineering </label>
                  <label class="form"> <br>
                  <input type="checkbox" name="checkbox"/>Computer Science </label>
                  <label class="form"> <br>
                  <input type="checkbox" name="checkbox"/>Graphic Design </label>
                  <label class="form"> <br>
                    <input type="checkbox" name="checkbox"/>Animation and Computer Graphics </label>
                  
                  
                 
                </div>


                <div class="border">
                  
                  <label class="form"> 
                    <input type="checkbox" name="checkbox"/>Information Technology </label>
                    <label class="form"> <br>
                    <input type="checkbox" name="checkbox"/>Business Administration </label>
                    <label class="form"> <br>
                    <input type="checkbox" name="checkbox"/>Business Informatics </label>
                    <label class="form"> <br>
                      <input type="checkbox" name="checkbox"/>Cyber </label>
                    

                </div>


                <div class="border">
                  <label class="form"> 
                    <input type="checkbox" name="checkbox"/>Social Sciences</label>
                    <label class="form"> <br>
                    <input type="checkbox" name="checkbox"/>Architecture </label>
                    <label class="form"> <br>
                    <input type="checkbox" name="checkbox"/>Digital Content Creation</label>
                    <label class="form"> <br>
                      <input type="checkbox" name="checkbox"/>Application Development </label>
                </div>


                <div class="border">
                  <label class="form"> 
                    <input type="checkbox" name="checkbox"/>Cloud Computing</label>
                    <label class="form"> <br>
                    <input type="checkbox" name="checkbox"/>Professional Writing </label>
                    <label class="form"> <br>
                    <input type="checkbox" name="checkbox"/>Project Managment </label>
                    <label class="form"> <br>
                      <input type="checkbox" name="checkbox"/>Biotechnology </label>
                </div>

                <div class="border">
                  <label class="form"> 
                    <input type="checkbox" name="checkbox"/>Health & Wellness</label>
                    <label class="form"> <br>
                    <input type="checkbox" name="checkbox"/>Digital Marketing </label>
                    <label class="form"> <br>
                    <input type="checkbox" name="checkbox"/>Computer Networks</label>
                    <label class="form"> <br>
                      <input type="checkbox" name="checkbox"/>Data Structures</label>
                </div>

                <div class="border">
                  <label class="form"> 
                    <input type="checkbox" name="checkbox"/>Data Visualization</label>
                    <label class="form"> <br>
                    <input type="checkbox" name="checkbox"/>User Experience and Design (UX)</label>
                    <label class="form"> <br>
                    <input type="checkbox" name="checkbox"/>Virtual Reality</label>
                    <label class="form"> <br>
                      <input type="checkbox" name="checkbox"/>Autonomous Robotics</label>
                </div>
                
              </div>


            
       
    <div class="newFlex-container">

      <h6> Courses picked out for you: 
      </h6>

        <div class="borderElse">
         
         <h4><a href="" class="stretched-link">Computer Graphics Design.</a></h4>
        <p> Introduction to two-dimensional and
          <br> three-dimensional graphics along 
          <br> with image processing. </p>
        </p>
        <a class="btnExtra" href="registerCourse.html">Register</a>
        <h5> Beginner. 7 months. </h5>
        
       </div>
       <div class="border">
         <h4><a href="" class="stretched-link">Fundamentals of Data Strctures.</a></h4>
         <p>Learn about the types of data structures
           <br> and how they are arranged with 
           <br> associative coding parts too.
         </p>
         <a class="btnExtra" href="registerCourse.html">Register</a>
         <h5> Beginner. 3-4 months. </h5>
       </div>

       <div class="border">
        <h4><a href="" class="stretched-link">Smartphone App Development.</a></h4>
        <p>Get familiar with how platforms like iOS
          <br> from Apple and Android from Google
          <br> originated from the ground up.</p>
          <a class="btnExtra" href="registerCourse.html">Register</a>
          <h5> Intermediate. 5-6 months. </h5>
      </div>
      <div class="border">
        <h4><a href="" class="stretched-link">Digital Media.</a></h4>
        <p>Discover the types of digital media and 
          <br> how they are distributed according
          <br> to different electonic devices. </p>
          <a class="btnExtra" href="registerCourse.html">Register</a>
          <h5> Intermediate. 1-3 months. </h5>
        </p>
      </div>

       

    </div>

     
     </div>

  </div>

    </body>
   