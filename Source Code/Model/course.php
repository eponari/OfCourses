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

        public function getCourseName(){
            $stmt = $this -> dbh -> prepare("SELECT id, name from course");
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

        public function getCurrentWeek(){
            $stmt = $this -> dbh -> prepare("SELECT weekNr, title from week w, course c where w.id = c.id");
            $stmt -> execute();
            $week = $stmt ->fetch();
            return $week;
        }

        public function getStatus(){
            $stmt = $this -> dbh -> prepare("SELECT weekNr from week w, course c where w.id = c.id");
            $stmt -> execute();
            $week = $stmt ->fetch();
            $status = false;

            if($week == 14){
                $status = true;
                return $status;
            }

            if($week < 14){
                return $status;
            }
        }


        public function getGrade(){
            $stmt = $this -> dbh -> prepare("SELECT avg(grade) from assignment, course");

        }

    }
?>