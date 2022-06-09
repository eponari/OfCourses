<?php
    session_start();
    
    if(isset($_POST["answer"]) and isset($_POST["qid"])){
        $answer = $_POST["answer"];
        $qid = $_POST["qid"];

        if(!empty($answer)){
            include("../Model/question.php");

            $questionRepo = new Question();

            $questions = $questionRepo->answerQuestion($_SESSION["email"],$qid,$answer);
        }
    }

    header("Location: ../Professor/QnA.php");
?>