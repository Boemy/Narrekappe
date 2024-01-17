<?php
    include('Database/Database_Connection.php');
    include('Styles/EditChallenge_popup.php');
    include('Styles/DeleteChallenge_popup.php'); 
    include('Styles/GetChallengesInUse_popup.php'); 
    

    // Define the MySQL Query that needs to be ran
    $MySQLQuery = "SELECT * FROM `challenges`";

    // Perform the query and save the results in a variable
    $Result = mysqli_query($conn, $MySQLQuery);

    if (mysqli_num_rows($Result) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Name</th><th>Description</th><th>Difficulty</th><th>Link</th><th>Action</th></tr>";

        // Output data of each row
        while($row = mysqli_fetch_assoc($Result)) {
            echo "<tr>";
            echo "<td>" . $row["id"]. "</td>";
            echo "<td>" . $row["name"]. "</td>";
            echo "<td>" . $row["description"]. "</td>";
            echo "<td>" . $row["difficulty"]. "</td>";
            echo "<td>" . $row["link"]. "</td>";
            echo "<td><button onclick='openEditModal_2(" . $row["id"] . ", \"" . $row["name"] . "\", \"" . $row["description"] . "\", \"" . $row["difficulty"] . "\", \"" . $row["link"] . "\")'>Edit</button><button onclick='openDeleteModal_2(" . $row["id"] . ")'>Delete</button></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close the database connection when you are done.
    mysqli_close($conn);
?>