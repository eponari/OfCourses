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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <?php
      include("../Utility/professorHeader.php");
    ?>

 
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">

      <h2></h2>
      <h2></h2>

        <div class="flex-container">
            
        <form action="/action_page.php">
            <h4>
              <input type="text" placeholder="Attachment Title" 
              style="width:300px; height:40px; font-size:15pt; color: #51087E; font-family: sans-serif;"><br><br>

              
                <input type="file" id="myFile" name="filename">
              <br><br>
              <a class="buttonExtra">Add Attachment</a>

              </form>
            </h4>
<br>
        </div>      

  </body>