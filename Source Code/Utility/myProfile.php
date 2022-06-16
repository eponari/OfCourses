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
  <link rel="icon" href="https://github.com/eponari/OfCourses/blob/main/projectLogo.jpg?raw=true">

</head>

<body>

  <?php
    session_start();
    if($_SESSION["type"]==1){
      include("../Utility/studentHeader.php");
    }else if ($_SESSION["type"]==2){
      include("../Utility/professorHeader.php");
    }else if ($_SESSION["type"]==3){
      include("../Utility/administatorHeader.php");
    }else{
      session_destroy();
      header("Location: ../index.php");
    }
    
  ?>


<div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">

<img src="../images/image2.jpeg" class="container-three">
<h2> <span>Welcome to your account!</span></h2>

<h3> <img src="../images/avatar.png" class="container-two"><span>Name Surname</span></h3> <br>

<div class="profileContainer">

  <div class="border">
    <form action='updateProfile.php' method='POST'>
    <table style="margin-left:auto; margin-right:auto; border-spacing: 70px 0; padding-left: 70px;">
      <tr >
        <td>Full Name: </td>
        <td>  <input type="text" placeholder="Full Name" id="name" name="name" style="width:200px;" required></td>
      </tr>

      <tr>
        <td> Password:</td>
        
        <td> <input type="password" placeholder="**********" id="password" name="password" style="width:200px;" required> </td>
      </tr>
      <tr>
        
    </table>

    
    <a style="text-align: center;"  class="btn" href="submitChanges.html">Submit Changes.</a>
  </form>
</div>




</body>
    
