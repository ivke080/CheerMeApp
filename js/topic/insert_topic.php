<?php
    require('../../connect.php');
    
    session_start();
    $title = mysqli_real_escape_string($conn, trim($_POST['title']));
    $tags = $_POST['tags'];
    $category_id = $_SESSION['category_id'];
    
    $query = "INSERT INTO topics(name, tags_list, category_id) 
             VALUES ('$title', '$tags', '$category_id')";
    
    $result = mysqli_query($conn, $query);
    $_SESSION['category_id'] = 0;
    header("Location: /#/chat/".mysqli_insert_id($conn));
?>