<!--reg = registration-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>
</head>
<body>
	<center>
		<fieldset>
			<form method="post" action="registration.php">
				<table>
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="fname" placeholder="Enter your first name">
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input type="text" name="lname" placeholder="Enter your last name">
					</tr>
					<tr>
						<td>User Name:</td>
						<td><input type="text" name="uname" placeholder="Enter your user name">
					</tr>
					<tr>
						<td>Gender:</td>
						<td>
							<input type="radio" name="gender" value="male" > Male
							<input type="radio" name="gender" value="female" > Female 
						</td>
					</tr>
					<tr>
						<td>Email Address:</td>
						<td><input type="email" name="email" placeholder="Enter your email" >
					</tr>
					<tr>
						<td>Phone Number:</td>
						<td><input type="tel" name="number" placeholder="Enter your phone number" >
					</tr>
					<tr>
						<td>Address:</td>
						<td><textarea name ="address" placeholder="Enter your address" ></textarea></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass1" placeholder="Enter your password" >
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input type="password" name="pass2" placeholder="Enter your password again" >
					</tr>
				</table>
				<input type="submit" name="signup" value="Signup">
				<!--<input type="submit" name="back" value="Back">-->
			</form>
<?php
	if(isset($_POST['signup']))
	{
		//echo "Registration successfull";
		session_start();
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$uname = $_POST['uname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$address = $_POST['address'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];

		header("location:regInfo.php");

		/**
		echo "First Name:".$fname;
		echo "<br>";
		echo "Last Name:".$lname;
		echo "<br>";**/
		 
		/*if($pass1 == $pass2)
		{
			//database query
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			$_SESSION['uname'] = $uname;
			$_SESSION['gender'] = $gender;
			$_SESSION['email'] = $email;
			$_SESSION['number'] = $number;
			$_SESSION['address'] = $address;
			
		}
		else
		{
			echo "<i>Password doesn't match</i>";
		}*/
	}
?>
			<br>
			<form method="post" action="registration.php">
				<input type="submit" name="back" value="Back">
			</form>
		</fieldset>
	</center>
</body>
</html>
<?php
	if(isset($_POST['back']))
	{
		header("location: login.php");
	}
?>