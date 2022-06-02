<?php
    // session_start();
    
    // if(isset($_SESSION['user'])){
    
    //   $USER=$_SESSION['user']['email'];
    // }else {
    //     header("Location: ../login.php");
    // }

    include("../Model/category.php");

    $categoriesRepo = new Category();

    $categories = $categoriesRepo -> getCategories();

    if($categories) {
        foreach($categories as $c){
            $categoryName = $c['category'];
        }
    }

?>