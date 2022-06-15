<?php
    session_start();
    include("../Model/submission.php");

    $submissionRepo = new Submission();

    $submissionRepo->upgradeGrade($_POST["assignmentId"],$_POST["path"],$_POST["grade"]);

    header("Location: ../Utility/viewAssignment.php?id={$_POST["assignmentId"]}");
?>