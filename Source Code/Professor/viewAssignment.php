<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Assignments</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="icon" href="https://github.com/eponari/OfCourses/blob/main/projectLogo.jpg?raw=true">

  <!-- Template Main CSS File -->
  <link href="../css/profAssignmentStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php
      include("../Utility/professorHeader.php");
    ?>

    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">

      <h2></h2>
      <h2><input type="text" placeholder="Assignment Title" 
        style="width:300px; height:40px; font-size:15pt; color: #51087E; font-family: sans-serif;"></h2>

        <i><h4> Due: <input type="date" style="font-style:italic; width:115px;"> </h4></i>

        <h4>Assignment Description: <br>
        <textarea class="textarea" id="textarea" name="textarea_answer" rows="5" cols="60"
            maxlength="100" minlength="3" placeholder="What is the assignment about?" 
            style="color: #51087E; font-family: sans-serif; 
            font-size:11pt;"></textarea>
         <br>
      </h4>

      <h4>Add Attachment: <input type='file' class="buttonExtra" multiple><br>

      <br>
      <h4> <a class="buttonExtra">Add Assignment</a></h4>

      
  <main id="main">

  </body>