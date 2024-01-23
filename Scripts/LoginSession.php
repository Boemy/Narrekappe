<?php
    session_start(); // Start the session

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include('../Database/Database_Connection.php');

        // Retrieve user input from the form
        $inputUsername = mysqli_real_escape_string($conn, $_POST['AdminUsername']);
        $inputPassword = mysqli_real_escape_string($conn, $_POST['AdminPassword']);

        // Perform the MySQL query to check if the username and password are correct
        $userQuery = "SELECT * FROM `admin` WHERE `username` = '$inputUsername'";
        $userResult = mysqli_query($conn, $userQuery);

        if ($userResult && mysqli_num_rows($userResult) > 0) {
            // User found, check the password
            $userRow = mysqli_fetch_assoc($userResult);
            $storedPassword = $userRow['password'];

            // Use password_verify to check if the input password matches the stored hashed password
            if ($inputPassword == $storedPassword) {
                // Password is correct, set the username and ID in the session
                $_SESSION["username"] = $inputUsername;
                $_SESSION["adminID"] = $userRow['id'];

                // Fetch admin rights based on adminID
                $adminID = $_SESSION["adminID"];
                $rightsQuery = "SELECT `rights` FROM `admin_rights` WHERE `adminID` = '$adminID'";
                $rightsResult = mysqli_query($conn, $rightsQuery);

                if ($rightsResult && mysqli_num_rows($rightsResult) > 0) {
                    $rightsRow = mysqli_fetch_assoc($rightsResult);
                    $_SESSION['AdminRights'] = $rightsRow['rights'];

                    // Redirect based on admin rights
                    if ($_SESSION['AdminRights'] == "CRUD") {
                        header('Location: ../index.php');
                        exit();
                    } elseif ($_SESSION['AdminRights'] == "Monitoring") {
                        header('Location: ../monitoring.php');
                        exit();
                    } else {
                        echo "Unknown admin rights.";
                    }
                } else {
                    echo "Admin rights not found.";
                }
            } else {
                // Incorrect password
                echo "Incorrect password.";
            }
        } else {
            // User not found
            echo "User not found.";
        }
    }
    
    // Check if the user is not logged in, redirect to login.php
    if (!isset($_SESSION["username"])) {
        header('Location: login.php');
        exit();
    }
?>
