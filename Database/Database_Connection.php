<?php
    include('Database_Config.php');

    // Create connection with the Database
    $conn = mysqli_connect(
        $DatabaseConfig["DB_Server"], 
        $DatabaseConfig["DB_Username"], 
        $DatabaseConfig["DB_Password"], 
        $DatabaseConfig["DB_Name"]
    );

    // Check connection with the Database (Error Handeling if connection fails)
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $DBConnectionStatus = "Connected successfully";
    }
?>
