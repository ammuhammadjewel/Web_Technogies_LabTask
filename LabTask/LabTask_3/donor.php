<?php
    if(isset($_POST['signup']))
	{
		//echo "Registration successfull";
		session_start();
        //$dInfo = $_POST['dInfo'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$comp = $_POST['comp'];
		$addr1 = $_POST['addr1'];
		$addr2 = $_POST['addr2'];
		$city = $_POST['city'];
        $gender = $_POST['gender'];
		$state = $_POST['state'];
		$zcode = $_POST['zcode'];
		$country = $_POST['country'];
        $phone = $_POST['phone'];
		$fax = $_POST['fax'];
		$email = $_POST['email'];
		
        $name = $_POST['name'];
		$adona = $_POST['adona'];
		$addr = $_POST['addr'];
		$city2 = $_POST['city2'];
		$zip = $_POST['zip'];

        {
			//database query
            //$_SESSION['dInfo'] = $dInfo;
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			$_SESSION['comp'] = $comp;
            $_SESSION['addr1'] = $addr1;
			$_SESSION['addr2'] = $addr2;
			$_SESSION['addr2'] = $city;
            $_SESSION['city'] = $city;
            $_SESSION['gender'] = $gender;
			$_SESSION['state'] = $state;
            $_SESSION['zcode'] = $zcode;
            $_SESSION['country'] = $country;
            $_SESSION['phone'] = $phone;
            $_SESSION['fax'] = $fax;
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            $_SESSION['adona'] = $adona;
            $_SESSION['addr'] = $addr;
            $_SESSION['city2'] = $city2;
            $_SESSION['zip'] = $zip;
            $_SESSION['comm'] = $comm;

            header("location:dInfo.php");
		}
    }
?>
<?php
	if(isset($_POST['back']))
	{
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration From</title>
</head>
<body>
    <style>
        h3{
            color:red;
            text-align: left;
        }
        button{
            text-align:center;
        }
    </style>


    <center>
        <fieldset>
            <legend style="color:blue">Registration Information</legend>
            <form method = "post" action ="donor.php">
                <table>
                    <tr><td>
                    <h3 name = "dInfo" >Donor Information</h3></td></tr>
                    <tr>
                        <td><b>First Name* </b></td>
                        <td><input type="text" name="fname">
                    </tr>
                    <tr>
                        <td><b>Last Name* </b></td>
                        <td><input type="text" name="lname" >
                    </tr>
                    <tr>
                        <td><b>Company </b></td>
                        <td><input type="text" name="comp">
                    </tr>
                    <tr>
                        <td><b>Address 1* </b></td>
                        <td><input type="address" name="addr1">
                    </tr>
                    <tr>
                        <td><b>Address 2 </b></td>
                        <td><input type="address" name="addr2">
                    </tr>
                    <tr>
                        <td><b>City: </b></td>
                        <td><input type="text" name="city">
                    </tr>
                    <tr>
						<td>Gender:</td>
						<td>
							<input type="radio" name="gender" value="male" > Male
							<input type="radio" name="gender" value="female" > Female 
						</td>
					</tr>
                    <tr>
                    <td for="state" name="state"><b>State* </b></td>
                    <td><select>  
                        <option value="State">Select a State</option>  
                        <option value="Dhaka">Dhaka</option>  
                        <option value="Sylhet">Sylhet</option>
                        <option value="Cumilla">Cumilla</option>
                    </select></td>
                    </tr>
                    <tr>
                        <td><b>Zip Code* </b></td>
                        <td><input type="number" name="zcode">
                    </tr>
                    <tr>
                        <td for= "Country" name="country"><b>Country* </b></td>
                        <td><select>
                            <option value="Country">Select a Country</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="America">America</option>
                            <option value="Canada"> Canada</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><b>Phone </b></td>
                        <td><input type="number" name="phone"></td>
                    </tr>
                    <tr>
                        <td><b>Fax </b></td>
                        <td><input type="number" name="fax">
                    </tr>
                    <tr>
                        <td><b>Email* </b></td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td><b>Donation Amount* </b><br><sup>(Check a button or type in your <br> amount)</sup></td>
                        
                        <td>
                        <input type="radio" name="Damount" value="none"> None 
                        <input type="radio" name="Damount" value="50"> $50 
                        <input type="radio" name="Damount" value="75"> $75 
                        <input type="radio" name="Damount" value="100"> $100 
                        <input type="radio" name="Damount" value="250"> $250 
                        <input type="radio" name="Damount" value="other"> Other 
                        </td>
                    </tr>
                    <tr>
                        <td><td><b>Other Amount $ </b>
                        <input type="number" name="Oamount"></td></td>
                    </tr>
                    <tr>
                        <td><b>Recurring Donation </b><br> <sup>(Check If yes)</sup></td>
                        <td><input type="checkbox" name="Rdonation">I am interested in giving on a regular basis.</td>
                    </tr>
                    <tr>
                        <td>
                        <td>Monthly Credit Card $
                            <input type="text" name="c1" maxlength="4" size="4">
                            For
                            <input type="text" name="c2" maxlength="4" size="4">
                            Months
                        </td></td>
                    </tr>
                    <tr><td><h3>Honorarium and Memorial Donation Information</h3><br></td></tr>
                    <tr>
                        <td><b> I would like to make this <br> donation </b></td>
                        <td><input type="radio">To Honor <br>
                        <input type="radio">
                        In Memory of</td>
                    </tr>
                    <tr>
                        <td><b> Name </td></td>
                        <td><input type="text" name ="name"></td>
                    </tr>
                    <tr>
                        <td><b>Acknowledge Donation to <b></td>
                        <td><input type="text" name="adona"></td>
                    </tr>
                    <tr>
                        <td><b>Address </b></td>
                        <td><input type="address" name = "addr"></td>
                    </tr>
                    <tr>
                        <td><b>City </b></td>
                        <td><input type="text" name = "city2" ></td>
                    </tr>
                    <tr>
                        <td for="state"><b>State </b></td>
                        <td><select>
                            <option value="Select a State">Select a State</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="sylhet">Sylhet</option>
                            <option value="cumilla">Cumilla</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><b>Zip </b></td>
                        <td><input type="number" name = "zip"></td>
                    </tr>
                    <tr><td><h3>Additional Information</h3></td></tr>
                    <tr><td><sup>Please enter your name, company or organization as you would like it to appear in our publications:</sup></td></tr>
                    <tr><td><td><b>Name </b>
                    <input type="text"></td></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox">I would like my gift to reamin anonymous</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox">My employer offers a matching gift program. I will mall the matching gift form.</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox">Please save the cost of acknowledfing this gift by not malling a thank you letter.</td>
                    </tr>
                    <tr>
                        <td><b>Comments</b><br><sup>(Please type any questions or feedback here)</sup></td>
                        <td><textarea></textarea></td>
                    </tr>
                    <tr>
                        <td><b>How may we contact you? </b></td>
                        <td><input type="checkbox">E-mail <br> <input type="checkbox"> Postal Mall <br>
                            <input type="checkbox">Telephone <br> <input type="checkbox">Fax <br>
                        </td>
                    </tr>
                    <tr>
                    <td><p style="text-align:left"><sup>I would like to receive newsletters and information about special events by:</sup></td>
                    </tr>
                    <tr>
                        <td><td><input type="checkbox">E-mail <br> <input type="checkbox">Postal Mail</td></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"> I would like information about valumteering with the</td>
                    </tr>
                </table>


                <!--<button>Reset </button> <button> Continue</button>-->


                <br><input type="submit" name="signup" value="continue">
                <!--<input type="submit" name="back" value="Back">-->
            </form>
            <form method="post" action="donor.php">
            <input type="submit" name="emty" value="Reset">
            <input type="submit" name="back" value="Back">
            </form>
        </fieldset>
    </center>
</body>
</html>


