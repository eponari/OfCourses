<?php
  session_start();

  if(isset($_SESSION["type"])){
    switch($_SESSION["type"]){
      case 2:
        header("Location: ../Professor/welcome.php");
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
          
        
            <a class="button" href="../Student/welcome.php">OfCourses</a>
           
            <a class="btn" href="../Utility/logout.php">Log Out</a>
            <a class="btn" href="../Utility/myAccount.php">My Account</a>
            <a class="btn" href="../Student/studentCourses.php">My Courses</a></li>
         
        </div>
    </nav>   
</div>