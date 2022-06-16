<?php
  session_start();

  if(isset($_SESSION["type"])){
    switch($_SESSION["type"]){
      case 2:
        header("Location: ../Professor/welcome.php");
        break;
      case 1:
        header("Location: ../Student/welcome.php");
        break;
    } 
  }else{
    header("Location: ../login.php");
  }
?>
<!-- ======= Header ======= -->
<header>
      <div class="container">
        <nav class="navbar">
        <div class="container-fluid">
          
        
            <a class="button" href="welcome.php">OfCourses</a>
           
            <a class="btn" href="../Utility/logOut.php">Log Out</a></li>
            <a class="btn" href="../Utility/myProfile.php">My Profile</a></li>
            <a class="btn" href="../Administator/validateCourses.php">Validate Courses</a></li>
            <a class="btn" href="../Administator/validateProfessors.php">Validate Professors</a></li>
            <link rel="icon" href="https://github.com/eponari/OfCourses/blob/main/projectLogo.jpg?raw=true">
                     
        </div>
    </nav>
</div>

  </header><!-- End Header -->
  