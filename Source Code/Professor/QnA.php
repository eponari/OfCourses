<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ask the Professor</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="../css/profQnAStyle.css" rel="stylesheet">
    <link rel="icon" href="https://github.com/eponari/OfCourses/blob/main/projectLogo.jpg?raw=true">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
      include("../Utility/professorHeader.php");
    ?>
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">

        <h2> </h2>
        <h2>Q&A <span>Forum: Ask the Professor!</span></h2>
        </section>
        <main id="main">
            <div class="flex-container">
                <?php
      include("../Controller/getQuestions.php");
    ?>
</body>