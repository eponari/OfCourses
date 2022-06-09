<?php

    class Question{
        public function __construct(){
            include("../Utility/db_connection.php");
            $this->dbh = $conn;
        }

        public function getQuestions($email) {
            $stmt = $this->dbh->prepare("SELECT q.qid qid,(select fullName from user where email=q.email) userName,c.name courseName,q.question question,q.answer answer FROM question q,user u,course c where q.id = c.id and u.email = c.professorEmail and c.professorEmail=? order by q.answer");
            $stmt->execute([$email]);
            $questions = $stmt->fetchAll();

            return $questions;
        }

        public function answerQuestion($email,$qid,$answer){
            $stmt = $this->dbh->prepare("UPDATE question set answer = ? where qid = ? and id in (select id from course where professorEmail = ?)");
            $stmt->execute([$answer,$qid,$email]);

            return $questions;
        }
    }

?>