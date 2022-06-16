<?php
    include("../Utility/studentHeader.php");
    
    session_start();
    include("../Model/question.php");
    $questionRepo = new Question();

    include("../Utility/validateInput.php");

    if(!validateInputs($_POST["question"],$_POST["id"])){
        echo "<script>history.back()</script>";
        exit();
    }

    $questionRepo->createQuestion($_POST["question"],$_SESSION["email"],$_POST["id"]);

    header("Location: ../Utility/viewCourse.php?courseId={$_POST['id']}");
?>