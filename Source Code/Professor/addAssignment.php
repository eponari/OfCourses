<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Assignments</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="icon" href="https://github.com/eponari/OfCourses/blob/main/projectLogo.jpg?raw=true">
    <link href="../css/profAssignmentStyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
      include("../Utility/professorHeader.php");

      include("../Utility/validateInput.php");

      if(!validateInputs($_GET["courseId"],$_GET["weekNr"])){
            echo "<script>history.back()</script>";
            exit();
      }

      $_GET["courseId"] = htmlentities($_GET["courseId"]);
      $_GET["weekNr"] = htmlentities($_GET["weekNr"]);
  ?>

    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <form action="../Controller/createAssignment.php" method="POST" enctype="multipart/form-data">
            <h2></h2>
            <h2>Assignment Title: <input name="title" type="text" placeholder=""
                    style="width:300px; height:40px; font-size:15pt; color: #51087E; font-family: sans-serif;" required></h2>

            <i>
                <h4> Due: <input name="due" type="date"
                        style="font-style:italic; width:115px;" required>
                </h4>
            </i>

            <h4>Assignment Description:</h4>
            <h4>
                <textarea class="textarea" id="textarea" name="description" rows="5" cols="60"
                    minlength="3" placeholder="What is the assignment about?" style="color: #51087E; font-family: sans-serif; 
            font-size:11pt;" required></textarea>
                <br>
            </h4>

            <h4><input type="file" id="uploadedFiles" name="uploadedFiles[]" required multiple>
            </h4>
            <input type="hidden" name="courseId" value=<?php echo $_GET["courseId"];?>>
            <input type="hidden" name="weekNr" value=<?php echo $_GET["weekNr"];?>>
            <h4> <input type="submit" value="Add Assignment" class="buttonExtra"></input></h4>
        </form>
        <main id="main">
</body>