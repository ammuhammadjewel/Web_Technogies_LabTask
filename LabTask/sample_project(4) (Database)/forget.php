<?php
    session_start();
    if(isset($_SESSION['password'])) {
        header("location: userhome.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <center>
        <fieldset>
            <legend>Forgot Password</legend>
            <form method="post" action="forget.php">
                <table>
                    <tr>
                        <td>Enter User Name:
                            <input type="text" name="uname" placeholder="Please enter your user name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Enter your Email:
                            <input type="email" name="email" placeholder="Please enter your Email" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Enter your Phone:
                            <input type="tel" name="number" placeholder="Please enter your phone number" required>
                        </td>
                    </tr>
                </table>
                <input type="submit" name="signup" value="Continue">
            </form>
            <?php
                if(isset($_POST['signup'])) {
                    $db = mysqli_connect("localhost", "root", "", "sample_project");
                    $uname = $_POST['uname'];
                    $email = $_POST['email'];
                    $number = $_POST['number'];

                    if($uname && $email && $number) {
                        $sql = "SELECT password FROM user WHERE uname = '$uname' AND email = '$email' AND phone = '$number'";
                        $result = mysqli_query($db, $sql);

                        if(mysqli_num_rows($result) == 1) {
                            $row = mysqli_fetch_assoc($result);
                            $_SESSION['password'] = $row['password'];
                            header("location: userhome.php");
                            exit();
                        } else {
                            echo "<p>Incorrect username, email, or phone number. Please try again.</p>";
                        }
                    }
                }
            ?>

            <br>
            <form method="post" action="forget.php">
                <input type="submit" name="back" value="Back">
            </form>
        </fieldset>
    </center>
</body>
</html>

<?php
    if(isset($_POST['back']))
    {
    header ("location: login.php");
    }
?>