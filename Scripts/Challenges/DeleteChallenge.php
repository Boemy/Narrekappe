<?php
// Include your database connection file
include('../../Database/Database_Connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $DeleteID = mysqli_real_escape_string($conn, $_POST['deleteID_2']);

    // Perform the MySQL query to delete the user
    $MySQLQuery = "DELETE FROM `challenges` WHERE `id` = $DeleteID";
    $Result = mysqli_query($conn, $MySQLQuery);

    // Check if the query was successful
    if ($Result) {
        // Redirect back to index.php after deletion
        header('Location: ../../index.php');
        exit();
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
}

// Close the database connection when you are done.
mysqli_close($conn);
?>
