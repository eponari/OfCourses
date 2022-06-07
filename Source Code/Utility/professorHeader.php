<?php
  session_start();

  if(isset($_SESSION["type"])){
    switch($_SESSION["type"]){
      case 1:
        header("Location: ../Student/welcome.php");
        break;
      case 3:
        header("Location: ../Administator/welcome.php");
        break;
    } 
  }else{
    header("Location: ../login.php");
  }
?>
<div class="container">
    <nav class="navbar">
        <div class="container-fluid">
        
            <a class="button" href="../Professor/welcome.php">OfCourses</a>
           
            <a class="btn" href="../Utility/logout.php">Log Out</a></li>
            <a class="btn" href="../Utility/myProfile.php">My Profile</a></li>
            <a class="btn" href="../Professor/QnA.php">Ask the Professor</a></li>
            <a class="btn" href="../Professor/manageCourses.php">Manage Courses</a></li>
         
        </div>
    </nav>   
</div>