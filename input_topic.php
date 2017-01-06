<?php
    session_start();
    require("connect.php");
    $title = mysqli_real_escape_string($conn, trim($_POST['title']));
    $tags = "one,two,three";
    
    $query = "INSERT INTO topics(name,category_id,tags_list) 
    VALUES ('$title',5, '$tags')";
    $result = mysqli_query($conn, $query);
    
?>