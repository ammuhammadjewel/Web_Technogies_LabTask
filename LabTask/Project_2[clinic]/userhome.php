<?php
    session_start();
    if(!isset($_SESSION['password'])) {
        header("location: login.php");
        exit();
    }
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
</body>
</html>
