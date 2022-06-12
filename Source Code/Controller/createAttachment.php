<?php
    include("../Model/attachment.php");

    $total = count($_FILES['uploadedFiles']['name']);

    $attachmentRepo = new Attachment();

    for( $i=0 ; $i < $total ; $i++ ) {
        $attfolder="../Attachments/";
        $type = pathinfo($_FILES['uploadedFiles']['name'][$i], PATHINFO_EXTENSION);        
        $file = $attfolder.$_POST["fileTitle"].$i.time().".".$type;

        move_uploaded_file($_FILES['uploadedFiles']['tmp_name'][$i],$file);

        $attachmentRepo->createAttachment($file,$_POST["courseId"],$_POST["weekNr"],$_POST["fileTitle"].$i,$type);
    }    
    header("Location: ../Professor/viewCourse.php?courseId={$_POST["courseId"]}&weekNr={$_POST["weekNr"]}");
?>