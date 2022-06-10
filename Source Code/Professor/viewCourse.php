<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>View Course</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Template Main CSS File -->
  <link href="../css/profViewCourseStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <?php
      include("../Utility/professorHeader.php");
      include("../Model/course.php");

      $courseRepo = new Course();

      $course = $courseRepo->getCourseFromProfessor($_SESSION["email"],$_GET["courseId"]);

      if(!$course){
        header("Location: manageCourses.php");
      }
  ?>

  <img src="../images/profCourseImage.png" class="container-one">

    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
     
      <h2> <?php echo $course[0]["name"] ?> </h2>
      <h4>
         <br><br>
        Number of enrolled students: <?php echo $courseRepo->getEnrolled($_SESSION["email"],$_GET["courseId"]); ?> <br>
        Number of weeks: <?php echo $courseRepo->getWeeks($_SESSION["email"],$_GET["courseId"]); ?>
      </h4>
      
  </section>

  <main id="main">

    <div class="details-container">
      <div width="500px">
        <h4>
          <u>Course Description: </u><br>
          <?php echo $course[0]["description"];?>
        </h4>
      </div>
    </div>
    <br><br>
    <div class="flex-container">
      <?php
        include("../Model/attachment.php");
        include("../Model/assignment.php");

        $attachmentRepo = new Attachment();
        $assignmentRepo = new Assignment();

        foreach($course as $week){
          
          // $attachments = $attachmentRepo->getAttachments($week["courseId"],$week["weekNr"]);
          // $assignments = $assignmentRepo->getAssignments($week["courseId"],$week["weekNr"]);

          $title = empty($week['title'])?"Week {$week["weekNr"]}":$week["title"];

          echo "<div class='border'>
          <h4>
            <form>
              <input type='text' name='title' style='width:300px' value='{$title}'>
              <input type='submit' value='Okay' style='padding-right:8px'>
            </form>
            <a href='' class='stretched-link' >Assignment</a>
            <a href='' class='stretched-link' >Attachment</a>
            <form>
            <input type='submit' value='Add Assignment' style='margin-right: 15px;'>
            <input type='submit' value='Add Attachment'>
          </form>
          </h4>
        </div>";
        }
      ?>
  </body>