<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

<h1>Database Query Check</h1>

<?php
    include('Database/DB_Connection.php');

    // Display student data
    if ($DBConnectionStatus === "Connected successfully") {
        // Perform a SELECT query
        $query = "SELECT id, username FROM student";
        $result = $conn->query($query);

        // Check if the query was successful
        if ($result) {
            echo "<h2>Student Data</h2>";
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Username</th></tr>";

            // Fetch and display the results
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['id']}</td><td>{$row['username']}</td></tr>";
            }

            echo "</table>";
        } else {
            echo "Error executing SELECT query: " . $conn->error;
        }
    }

    // Close the database connection when you are done.
    $conn->close();
?>

</body>
</html>