<?php
    include('Database_Config.php');

    // Create connection with the Database
    $conn = new mysqli(
        $DatabaseConfig["DB_Server"], 
        $DatabaseConfig["DB_Username"], 
        $DatabaseConfig["DB_Password"], 
        $DatabaseConfig["DB_Name"]
    );

    // Check connection with the Database (Error Handeling if connection fails)
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $DBConnectionStatus = "Connected successfully";
    }
?>
