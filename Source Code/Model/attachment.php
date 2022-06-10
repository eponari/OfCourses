<?php

    class Attachment{
        public function __construct(){
            include("../Utility/db_connection.php");
            $this -> dbh = $conn;
        }

        public function getAttachments($weekNr,$courseId){
            $stmt = $this -> dbh -> prepare("SELECT title,path from attachment WHERE courseID = ? and weekNr=?");
            $stmt -> execute([$courseId,$weekNr]);
            $attachemnts = $stmt -> fetchAll();
            return $attachemnts;
        }
    }
?>