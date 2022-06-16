<?php
    include("../Utility/professorHeader.php");
    session_start();
    include("../Model/submission.php");

    include("../Utility/validateInput.php");

    if(!validateInputs($_POST["assignmentId"],$_POST["path"],$_POST["grade"])){
        echo "<script>history.back()</script>";
        exit();
    }

    $submissionRepo = new Submission();

    $submissionRepo->upgradeGrade($_POST["assignmentId"],$_POST["path"],$_POST["grade"]);

    header("Location: ../Utility/viewAssignment.php?id={$_POST["assignmentId"]}");
?>