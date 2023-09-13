<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link for adding icon-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
    <center>
        <fieldset>
            <legend>Home Page</legend>
            <form method="post" action="main.php">
                <table>
                    <tr>
                    <td><input type="submit" name="services" value="Services"></td>

                    <td><input type="submit" name="gallery" value="Gallery"></td>

                    <td><input type="submit" name="research" value="Research"></td>

                    <td><input type="submit" name="login" value="Login/SignUp"></td>

                </table>
                //videos/slideshow given here 

                <hr>
            </form>
            <form style = "text-align:left">
            <h2>About Us</h2>
            <fieldset style = "width:200px; height:100px" >

                <!--Write About us-->

            </fieldset>
            <br>
            <tr>
            <td><input style = "width:150px; height:50px" type="submit" name="appoinment" value="Take Appoinment"></td></tr><hr>
            </form>

            <!-- Here is the icon-->
            <form style = "text-align:left">
            <i class="fab fa-facebook-f"></i> <!-- Facebook icon -->
            <i class="fab fa-instagram"></i> <!-- Instagram icon -->
            <i class="fab fa-linkedin-in"></i> <!-- LinkedIn icon -->
            
            <h5>Address:<i><!--Address--></i></h5>
            <h5>Emal:<i><!--Email--></i>
            <h5> Phone:<!--Phone number--></h5>

            </form>
        </fieldset>
    </center>
</body>
</html>

<?php
if(isset($_POST['login']))
{
    header("location: login_panel.php");
}

?>