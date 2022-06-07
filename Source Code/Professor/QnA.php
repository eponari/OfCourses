<!DOCTYPE html>
<html lang="en">

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

      <div class="border">
        <h4>Question from Matilda Hanson from Course <br>"Media Design":</h4>
       <p> Q: Hello professor, I had a question regarding Homework 3. I am a bit confused 
         <br> on the second exercise and was wondering if you could maybe clarify it for me.
       </p> 
        <form>
          <div class="textarea_style">
            <textarea class="textarea" id="textarea" name="textarea_answer" rows="5" cols="60"
            maxlength="100" minlength="3" placeholder="Write your answer here..."></textarea>
          </div>
          <span class="textarea_count"></span>
        </form>
       <a class="btnExtra" href="submitQ.html">Submit</a>
      </div>

      <div class="border">
        <h4>Question from Helena from Course <br>"C++ Programming":</h4>
        <p> Q: Professor, hello! I wanted to ask you about Assignment 1. Will we hand in 
          <br> a word document where we explain our work in addition to the source code files?
        </p> 
        <form>
          <div class="textarea_style">
            <textarea class="textarea" id="textarea" name="textarea_answer" rows="5" cols="60"
            maxlength="100" minlength="3" placeholder="Write your answer here..."></textarea>
          </div>
          <span class="textarea_count"></span>
        </form>
        <a class="btnExtra" href="submitQ.html">Submit</a>
      </div>

      <div class="border">
        <h4>Question from Ravi Kohli from Course <br>"Web Design Development":</h4>
        <p> Q: Hello professor! I was a little unclear about today's lecture (Chapter 4).  
          <br> If it's not too much trouble, I would appreciate it if you could explain the 
          <br> concept and application of events a bit more next week.
        </p> 
        <form>
          <div class="textarea_style">
            <textarea class="textarea" id="textarea" name="textarea_answer" rows="5" cols="60"
            maxlength="100" minlength="3" placeholder="Write your answer here..."></textarea>
          </div>
          <span class="textarea_count"></span>
        </form>
        <a class="btnExtra" href="submitQ.html">Submit</a>
      </div>

      <div class="border">
        <h4>Question from Nara Choi from Course <br>"Object Oriented Programming":</h4>
        <p> Q: Hi professor, I hope you're doing well! I just wanted to ask if it would 
          <br> be okay to send in the homework a day late? I've been a bit swamped lately
          <br> and haven't had the chance to finish it sooner.
        </p> 
        <form>
          <div class="textarea_style">
            <textarea class="textarea" id="textarea" name="textarea_answer" rows="5" cols="60"
            maxlength="100" minlength="3" placeholder="Write your answer here..."></textarea>
          </div>
          <span class="textarea_count"></span>
        </form>
        <a class="btnExtra" href="submitQ.html">Submit</a>
      </div>

      <div class="border">
        <h4>Question from Viola from Course <br>"Web Design Development":</h4>
        <p> Q: Hello professor, how are you? I was wondering if the midterm exam is  
          <br> going to include the GUI chapter as well?
        </p> 
        <form>
          <div class="textarea_style">
            <textarea class="textarea" id="textarea" name="textarea_answer" rows="5" cols="60"
            maxlength="100" minlength="3" placeholder="Write your answer here..."></textarea>
          </div>
          <span class="textarea_count"></span>
        </form>
        <a class="btnExtra" href="submitQ.html">Submit</a>
      </div>

    </div>




  </body>