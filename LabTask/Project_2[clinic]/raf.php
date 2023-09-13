<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = $_POST['category'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection and query to validate the login credentials
    $servername = "your_servername";
    $database = "alpha_clinic";
    $username_db = "your_username";
    $password_db = "your_password";

    // Customize database connection details and table name based on the category
    switch ($category) {
        case 'admin':
            $table = "admin";
            break;
        case 'doctor':
            $table = "doctor";
            break;
        case 'patient':
            $table = "patient";
            break;
        case 'accountant':
            $table = "accountant";
            break;
        case 'receptionist':
            $table = "receptionist";
            break;
        case 'security_officer':
            $table = "security_officer";
            break;
        default:
            // Handle unknown or unexpected category
            break;
    }

    // Create a mysqli connection
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query to validate the login credentials
    $stmt = $conn->prepare("SELECT * FROM $table WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if login is successful
    if ($result->num_rows > 0) {
        // Redirect to the respective dashboard or information page based on the category
        switch ($category) {
            case 'admin':
                header("Location: admin.php");
                break;
            case 'doctor':
                header("Location: doctor.php");
                break;
            case 'patient':
                header("Location: patient.php");
                break;
            case 'accountant':
                header("Location: accountant.php");
                break;
            case 'receptionist':
                header("Location: receptionist.php");
                break;
            case 'security_officer':
                header("Location: security_officer.php");
                break;
            default:
                // Handle unknown or unexpected category
                break;
        }
    } else {
        $login_error = "Invalid username or password.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
        <fieldset>
            <legend>Login</legend>
            <form method="post" action="raf.php">
                <label for="category">Select Category:</label>
                <select id="category" name="category">
                    <option value="select">Select</option>
                    <option value="admin">Admin</option>
                    <option value="doctor">Doctor</option>
                    <option value="patient">Patient</option>
                    <option value="accountant">Accountant</option>
                    <option value="receptionist">Receptionist</option>
                    <option value="security_officer">Security Officer</option>
                </select>
                <br><br>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br><br>
                <input type="submit" name="login" value="Login">
            </form>
            <?php
            if (isset($login_error)) {
                echo "<p style='color: red;'>$login_error</p>";
            }
            ?>
        </fieldset>
    </center>
</body>
</html>
