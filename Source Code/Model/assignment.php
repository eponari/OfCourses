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

        public function getAssignments($courseId,$weekNr){
            $stmt = $this -> dbh -> prepare("SELECT * from assignment WHERE courseID = ? and weekNr=?");
            $stmt -> execute([$courseId,$weekNr]);
            $assignments = $stmt -> fetchAll();
            return $assignments;
        }

        public function getAssignment($assignmentId){
            $stmt = $this -> dbh -> prepare("SELECT * from assignment WHERE id=?");
            $stmt -> execute([$assignmentId]);
            $assignments = $stmt -> fetch();
            return $assignments;
        }
    }
?>