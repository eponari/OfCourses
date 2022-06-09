<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ask the Professor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Template Main CSS File -->
  <link href="../css/profQnAStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<?php
  session_start();

  if(isset($_SESSION["type"])){
    switch($_SESSION["type"]){
      case 1:
        header("Location: ../Student/Welcome.php");
        break;
      case 3:
        header("Location: ../Administator/Welcome.php");
        break;
    }
  }else{
    header("Location: ../login.php");
  }
?>

<body> 
    <?php
      include("../Utility/professorHeader.php");
    ?>
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
     
      <h2> </h2>
      <h2>Q&A <span>Forum: Ask the Professor!</span></h2>
      
  </section>

  <main id="main">
      
    
    <div class="flex-container">

    <?php
      include("../Model/question.php");

      $questionRepo = new Question();

      $questions = $questionRepo->getQuestions($_SESSION["email"]);

      foreach($questions as $question){
        echo " <div class='border'>
        <h4>Question from {$question['userName']} from Course <br>\"{$question['courseName']}\":</h4>
       <p> Q: {$question['question']}
       </p>";
        
        if(empty($question["answer"])){
          echo "<form action=\"../Controller/answerQuestion.php\" method=\"POST\">
          <div class=\"textarea_style\">
            <textarea class=\"textarea\" id=\"textarea\" name=\"answer\" rows=\"5\" cols=\"60\"
            maxlength=\"100\" minlength=\"3\" placeholder=\"Write your answer here...\"></textarea>
            </div>
            <input type='hidden' name = 'qid' value='{$question['qid']}'>
            <input type = 'submit' class=\"btnExtra\">
          </form>";
        }else{
          echo "<p> A: {$question['answer']}
                </p>";
        }
      echo "</div>";
      }
    ?>
  </body>