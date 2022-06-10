<?php

    class Assignment{
        public function __construct(){
            include("../Utility/db_connection.php");
            $this -> dbh = $conn;
        }

        public function getAssignments($weekNr,$courseId){
            $stmt = $this -> dbh -> prepare("SELECT title,path from assignment WHERE courseID = ? and weekNr=?");
            $stmt -> execute([$courseId,$weekNr]);
            $assignments = $stmt -> fetchAll();
            return $assignments;
        }
    }
?>