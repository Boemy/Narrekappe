<?php
    include('../../Database/Database_Connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input from the form
        $NewName = mysqli_real_escape_string($conn, $_POST['name']);
        $NewDescription = mysqli_real_escape_string($conn, $_POST['description']);
        $NewDifficulty = mysqli_real_escape_string($conn, $_POST['difficulty']);
        $NewLink = mysqli_real_escape_string($conn, $_POST['link']);

        // Perform the MySQL query to create a new admin
        $MySQLQuery = "INSERT INTO challenges (`name`, `description`, `difficulty`, `link`) VALUES ('$NewName', '$NewDescription', '$NewDifficulty', '$NewLink')";
        $Result = mysqli_query($conn, $MySQLQuery);

        // Check if the query was successful
        if ($Result) {
            // Redirect back to index.php after admin creation
            header('Location: ../../index.php');
            exit();
        } else {
            echo "Error adding new challenge: " . mysqli_error($conn);
        }
    }

    // Close the database connection when you are done.
    mysqli_close($conn);
?>