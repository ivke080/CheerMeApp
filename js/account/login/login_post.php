<?php
    require("../../../connect.php");
    include("../../../consts.php");
    $user = mysqli_real_escape_string($conn, trim($_POST['user']));
    $pass = mysqli_real_escape_string($conn, trim($_POST['pass']));
    
    $query = "SELECT username FROM users WHERE ('$user' = username OR '$user' = email) 
    AND password = SHA1('$pass')";
    $result = mysqli_query($conn, $query);
    
    $arr = mysqli_fetch_array($result,MYSQLI_NUM);
    
    session_start();
    if (count($arr) == 0) {
        $_SESSION['greska'] = GRESKA_LOGIN; // 1
        header("Location: /#/login");
    } else {
        $_SESSION['user'] = $arr[0];
        header("Location: /#/categories");   
    }
?>