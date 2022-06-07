<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Course Creation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Template Main CSS File -->
  <link href="../css/profNewCourseStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<?php
      include("../Utility/professorHeader.php");
    ?>

 
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <form>
      <h2> </h2>
      <h2><input type="text" name="cTitle" placeholder="Course Title" 
        style="width:500px; height:40px; font-size:20pt; color: #51087E; text-align: center;
        font-family: sans-serif;"></h2>
      <h4>Course Description: <br>
        <textarea class="textarea" id="textarea" name="textarea_answer" rows="5" cols="60"
            maxlength="100" minlength="3" placeholder="What will this course provide?" 
            style="text-align:center; color: #51087E; font-family: sans-serif;
            font-size:11pt;"></textarea>
         <br><br>
        
          <label for="weeks">Number of weeks:</label>
          <input type="number" id="weeks" name="weeks" step="1" max="12" style="width:33px">
          <br><input type="submit" style="padding-right:8px">
        </form>
      </h4>
      
  </section>

  <main id="main">

    <!-- <div class="flex-container">

      <div class="border">
        <h4>
          <form>
            <input type="text" name="weekNr" placeholder="Week" style="width:65px">
            <input type="text" name="title" placeholder="Title" style="width:300px">
            <input type="submit" value="Okay" style="padding-right:8px">
          </form>
          <a href="" class="stretched-link" >Assignment</a>
          <input type="submit" value="Add Assignment">
          <input type="submit" value="Add Attachement">
        </h4>
      </div>

      <div class="border">
        <h4>
          <form>
            <input type="text" name="weekNr" placeholder="Week" style="width:65px">
            <input type="text" name="title" placeholder="Title" style="width:300px">
            <input type="submit" value="Okay" style="padding-right:8px">
          </form>
          <a href="" class="stretched-link" >Assignment</a>
          <input type="submit" value="Add Assignment">
          <input type="submit" value="Add Attachement">
        </h4>
      </div>

      <div class="border">
        <h4>
          <form>
            <input type="text" name="weekNr" placeholder="Week" style="width:65px">
            <input type="text" name="title" placeholder="Title" style="width:300px">
            <input type="submit" value="Okay" style="padding-right:8px">
          </form>
          <a href="" class="stretched-link" >Assignment</a>
          <input type="submit" value="Add Assignment">
          <input type="submit" value="Add Attachement">
        </h4>
      </div>

     <div class="border">
        <h4>
          <form>
            <input type="text" name="weekNr" placeholder="Week" style="width:65px">
            <input type="text" name="title" placeholder="Title" style="width:300px">
            <input type="submit" value="Okay" style="padding-right:8px">
          </form>
          <a href="" class="stretched-link" >Assignment</a>
          <input type="submit" value="Add Assignment">
          <input type="submit" value="Add Attachement">
        </h4>
      </div>

      <div class="border">
        <h4>
          <form>
            <input type="text" name="weekNr" placeholder="Week" style="width:65px">
            <input type="text" name="title" placeholder="Title" style="width:300px">
            <input type="submit" value="Okay" style="padding-right:8px">
          </form>
          <a href="" class="stretched-link" >Assignment</a>
          <input type="submit" value="Add Assignment">
          <input type="submit" value="Add Attachement">
        </h4>
      </div>

      <div class="border">
        <h4>
          <form>
            <input type="text" name="weekNr" placeholder="Week" style="width:65px">
            <input type="text" name="title" placeholder="Title" style="width:300px">
            <input type="submit" value="Okay" style="padding-right:8px">
          </form>
          <a href="" class="stretched-link" >Assignment</a>
          <input type="submit" value="Add Assignment">
          <input type="submit" value="Add Attachement">
        </h4>
      </div>

      <div class="border">
        <h4>
          <form>
            <input type="text" name="weekNr" placeholder="Week" style="width:65px">
            <input type="text" name="title" placeholder="Title" style="width:300px">
            <input type="submit" value="Okay" style="padding-right:8px">
          </form>
          <a href="" class="stretched-link" >Assignment</a>
          <input type="submit" value="Add Assignment">
          <input type="submit" value="Add Attachement">
        </h4>
      </div>

      <div class="border">
        <h4>
          <form>
            <input type="text" name="weekNr" placeholder="Week" style="width:65px">
            <input type="text" name="title" placeholder="Title" style="width:300px">
            <input type="submit" value="Okay" style="padding-right:8px">
          </form>
          <a href="" class="stretched-link" >Assignment</a>
          <input type="submit" value="Add Assignment">
          <input type="submit" value="Add Attachement">
        </h4>
      </div>

      <div class="border">
        <h4>
          <form>
            <input type="text" name="weekNr" placeholder="Week" style="width:65px">
            <input type="text" name="title" placeholder="Title" style="width:300px">
            <input type="submit" value="Okay" style="padding-right:8px">
          </form>
          <a href="" class="stretched-link" >Assignment</a>
          <input type="submit" value="Add Assignment">
          <input type="submit" value="Add Attachement">
        </h4>
      </div>

      <div class="border">
        <h4>
          <form>
            <input type="text" name="weekNr" placeholder="Week" style="width:65px">
            <input type="text" name="title" placeholder="Title" style="width:300px">
            <input type="submit" value="Okay" style="padding-right:8px">
          </form>
          <a href="" class="stretched-link" >Assignment</a>
          <input type="submit" value="Add Assignment">
          <input type="submit" value="Add Attachement">
        </h4>
      </div>

      <div class="border">
        <h4>
          <form>
            <input type="text" name="weekNr" placeholder="Week" style="width:65px">
            <input type="text" name="title" placeholder="Title" style="width:300px">
            <input type="submit" value="Okay" style="padding-right:8px">
          </form>
          <a href="" class="stretched-link" >Assignment</a>
          <input type="submit" value="Add Assignment">
          <input type="submit" value="Add Attachement">
        </h4>
      </div>

      <div class="border">
        <h4>
          <form>
            <input type="text" name="weekNr" placeholder="Week" style="width:65px">
            <input type="text" name="title" placeholder="Title" style="width:300px">
            <input type="submit" value="Okay" style="padding-right:8px">
          </form>
          <a href="" class="stretched-link" >Assignment</a>
          <input type="submit" value="Add Assignment">
          <input type="submit" value="Add Attachement">
        </h4>
      </div>

    </div> -->




  </body>