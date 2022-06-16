<?php
    include("../Utility/professorHeader.php");
    include("../Model/assignment.php");
    include("../Model/attachment.php");

    include("../Utility/validateInput.php");

    if(!validateInputs($_FILES['uploadedFiles'],$_POST["due"],$_POST["weekNr"],$_POST["courseId"],$_POST["description"],$_POST["title"])){
        echo "<script>history.back()</script>";
        exit();
    }

    $total = count($_FILES['uploadedFiles']['name']);

    $assignmentRepo = new Assignment();
    $attachmentRepo = new Attachment();

    $assignmentId = $assignmentRepo->createAssignment($_POST["due"],$_POST["weekNr"],$_POST["courseId"],$_POST["description"],$_POST["title"]);

    for( $i=0 ; $i < $total ; $i++ ) {
        $attfolder="../Attachments/";
        $type = pathinfo($_FILES['uploadedFiles']['name'][$i], PATHINFO_EXTENSION);        
        $file = $attfolder.$_POST["title"].$i.time().".".$type;

        move_uploaded_file($_FILES['uploadedFiles']['tmp_name'][$i],$file);

        $attachmentRepo->createAttachmentForAssignment($file,$_POST["courseId"],$_POST["weekNr"],$_POST["title"].$i,$type,$assignmentId);
    }    
    header("Location: ../Utility/viewCourse.php?courseId={$_POST["courseId"]}&weekNr={$_POST["weekNr"]}");
?>