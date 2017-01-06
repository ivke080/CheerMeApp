<?php
    if (isset($_POST['btn'])) {
        session_start();
        $_SESSION['category_id'] = $_POST['btn'];
        
        print_r($_SESSION);
        if(isset($_SESSION['user'])){
            header("Location: /#/chat/".rand (  1 ,  100 ));
            exit();
        }
        header("Location: /#/topic");
    }
?>