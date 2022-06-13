<?php

    class Course{
        public function __construct(){
            include("../Utility/db_connection.php");
            $this -> dbh = $conn;
        }

        public function createCourse($email,$title,$description,$startDate,$endDate,$weeks){
            $stmt = $this -> dbh -> prepare("INSERT INTO `course` (`name`, `description`, `professorEmail`, `startDate`, `endDate`) VALUES (?, ?, ?, ?, ?)");
            $stmt -> execute([$title,$description,$email,$startDate,$endDate]);
            $courseId = $this -> dbh -> lastInsertId();

            for($i=1;$i<=$weeks;$i++){
                $stmt = $this -> dbh -> prepare("INSERT INTO `week` (`weekNr`, `courseId`) VALUES (?, ?)");
                $stmt -> execute([$i,$courseId]);
            }

            return $courseId;
        }

        public function enrollStudent($id,$email){
            $stmt = $this -> dbh -> prepare("INSERT INTO REGISTERED VALUES (?, ?)");
            $stmt -> execute([$id,$email]);
        }

        public function unenrollStudent($id,$email){
            $stmt = $this -> dbh -> prepare("DELETE FROM REGISTERED WHERE courseId=? and email=?");
            $stmt -> execute([$id,$email]);
        }

        public function getCourseFromProfessor($email,$id){
            $stmt = $this -> dbh -> prepare("SELECT * from course c,week w where w.courseId = c.id and c.id=? and c.professorEmail=?");
            $stmt -> execute([$id,$email]);
            $courses = $stmt -> fetchAll();
            return $courses;
        }

        public function getWeeks($email,$id){
            $stmt = $this -> dbh -> prepare("SELECT count(*) c from course c,week w where w.courseId = c.id and c.id=? and c.professorEmail=?");
            $stmt -> execute([$id,$email]);
            $courses = $stmt -> fetch();
            return $courses["c"];
        }

        public function getEnrolled($email){
            $stmt = $this -> dbh -> prepare("SELECT count(*) result from course,registered r where courseId=id and r.email=?");
            $stmt -> execute([$email]);
            $count = $stmt -> fetch();

            if($count["result"] == 0){
                return array();
            }

            $stmt = $this -> dbh -> prepare("SELECT course.*,count(*) cnt,CASE when startDate > CURDATE() then 'Upcoming' when endDate > CURDATE() then 'Completed' ELSE 'Ongoing' END status  from course,registered where courseId=id and  email=?");
            $stmt -> execute([$email]);
            $courses = $stmt -> fetchAll();
            
            return $courses;
        }

        public function getAllUnregisteredCourses($email){
            $stmt = $this -> dbh -> prepare("SELECT count(*) result from course where id not in (select courseId from registered where email=? )");
            $stmt -> execute([$email]);
            $count = $stmt -> fetch();

            if($count["result"] == 0){
                return array();
            }

            $stmt = $this -> dbh -> prepare("SELECT course.*,count(*) cnt,CASE when startDate > CURDATE() then 'Upcoming' when endDate > CURDATE() then 'Completed' ELSE 'Ongoing' END status  from course where id not in (select courseId from registered where email=?)");
            $stmt -> execute([$email]);
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
            $week = $stmt ->fetchAll();
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
            $stmt = $this -> dbh -> prepare("SELECT avg(grade) from assignment a, course c where a.courseId = c.id");
            $stmt -> execute();
            $avg = $stmt ->fetchAll();
            return $avg;
        }

        public function getAllWeeks(){
            $stmt = $this -> dbh -> prepare("SELECT * from week");
            $stmt -> execute();
            $weeks = $stmt -> fetchAll();
            return $weeks;
        }

        public function getAllAssignments(){
            $stmt = $this -> dbh -> prepare("SELECT * from assignment");
            $stmt -> execute();
            $assignments = $stmt -> fetchAll();
            return $assignments;
        }

        public function getProfessorForCourse(){
            $stmt = $this -> dbh -> prepare("SELECT fullName from user u, course c where u.type = 2 and u.email = c.professorEmail");
            $stmt -> execute();
            $name = $stmt -> fetchAll();
            return $name;
        }

        // public function studentEnrolled(){
        //     $stmt = $this -> dbh -> prepare("SELECT count(email) from user u, course c where u.type = 1 and u.email = c.email");
        //     $stmt -> execute();
        //     $nr = $stmt -> fetch();
        //     return $nr;
        // }

        public function getCourseDescription(){
            $stmt = $this -> dbh -> prepare("SELECT description from course");
            $stmt -> execute();
            $description = $stmt -> fetchAll();
            return $description;
        }


    }
?>