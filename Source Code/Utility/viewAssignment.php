<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Assignments</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Template Main CSS File -->
  <link href="../css/profAssignmentStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php
      include("../Utility/ownsAssignmentValidation.php");
    ?>
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <h2><?php echo $assignment["title"]?></h2>

        <h4 style="font-style:italic;">Due date: <?php echo $assignment["dueDate"]?> </h4>

        <h4>Assignment Description: <br>
        <?php echo $assignment["description"]?>
      </h4>

      <h4> Attachments: <br>

      <?php
        include("../Model/attachment.php");

        $attachmentRepo = new Attachment();

        $attachments = $attachmentRepo->getAttachmentsForAssignment($assignment["id"]);

        foreach($attachments as $attachment){
          echo "<a href='{$attachment['path']}' download='{$attachment['title']}.{$attachment['type']}' class='stretched-link' style='margin-right: 15px;'>{$attachment['title']}</a>";
        }
      ?>

      <?php
        

        if($_SESSION["type"]==1){
          include("../Model/submission.php");

          $submissionRepo = new Submission();

          $submission = $submissionRepo->getSubmission($assignment["id"],$_SESSION["email"]);

          if(!$submission){
            echo "<br><br>
            <form method='POST' action='../Controller/submitAssignment.php' enctype='multipart/form-data'>
            Solution file: <input type='file' name='userFile' required><br>
            <input type='hidden' name='assignmentId' value='{$assignment["id"]}'>
            <input type='submit' value='Submit'>
            </form>
          ";
          }else{
            $grade = !$submission["grade"]?"-":$submission["grade"];
            echo "<br><br>Your grade: {$grade}";
          }
        }else{
          include("../Model/submission.php");

          $submissionRepo = new Submission();

          $submissions = $submissionRepo->getSubmissions($assignment["id"]);

          echo '<br><br><table style="padding-left:10px;">
          <tr>
            <th style="color: #51087E;">Student </th>
            <th style="color: #51087E;">Submission</th>
            <th style="color: #51087E;">Grade</th>
          </tr>';

          foreach($submissions as $submission){
            $grade = !$submission["grade"]?0:$submission["grade"];
            echo "<tr>
              <td style='width:200px; color: #51087E; text-align: center;'> {$submission['fullName']} </td>
              <td><a href='{$submission['path']}' download='{$submission['path']}' style='color: #51087E; text-align: center'>{$submission['path']}</a></td>
              <form method='POST' action='../Controller/updateGrade.php'>
              <td><input type='number' name='grade' value='$grade' step='1' max='100' style='width:200px; color: #51087E; text-align: center;'></td>
              <input type='hidden' name='assignmentId' value='{$assignment["id"]}'>
              <input type='hidden' name='path' value='{$submission["path"]}'>
              <td><input type='submit' value='OK' style='width:200px; color: #51087E; text-align: center;'></td>
              </form>
            </tr>";
          }
        }

      ?>      
  <main id="main">

  </body>