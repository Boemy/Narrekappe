<?php
    include('../../Database/Database_Connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input from the form
        $NewUsername = mysqli_real_escape_string($conn, $_POST['username']);
        $NewPassword = mysqli_real_escape_string($conn, $_POST['password']);

        // Perform the MySQL query to create a new admin
        $MySQLQuery = "INSERT INTO student (`username`, `password`) VALUES ('$NewUsername', '$NewPassword')";
        $Result = mysqli_query($conn, $MySQLQuery);

        // Check if the query was successful
        if ($Result) {
            // Redirect back to index.php after admin creation
            header('Location: ../../index.php');
            exit();
        } else {
            echo "Error creating new user: " . mysqli_error($conn);
        }
    }

    // Close the database connection when you are done.
    mysqli_close($conn);
?>
