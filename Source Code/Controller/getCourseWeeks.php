<?php
    include("../Model/attachment.php");
    include("../Model/assignment.php");

    $attachmentRepo = new Attachment();
    $assignmentRepo = new Assignment();

    foreach($course as $week){
        // $attachments = $attachmentRepo->getAttachments($week["courseId"],$week["weekNr"]);
        // $assignments = $assignmentRepo->getAssignments($week["courseId"],$week["weekNr"]);

        $title = empty($week['title'])?"Week {$week["weekNr"]}":$week["title"];

        echo "<div class='border' style='height: auto;'>
        <h4>
        <form>
          <input type='text' name='title' style='width:300px' value='{$title}'>
          <input type='submit' value='Okay' style='padding-right:8px'>
        </form>
        <a href='' class='stretched-link' style='pointer-events: none; cursor: default;' >Attachments:</a>";
        
        $attachments = $attachmentRepo->getAttachments($week["weekNr"],$week["courseId"]);

        foreach($attachments as $attachment){
          echo "<a href='{$attachment['path']}' download='{$attachment['title']}.{$attachment['type']}' class='stretched-link' style='margin-right: 15px;'>{$attachment['title']}</a>";
        }
        
        echo "<br><br><a href='../Professor/addAttachment.php?weekNr={$week["weekNr"]}&courseId={$week["id"]}' class='btnExtra' style='margin-right: 15px;'>Add assignment</a>";
        echo "<a href='../Professor/addAttachment.php?weekNr={$week["weekNr"]}&courseId={$week["id"]}' class='btnExtra' style='margin-right: 15px;'>Add attachment</a>";
        
        echo "</h4></div>";
    }
?>