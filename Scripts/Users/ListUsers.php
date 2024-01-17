<?php
    include('Database/Database_Connection.php');
    include('Styles/EditUser_popup.php');
    include('Styles/DeleteUser_popup.php'); 

    // Define the MySQL Query that needs to be ran
    $MySQLQuery = "SELECT * FROM `student`";

    // Perform the query and save the results in a variable
    $Result = mysqli_query($conn, $MySQLQuery);

    if (mysqli_num_rows($Result) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Username</th><th>Password</th><th>Action</th></tr>";

        // Output data of each row
        while($row = mysqli_fetch_assoc($Result)) {
            echo "<tr>";
            echo "<td>" . $row["id"]. "</td>";
            echo "<td>" . $row["username"]. "</td>";
            echo "<td>" . $row["password"]. "</td>";
            echo "<td><button onclick='openEditModal_1(" . $row["id"] . ", \"" . $row["username"] . "\", \"" . $row["password"] . "\")'>Edit</button><button onclick='openDeleteModal_1(" . $row["id"] . ")'>Delete</button></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close the database connection when you are done.
    mysqli_close($conn);
?>
