<?php

    class Attachment{
        public function __construct(){
            include("../Utility/db_connection.php");
            $this -> dbh = $conn;
        }

        public function createAttachment($path,$courseId,$weekNr,$title,$type){
            $stmt = $this -> dbh -> prepare("INSERT INTO `attachment` (`title`, `path`, `uploadDate`, `courseId`, `weekNr`, `type`, `assignmentId`) VALUES (?, ?, ?, ?, ?,?, NULL)");
            $stmt -> execute([$title,$path,date("y-m-d"),$courseId,$weekNr,$type]);
        }

        public function createAttachmentForAssignment($path,$courseId,$weekNr,$title,$type,$assignmentId){
            $stmt = $this -> dbh -> prepare("INSERT INTO `attachment` (`title`, `path`, `uploadDate`, `courseId`, `weekNr`, `type`, `assignmentId`) VALUES (?, ?, ?, ?, ?,?, ? )");
            $stmt -> execute([$title,$path,date("y-m-d"),$courseId,$weekNr,$type,$assignmentId]);
        }


        public function getAttachments($weekNr,$courseId){
            $stmt = $this -> dbh -> prepare("SELECT title,path,type from attachment WHERE courseID = ? and weekNr=?");
            $stmt -> execute([$courseId,$weekNr]);
            $attachemnts = $stmt -> fetchAll();
            return $attachemnts;
        }
    }
?>