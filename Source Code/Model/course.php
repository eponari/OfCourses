<?php

    class Course{
        public function __construct(){
            include("../Utility/db_connection.php");
            $this -> dbh = $conn;
        }

        public function getAllCourses(){
            $stmt = $this -> dbh -> prepare("SELECT * from course");
            $stmt -> execute();
            $courses = $stmt -> fetchAll();
            return $courses;
        }

        public function getProfessorCourses($email){
            $stmt = $this -> dbh -> prepare("SELECT count(*) result from course where professorEmail=?");
            $stmt -> execute([$email]);
            $count = $stmt -> fetch();

            if($count["result"] == 0){
                return array();
            }

            $stmt = $this -> dbh -> prepare("SELECT course.*,count(*) cnt,CASE when startDate > CURDATE() then 'Upcoming' when endDate > CURDATE() then 'Completed' ELSE 'Ongoing' END status  from course,registered where professorEmail=?");
            $stmt -> execute([$email]);
            $courses = $stmt -> fetchAll();
            
            return $courses;
            
            
        }

        public function deleteCourse($id){
            $stmt = $this -> dbh -> prepare("DELETE FROM course where id = ?");
            $stmt -> execute([$id]);
        }
    }