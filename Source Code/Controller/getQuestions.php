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