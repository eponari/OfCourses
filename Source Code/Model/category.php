<?php

    class Category{
        public function __construct(){
            include("../Utility/db_connection.php");
            $this -> dbh = $conn;
        }

        public function getCategories(){
            $stmt = $this -> dbh -> prepare("SELECT distinct category from category,course WHERE courseID = id");
            $stmt -> execute();
            $categories = $stmt -> fetchAll();
            return $categories;
        }
    }
?>