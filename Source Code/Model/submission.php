<?php

    class Submission{
        public function __construct(){
            include("../Utility/db_connection.php");
            $this -> dbh = $conn;
        }

        public function createSubmission($email,$assignmetId,$path){
            $stmt = $this -> dbh -> prepare("INSERT INTO `submission` (`email`, `assignmentId`, `handledDate`, `grade`,`path`) VALUES (?, ?, ?, NULL,?)");
            $stmt -> execute([$email,$assignmetId,date("y-m-d"),$path]);
        }

        public function getSubmission($id,$email){
            $stmt = $this -> dbh -> prepare("SELECT * from submission where assignmentId=? and email=?");
            $stmt -> execute([$id,$email]);
            $submission = $stmt -> fetch();
            return $submission;
        }


        public function getSubmissions($id){
            $stmt = $this -> dbh -> prepare("SELECT path,grade,fullName from submission s,user u where s.email=u.email and assignmentId=?");
            $stmt -> execute([$id]);
            $submissions = $stmt -> fetchAll();
            return $submissions;
        }

        public function upgradeGrade($id,$path,$grade){
            $stmt = $this -> dbh -> prepare("UPDATE submission set grade=? where assignmentId=? and path=?");
            $stmt -> execute([$grade,$id,$path]);
        }
    }
?>