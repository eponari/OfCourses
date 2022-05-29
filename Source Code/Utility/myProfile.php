<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to OfCourses.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Template Main CSS File -->
  <link href="../css/navbarStyle.css" rel="stylesheet">
  <link href="../css/studentStyle.css" rel="stylesheet">
  <link href="../css/studentAccStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <?php
    session_start();
    if($_SESSION["type"]==1){
      include("../Utility/studentHeader.php");
    }else if ($_SESSION["type"]==2){
      include("../Utility/professorHeader.php");
    }else{
      session_destroy();
      header("Location: ../index.php");
    }
    
  ?>


  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">

    <img src="../images/image2.jpeg" class="container-three">
    <h2> <span>Welcome to your account!</span></h2>
    
    <h3> <img src="../images/avatar.png" class="container-two"><span>Name Surname</span></h3> <br>
    
    <div class="container">

        <form>
            <fieldset>
            <span><label for="name"> Username:</label> <span></span>
            <input type="text" placeholder="username" id="name" name="name"> <br><br> </span>

            <span><label for="email"> Email:</label> <span></span>
            <input type="text" placeholder="email" id="email" name="email"> <br><br></span>
            
            <span><label for="password"> Password:</label> <span></span>
            <input type="password" placeholder="**********" id="password" name="password"> <br><br></span>
            
            <a class="btn" href="editProfile.html">Edit Profile.</a>

            
            </fieldset>

            

        </form>

        

    </div>




</body>
    
