<!-- The Challenges In Use Modal -->
<div id="challengesInUseModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close" onclick="closeChallengesInUseModal()">&times;</span>
        <h2>Challenges In Use</h2>
        
        <?php
          include('Database/Database_Connection.php');

          // Retrieve challengeID from the GET request
          $challengeID = 1;
    
          if ($challengeID) {
              // Perform the MySQL query to get challenges in use and associated usernames
              $MySQLQuery = "SELECT ci.id, c.name, u.username, ci.victim_ip, ci.victim_password, ci.time_created 
                          FROM challenges_in_use ci
                          JOIN challenges c ON ci.challengeID = c.id
                          JOIN student u ON ci.studentID = u.id";

              $Result = mysqli_query($conn, $MySQLQuery);

              if ($Result) {
                  echo "<table border='1'>";
                  echo "<tr><th>ID</th><th>Challenge Name</th><th>Student Name</th><th>Victim IP</th><th>Victim Password</th><th>Time Created</th></tr>";

                  // Output data of each row
                  while ($row = mysqli_fetch_assoc($Result)) {
                      echo "<tr>";
                      echo "<td>" . $row["id"] . "</td>";
                      echo "<td>" . $row["name"] . "</td>";
                      echo "<td>" . $row["username"] . "</td>";
                      echo "<td>" . $row["victim_ip"] . "</td>";
                      echo "<td>" . $row["victim_password"] . "</td>";
                      echo "<td>" . $row["time_created"] . "</td>";
                      echo "</tr>";
                  }
                  echo "</table>";
              } else {
                  echo "Error: " . mysqli_error($conn);
              }
          } else {
              echo "Invalid challenge ID.";
          }
        ?>
    </div>
</div>

<script>
    // Open the challenges in use modal with the specified ID
    function openChallengesInUseModal() {
      document.getElementById('challengesInUseModal').style.display = 'block';
    }

    // Close the challenges in use modal
    function closeChallengesInUseModal() {
      document.getElementById('challengesInUseModal').style.display = 'none';
    }
</script>
