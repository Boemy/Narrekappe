<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Page</title>
  <link rel="stylesheet" type="text/css" href="Styles/styles.css">
</head>
<body>
  <?php include('Scripts/LoginSession.php')  ?>

  <h2>Students</h2>
  <?php
    // Display a table ofION all the users
    include('Scripts/Users/ListUsers.php');

    // Include the pop-up content
    include('Styles/CreateUser_popup.php');

    // Display a button to open the pup-up
    echo "<button onclick='openModal_1()' style='margin: 4px;'>Create New User</button>";
  ?>

  <h2>Challenges</h2>
  <?php
    // Display a table of all the challenges
    include('Scripts/Challenges/ListChallenges.php');

    // Include the pop-up content
    include('Styles/CreateChallenge_popup.php');

    // Display a button to open the pup-up
    echo "<button onclick='openModal_2()' style='margin: 4px;'>Add New Challenge</button><button onclick='openChallengesInUseModal()' style='margin: 4px;'>Challenges In Use</button>";
  ?>
</body>
</html>

 