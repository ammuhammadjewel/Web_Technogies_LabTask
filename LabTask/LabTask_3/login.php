<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
</head>
<body>
<center>
    <fieldset>
        <legend><i>Login Page</i></legend>
        <form method = "post" action ="login.php">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username"> </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="login" value="Login"></td>
                    <td><input type="submit" name="registration" value="New user?"></td>
                </tr>
                <tr>
                    <td><td><input type="submit" name="donor" value="New Registration"></td></td>
                </tr>
            </table>
        </form>
    </fieldset>
</center>
<?php
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username =='Jewel' && $password =='bbb')
        {
            session_start();
            $_SESSION['username']= $username;
       
           
            header("location: home.php");
        }
        else
        {
            echo "password" ;
        }
       
    }
?>
</body>
</html>
<?php
    if(isset($_POST['registration']))
    {
        header("location: registration.php");
       
    }

    /// Donor Inforfation
    if(isset($_POST["donor"]))
    {
        header("location: donor.php");
    }
?>
