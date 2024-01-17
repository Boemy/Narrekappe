<?php
include('../../Database/Database_Connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $EditID = mysqli_real_escape_string($conn, $_POST['editID']);
    $EditUsername = mysqli_real_escape_string($conn, $_POST['editUsername']);
    $EditPassword = mysqli_real_escape_string($conn, $_POST['editPassword']);

    // Perform the MySQL query to edit the user
    $MySQLQuery = "UPDATE `student` SET `username` = '$EditUsername', `password` = '$EditPassword' WHERE `student`.`id` = $EditID";
    $Result = mysqli_query($conn, $MySQLQuery);

    // Check if the query was successful
    if ($Result) {
        // Redirect back to index.php after edit
        header('Location: ../../index.php');
        exit();
    } else {
        echo "Error editing user: " . mysqli_error($conn);
    }
}

// Close the database connection when you are done.
mysqli_close($conn);
?>
