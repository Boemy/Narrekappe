<?php
include('../../Database/Database_Connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $NewUsername = mysqli_real_escape_string($conn, $_POST['username']);
    $NewPassword = $_POST['password'];

    // Generate a random salt
    $salt = bin2hex(random_bytes(16));

    // Concatenate the password with the salt and hash it
    $hashedPassword = password_hash($NewPassword . $salt, PASSWORD_BCRYPT);

    // Perform the MySQL query to create a new user
    $MySQLQuery = "INSERT INTO student (`username`, `password`) VALUES ('$NewUsername', '$hashedPassword')";
    $Result = mysqli_query($conn, $MySQLQuery);

    // Check if the query was successful
    if ($Result) {
        // Redirect back to index.php after user creation
        header('Location: ../../index.php');
        exit();
    } else {
        echo "Error creating new user: " . mysqli_error($conn);
    }
}

// Close the database connection when you are done.
mysqli_close($conn);
?>
