<?php

    class User{
        public function __construct(){
            include("../Utility/db_connection.php");
            $this->dbh = $conn;
        }

        public function verifyLogin($email, $password) {
            $stmt = $this->dbh->prepare("SELECT * FROM `user` WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            return ($user && password_verify($password, $user['password'])) ? $user: null;
        }

        public function createUser($name,$email,$password,$type){
            $hashed_pass = password_hash($password,PASSWORD_BCRYPT);
            
            $query = "SELECT * FROM `user` WHERE EMAIL=?";

            $stmt = $this->dbh->prepare($query);
            $stmt->execute([$email]);
            $usersWithThisEmail = $stmt->fetch();
            
            if($usersWithThisEmail){
                return "This email has been used for another account! Please try again!";
            }

            $query = "INSERT INTO `user` (`fullName`, `email`, `password`, `type`) VALUES (?, ?, ?, ?);";
            $stmt = $this->dbh->prepare($query);
            $stmt->execute([$name, $email, $hashed_pass, $type]);
        }

        public function updateUser($name,$password, $email){
            $hashed_pass = password_hash($password,PASSWORD_BCRYPT);

            $statement = $this->dbh->prepare("UPDATE user set fullname=? and password=? where email=?");
            $statement -> execute([$name,$hashed_pass, $email]);
        }
    }

?>