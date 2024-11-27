<?php

    $serverName = "localhost";
    $userName = "super_admin";
    $password = "StrongPassword123!";
    $dbName = "agroculture";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
