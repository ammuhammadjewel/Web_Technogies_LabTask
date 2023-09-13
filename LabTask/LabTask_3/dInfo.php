



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <fieldset>
        <?php
	session_start();
	{
        //echo "donor Informatin".$_SESSION['Info'];
		echo "First Name:".$_SESSION['fname'];
		echo "<br>";
		echo "Last Name:".$_SESSION['lname'];
		echo "<br>";
		echo "Company Name:".$_SESSION['comp'];
		echo "<br>";
		echo "Address 1:".$_SESSION['addr1'];
		echo "<br>";
		echo "Address 2:".$_SESSION['addr2'];
		echo "<br>";
		echo "City Name:".$_SESSION['city'];
		echo "<br>";
        echo "Gender:".$_SESSION['gender'];
		echo "<br>";
		echo "State:".$_SESSION['state'];
		echo "<br>";
        echo "Zip Code:".$_SESSION['zcode'];
		echo "<br>";
		echo "Country Name:".$_SESSION['country'];
		echo "<br>";
        echo "Phone Number:".$_SESSION['phone'];
		echo "<br>";
		echo "Fax:".$_SESSION['fax'];
		echo "<br>";
        echo "Email:".$_SESSION['email'];
		echo "<br>";
		echo "Acknowledge Donation Name:".$_SESSION['name'];
		echo "<br>";
        echo "Acknowledge Donation to:".$_SESSION['adona'];
		echo "<br>";
		echo "Address :".$_SESSION['addr'];
		echo "<br>";
        echo "City:".$_SESSION['city2'];
		echo "<br>";
		echo "Zip:".$_SESSION['zip'];
		echo "<br>";

		
		echo "<a href='login.php'>Okay</a>";
	}
?>
        </fieldset>
    </center>
</body>
</html>