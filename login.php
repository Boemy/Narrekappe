<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Styles/styles.css">
    <title>Login</title>
</head>
<body>
    <h2>Login Page</h2>
    <form method='post' action='Scripts/LoginSession.php'>
        Username: <input type="text" id="AdminUsername" name="AdminUsername" required><br>
        Password: <input type="password" id="AdminPassword" name="AdminPassword" required><br>
        <input type='submit' value='Login'>
    </form>
</body>
</html>