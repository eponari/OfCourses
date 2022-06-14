<?php
    session_start();
    include("../Model/question.php");
    $questionRepo = new Question();

    $questionRepo->createQuestion($_POST["question"],$_SESSION["email"],$_POST["id"]);

    header("Location: ../Utility/viewCourse.php?courseId={$_POST['id']}");
?>