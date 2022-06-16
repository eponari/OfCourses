<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Attachment</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Template Main CSS File -->
    <link href="../css/profAttachmentStyle.css" rel="stylesheet">
    <link rel="icon" href="https://github.com/eponari/OfCourses/blob/main/projectLogo.jpg?raw=true">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
      include("../Utility/ownsCourseValidation.php");
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

        <h2></h2>
        <h2></h2>

        <div class="flex-container">

            <form action="../Controller/createAttachment.php" method="POST" enctype="multipart/form-data">
                <h4>
                    <input type="text" name="fileTitle" placeholder="Attachment Title" style="width:300px; height:40px; font-size:15pt; color: #51087E; font-family: sans-serif;" required><br><br>
                    <input type="file" id="uploadedFiles" name="uploadedFiles[]" required multiple>
                    <input type="hidden" name="courseId" value=<?php echo $_GET["courseId"];?>>
                    <input type="hidden" name="weekNr" value=<?php echo $_GET["weekNr"];?>>
                    <br><br>
                    <input type=submit class="buttonExtra">Add Attachment</input>
            </form>
            </h4>
            <br>
        </div>
</body>