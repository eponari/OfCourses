<?php
    session_start();
    include("../Model/submission.php");

    $submissionRepo = new Submission();

    include("../Model/assignment.php");
    include("../Model/attachment.php");


    $attachmentRepo = new Attachment();

    $attfolder="../Attachments/";
    $type = pathinfo($_FILES['userFile']['name'], PATHINFO_EXTENSION);        
    $file = $attfolder.$_POST["assignmentId"].time().".".$type;

    move_uploaded_file($_FILES['userFile']['tmp_name'],$file);

    $submissionRepo->createSubmission($_SESSION['email'],$_POST["assignmentId"],$file);
    header("Location: ../Utility/viewAssignment.php?id={$_POST['assignmentId']}");
?>