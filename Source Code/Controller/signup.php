<?php
    if(isset($_POST["submit"])){
        include("../Model/User.php");

        $message = "";
        $clean = array();
        
        $userRepository = new User();

        if(isset($_POST["name"])){
            if($_POST["name"]!=""){
                $clean["name"] = htmlentities($_POST["name"]);
            }else{
                $message = "Name is empty!<br>";
            }
        }else{
            $message += "Name is not set!<br>";
        }

        if(isset($_POST["email"])){
            if($_POST["email"]!=""){
                $clean["email"] = htmlentities($_POST["email"]);
            }
            else{
                $message += "Email is empty!<br>";
            }
            
        }else{
            $message += "Email is not set!<br>";
        }

        if(isset($_POST["password"])){
            if($_POST["password"]!=""){
                $clean["password"] = htmlentities($_POST["password"]);
            }else{
                $message += "Password is emplty<br>";
            }
        }else{
            $message += "Password is not set!<br>";
        }

        if(isset($_POST["type"])){
            if($_POST["type"]!=""){
                $clean["type"] = htmlentities($_POST["type"]);
            }else{
                $message += "Type is empty!<br>";
            }
        }else{
            $message += "Type is not set!<br>";
        }

        if($message==""){
            $msg = $userRepository->createUser($clean["name"],$clean["email"],$clean["password"],$clean["type"]);
            
            if($msg!=""){
                echo $msg;
            }

            session_start();

            $_SESSION["email"] = $clean["email"];
            $_SESSION["type"] = $clean["type"];
            $_SESSION["fullName"] = $clean["name"];

            switch($clean["type"]){
                case 1:
                    header("Location: ../Student/Welcome.php");
                    break;
                case 2:
                    header("Location: ../Professor/Welcome.php");
                    break;
            }
        }else{
            echo $message;
        }
    }else{
        echo "Form is not submited!";
    }
?>