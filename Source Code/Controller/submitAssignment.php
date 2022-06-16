<?php
    include("../Utility/studentHeader.php");
    session_start();

    include("../Utility/validateInput.php");

    if(!validateInputs($_FILES['userFile'],$_POST["assignmentId"])){
        echo "<script>history.back()</script>";
        exit();
    }

    $_POST["assignmentId"] = htmlentities($_POST["assignmentId"]);

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