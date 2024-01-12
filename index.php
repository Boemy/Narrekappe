<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

<h1>Database Connection Status</h1>

<?php
    include('Database/DB_Connection.php');

    echo "$DBConnectionStatus";

    // Close the database connection when you are done.
    $conn->close();
?>

</body>
</html>