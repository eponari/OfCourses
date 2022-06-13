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
    include("../Controller/studentLanding.php");
  ?>

  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
  
    <img src="../images/image7.jpg" style="width:30%; margin-top: 40px;"  class="container-three">
    <h2 style="text-decoration:underline;" > 
    <?php 
      foreach($weeks as $w){ 
        echo "Week "; echo $w['weekNr'];
      } ?></h2> 

    <div class="flex-container" style="width: 100%;">

        <div class="border">
          
          <h4><a href="" class="stretched-link">Lesson Title: </a></h4>
         <p style="text-align:left; text-justify:inter-word; font-weight: bold;"><?php  
          foreach($weeks as $w){
            echo $w['title'];
          } 
          ?></p>

         </div>

         <div class="border">
           <h4 style="border: 1.5px solid purple; padding:10px; width:30%; box-shadow:0 6px 13px rgba(78, 10, 91, 0.97);"><a href="" class="stretched-link"><?php
            foreach($assignment as $a){
              echo "Assignment "; echo $a['id'];
            } ?></a></h4>
            <p style="text-align:left; text-justify:inter-word;"> <?php 
            foreach($assignment as $a){
              echo "Upload Date: "; echo $a['uploadDate'];
              echo "<br> Due Date: "; echo $a['dueDate'];
            }
            
            ?> </p>

            <!-- <h4><a href="" class="stretched-link">Slides and Homework Reference: </a></h4>  -->
            <a  href="../Attachments/test_file.zip" download>Download File</a>

            <h4><a href="" class="stretched-link">Add attachment: </a></h4>

            <label for="myfile"></label><input type="file" id="myfile" name="myfile"> 

            <h4><a href="" class="stretched-link">Grade:  </p> </a></h4>

            <p style="padding:10px; background-color: rgb(163, 163, 163); font-weight: bold;"> <span>
            <?php
            foreach($assignment as $a){
              echo $a['grade'];
            }
            ?> /100 </span> </p>

            <a  class="btnExtra" href="turnIn.html">Turn in.</a>

         </div>
  </div>