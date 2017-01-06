<?php
    $servername = "localhost";
    $username = "sevic6";
    $password = "cistodaimamo";
    $dbname = "hackathon";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>