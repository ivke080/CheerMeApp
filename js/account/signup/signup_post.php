<?php
    require("../../../connect.php");
    include('../../../consts.php');
    session_start();
    $user = mysqli_real_escape_string($conn, trim($_POST['user']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $pass = mysqli_real_escape_string($conn, trim($_POST['pass']));
    $confirm = mysqli_real_escape_string($conn, trim($_POST['confirmPass']));
    
    $query = "SELECT username FROM users WHERE username='$user'";
    $result = mysqli_query($conn, $query);
    if (count(mysqli_fetch_array($result)) != 0) {
       $_SESSION['greska'] = GRESKA_POSTOJI_ACC; // 2;
       header("Location: /#/signup");
    } else if ($pass != $confirm) {
        $_SESSION['greska'] = GRESKA_PASSWORD_MATCH;
        header("Location: /#/signup");
    } else {
        $query = "INSERT INTO users(username, password, email) 
        VALUES ('$user', SHA1('$pass'), '$email')";
        $result = mysqli_query($conn, $query);
        $query = "SELECT username FROM users WHERE username = '$user'";
        $result = mysqli_query($conn, $query);
        $_SESSION['user'] = mysqli_fetch_array($result)[0];
        header("Location: /#/categories");
    }
    
    
?>