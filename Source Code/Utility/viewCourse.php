<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>View Course</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="../css/profViewCourseStyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php
      include("../Utility/ownsCourseValidation.php");
    ?>
    <img src="../images/profCourseImage.png" class="container-one">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2> <?php echo $course[0]["name"] ?> </h2>
        <h4>
            <br><br>
            Number of enrolled students: <?php echo $courseRepo->getEnrolledNumber($_GET["courseId"]); ?>
            <br>
            Number of weeks: <?php echo $courseRepo->getWeeks($_GET["courseId"]); ?>
        </h4>
        </section>
        <main id="main">
            <div class="details-container">
                <div width="500px">
                    <h4>
                        <u>Course Description: </u><br>
                        <?php echo $course[0]["description"];?>
                    </h4>
                </div>
            </div>
            <br><br>
            <div class="flex-container">
                <?php
                include("../Controller/getCourseWeeks.php");
                ?>
</body>