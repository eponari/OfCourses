<?php
    if(isset($_POST["submit"])){
        include("../Model/User.php");

        $message = "";
        $clean = array();
        
        $userRepository = new User();

        if(isset($_POST["email"])){
            $clean["email"] = htmlentities($_POST["email"]);
        }else{
            $message += "Email is empty!<br>";
        }

        if(isset($_POST["password"])){
            $clean["password"] = htmlentities($_POST["password"]);
        }else{
            $message += "Password is empty!<br>";
        }

        if($message==""){
            $user = $userRepository->verifyLogin($clean["email"],$clean["password"]);

            if($user){
                session_start();
                
                $_SESSION["email"] = $user["email"];
                $_SESSION["type"] = $user["type"];
                $_SESSION["fullName"] = $user["fullName"];

                switch($user["type"]){
                    case 1:
                        header("Location: ../Student/welcome.php");
                        break;
                    case 2:
                        header("Location: ../Professor/welcome.php");
                        break;
                }
            }else{
                echo "No such user";
            }
            

        }else{
            echo $message;
        }
    }else{
        echo "Form is not submited!";
    }
?>