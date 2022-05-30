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
    }