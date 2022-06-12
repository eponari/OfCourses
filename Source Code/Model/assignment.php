<?php

    class Assignment{
        public function __construct(){
            include("../Utility/db_connection.php");
            $this -> dbh = $conn;
        }

        public function createAssignment($dueDate,$weekNr,$courseId,$description,$title){
            $stmt = $this -> dbh -> prepare("INSERT INTO `assignment` (`dueDate`, `uploadDate`, `weekNr`, `courseId`, `description`, `title`) VALUES (?, ?, ?, ?, ?,?)");
            $stmt -> execute([$dueDate,date("y-m-d"),$weekNr,$courseId,$description,$title]);
            $assignmentId = $this -> dbh -> lastInsertId();
            return $assignmentId;
        }

        public function getAssignments($weekNr,$courseId){
            $stmt = $this -> dbh -> prepare("SELECT title,path from assignment WHERE courseID = ? and weekNr=?");
            $stmt -> execute([$courseId,$weekNr]);
            $assignments = $stmt -> fetchAll();
            return $assignments;
        }
    }
?>