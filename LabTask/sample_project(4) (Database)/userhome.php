<?php
    session_start();
    if(!isset($_SESSION['password'])) {
        header("location: login.php");
        exit();
    }

    // Add code to reset the session variable if needed here
    // For example, if you have a database query result, you can reset the password session like this:
    // $_SESSION['password'] = null;

    // Code for resetting the session variable should be added before this point.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home</title>
</head>
<body>
    <center>
        <fieldset>
            <legend>User Home</legend>

            <?php
                echo "Password: ".$_SESSION['password'];
            ?>

            <br>
            <a href="login.php">Okay</a>

        </fieldset>
    </center>
    <?php
// Code to display the result
// ...

// Reset the session variable
$_SESSION['password'] = null;
?>

</body>
</html>
