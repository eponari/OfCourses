<?php
    include("../Model/attachment.php");
    include("../Model/assignment.php");

    $attachmentRepo = new Attachment();
    $assignmentRepo = new Assignment();

    foreach($course as $week){
        $attachments = $attachmentRepo->getAttachments($week["courseId"],$week["weekNr"]);
        $assignments = $assignmentRepo->getAssignments($week["courseId"],$week["weekNr"]);

        $title = empty($week['title'])?"Week {$week["weekNr"]}":$week["title"];
        echo "<div class='border' style='height: auto;'>";
        if($_SESSION["type"]==2){
          echo "<h4>
          <form>
            <input type='text' name='title' style='width:300px' value='{$title}'>
            <input type='submit' value='Okay' style='padding-right:8px'>
          </form>";
        }else{
          echo "<h2>{$title}</h2>";
        }

        echo "<a href='' class='stretched-link' style='pointer-events: none; cursor: default;' >Attachments:</a>";

        $attachments = $attachmentRepo->getAttachments($week["weekNr"],$week["courseId"]);

        foreach($attachments as $attachment){
          echo "<a href='{$attachment['path']}' download='{$attachment['title']}.{$attachment['type']}' class='stretched-link' style='margin-right: 15px;'>{$attachment['title']}</a>";
        }
        
        echo "<br><a href='' class='stretched-link' style='pointer-events: none; cursor: default;' >Assignments: </a>";

        foreach($assignments as $assignment){
          echo "<a href='../Utility/viewAssignment.php?id={$assignment['id']}' class='stretched-link' style='margin-right: 15px;'>{$assignment['title']}</a>";
        }

        if($_SESSION["type"]==2){
          echo "<br><br><a href='../Professor/addAssignment.php?weekNr={$week["weekNr"]}&courseId={$week["id"]}' class='btnExtra' style='margin-right: 15px;'>Add assignment</a>";
          echo "<a href='../Professor/addAttachment.php?weekNr={$week["weekNr"]}&courseId={$week["id"]}' class='btnExtra' style='margin-right: 15px;'>Add attachment</a>";
        }

        echo "<br>";

        

        echo "</h4></div>";
    }

    if($_SESSION["type"]==1){
      echo "
      <div class='border' style='justify-content:center;'>
      <h2> What do you want to ask four professor? </h2>
      <label for='bio'>Ask the question: <span></label> <span></span><bR>
      <form action='../Controller/askQuestion.php' method='POST'> 
      <textarea id='question' name='question' rows='17' cols='40' ></textarea> <br>
      <input type='hidden' name='email' value='{$_SESSION['email']}'>
      <input type='hidden' name='id' value='{$week['id']}'>
      <input type='submit' value='Submit'>
      </form>
      </div>
      ";
    }
?>