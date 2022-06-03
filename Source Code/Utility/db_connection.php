<?php
    $servername = 'localhost';
    // $username = 'root';
    // $password = '';
    // $database = "ofcoursesdb";
    $username = 'eponari19';
    $password='ep908ari';
    $database = 'web22_eponari19';
    

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>