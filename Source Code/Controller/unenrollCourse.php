<?php
    include("../Utility/studentHeader.php");
    session_start();
    include("../Model/course.php");

    include("../Utility/validateInput.php");

if(!validateInputs($_GET["id"])){
	echo "<script>history.back()</script>";
	exit();
}

$_GET["id"] = htmlentities($_GET["id"]);

    $courseRepository = new Course();

    $courseRepository->unenrollStudent($_GET["id"],$_SESSION["email"]);
    
    header("Location: ../Student/courses.php");
?>