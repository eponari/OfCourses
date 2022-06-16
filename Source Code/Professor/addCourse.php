<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Course Creation</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="../css/profNewCourseStyle.css" rel="stylesheet">
    <link rel="icon" href="https://github.com/eponari/OfCourses/blob/main/projectLogo.jpg?raw=true">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
      include("../Utility/professorHeader.php");
    ?>
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <form action="../Controller/createCourse.php" method="POST">
            <h2> </h2>
            <h2><input type="text" name="title" placeholder="Course Title" style="width:500px; height:40px; font-size:20pt; color: #51087E; text-align: center;
        font-family: sans-serif;" required></h2>
            <h4>Course Description: <br>
                <textarea class="textarea" id="textarea" name="description" rows="5" cols="60"
                    minlength="3" placeholder="What will this course provide?" style="text-align:center; color: #51087E; font-family: sans-serif;
            font-size:11pt;" required></textarea>
                <br><br>

                <label for="weeks">Start Date:</label>
                <input type="date" id="weeks" name="startDate" required><br><br>
                <label for="weeks">End Date:</label>
                <input type="date" id="weeks" name="endDate" required><br><br>
                <label for="weeks">Number of weeks:</label>
                <input type="number" id="weeks" name="weeks" step="1" max="20" style="width:33px" required><br><br>

                <br><input type="submit" style="padding-right:8px">
        </form>
        </h4>

        </section>
        <main id="main">
</body>