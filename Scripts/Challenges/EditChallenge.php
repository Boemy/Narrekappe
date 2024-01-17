<?php
include('../../Database/Database_Connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $EditID = mysqli_real_escape_string($conn, $_POST['editID_2']);
    $EditName = mysqli_real_escape_string($conn, $_POST['editName']);
    $EditDescription = mysqli_real_escape_string($conn, $_POST['editDescription']);
    $EditDifficulty = mysqli_real_escape_string($conn, $_POST['editDifficulty']);
    $EditLink = mysqli_real_escape_string($conn, $_POST['editLink']);

    // Perform the MySQL query to edit the user
    $MySQLQuery = "UPDATE `challenges` SET `name` = '$EditName', `description` = '$EditDescription', `difficulty` = '$EditDifficulty', `link` = '$EditLink' WHERE `challenges`.`id` = $EditID";
    $Result = mysqli_query($conn, $MySQLQuery);

    // Check if the query was successful
    if ($Result) {
        // Redirect back to index.php after edit
        header('Location: ../../index.php');
        exit();
    } else {
        echo "Error editing user: $MySQLQuery" . mysqli_error($conn);
    }
}

// Close the database connection when you are done.
mysqli_close($conn);
?>
