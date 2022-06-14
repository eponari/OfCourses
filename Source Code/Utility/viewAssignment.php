<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Assignments</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Template Main CSS File -->
  <link href="../css/profAssignmentStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php
      include("../Utility/ownsAssignmentValidation.php");
    ?>
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <h2><?php echo $assignment["title"]?></h2>

        <h4 style="font-style:italic;">Due date: <?php echo $assignment["dueDate"]?> </h4>

        <h4>Assignment Description: <br>
        <?php echo $assignment["description"]?>
      </h4>

      <h4> Attachment: <br>
        <a href="url" style="color: #51087E; text-align: center">CEN352 Homework 1 (2021-2022).pdf</a> </h4>

      <br>
      <table style="padding-left:10px;">
        <tr>
          <th style="color: #51087E;">Student </th>
          <th style="color: #51087E;">Submission</th>
          <th style="color: #51087E;">Grade</th>
        </tr>
        <tr>
          <td style="width:200px; color: #51087E; text-align: center;"> Vanessa Ives </td>
          <td><a href="url" style="color: #51087E; text-align: center">VIves_HW1.pdf</a></td>
          <td><input type="number" value="87" step="1" max="100" style="width:200px; color: #51087E; text-align: center;"></td>
        </tr>
        <tr>
          <td style="width:200px; color: #51087E; text-align: center;"> Faye Wong </td>
          <td><a href="url" style="color: #51087E; text-align: center">FayeWong1.pdf</a></td>
          <td><input type="number" value="100" step="1" max="100" style="width:200px; color: #51087E; text-align: center;"></td>
        </tr>
        <tr>
          <td style="width:200px; color: #51087E; text-align: center;"> Lorela Gjoni </td>
          <td><a href="url" style="color: #51087E; text-align: center">LorelaGj_Homework.pdf</a></td>
          <td><input type="number" value="93" step="1" max="100" style="width:200px; color: #51087E; text-align: center;"></td>
        </tr>
        <tr>
          <td style="width:200px; color: #51087E; text-align: center;"> Mason Jar </td>
          <td><a href="url" style="color: #51087E; text-align: center">MasonJar_1.pdf</a></td>
          <td><input type="number" value="98" step="1" max="100" style="width:200px; color: #51087E; text-align: center;"></td>
        </tr>
        <tr>
          <td style="width:200px; color: #51087E; text-align: center;"> Bruna Gomez </td>
          <td><a href="url" style="color: #51087E; text-align: center">BG_Homework1.pdf</a></td>
          <td><input type="number" value="88" step="1" max="100" style="width:200px; color: #51087E; text-align: center;"></td>
        </tr>
        <tr>
          <td style="width:200px; color: #51087E; text-align: center;"> Stephanie Stile </td>
          <td><a href="url" style="color: #51087E; text-align: center">SStile_Homework1.pdf</a></td>
          <td><input type="number" value="75" step="1" max="100" style="width:200px; color: #51087E; text-align: center;"></td>
        </tr>
        <tr>
          <td style="width:200px; color: #51087E; text-align: center;"> Peggy Lee </td>
          <td><a href="url" style="color: #51087E; text-align: center">PeggyLee_HW1.pdf</a></td>
          <td><input type="number" value="70" step="1" max="100" style="width:200px; color: #51087E; text-align: center;"></td>
        </tr>
        <tr>
          <td style="width:200px; color: #51087E; text-align: center;"> Layla Dae </td>
          <td><a href="url" style="color: #51087E; text-align: center">LaylaDae_hw1.pdf</a></td>
          <td><input type="number" value="83" step="1" max="100" style="width:200px; color: #51087E; text-align: center;"></td>
        </tr>
        <tr>
          <!-- <td><input type="text" value="Henry Jekyll" style="width:200px; color: #51087E; text-align: center;"> </td> -->
          <td style="width:200px; color: #51087E; text-align: center;"> Henry Jekyll </td>
          <!-- <td><input type="text" value="HenryJekyll_HW1" style="width:200px; color: #51087E; text-align: center;"></td> -->
          <td><a href="url" style="color: #51087E; text-align: center">HenryJekyll_HW1.pdf</a></td>
          <td><input type="number" value="95" step="1" max="100" style="width:200px; color: #51087E; text-align: center;"></td>
        </tr>
        <tr>
          <td><input type="submit" id="addRow" value="Add Student Submission" style="color:#51087E; font-family: sans-serif;"> </td>
          <td></td>
          <td></td>
        </tr>
      </table> 

      <br>
      <h4> <a class="buttonExtra">Add Assignment</a></h4>

      
  <main id="main">

  </body>