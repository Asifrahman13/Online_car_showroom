<?php
// first of all, we need to connect to the database
require_once('dbConnect.php');

// we need to check if the input in the form textfields are not empty
if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['city']) && isset($_POST['address']) && isset($_POST['phone_number']) && isset($_POST['email']) && isset($_POST['pass'])) {
	// write the query to check if this username and password exists in our database
	$fn = $_POST['fname'];
	$ln = $_POST['lname'];
	$c = $_POST['city'];
	$ad = $_POST['address'];
	$pn = $_POST['phone_number'];
	$em = $_POST['email'];
	$ps = $_POST['pass'];
	$chck = "SELECT  * from customer where email='$em'";
	$result = mysqli_query($conn, $chck);
	$resultcount = mysqli_num_rows($result);
	if ($resultcount > 0) {

		echo "user already signed up";
	} else {
		$sql = " INSERT INTO  customer VALUES( Default,'$fn', '$ln', '$c', '$ad', '$pn', '$em','$ps' )";

		//Execute the query 
		$result = mysqli_query($conn, $sql);

		//check if this insertion is happening in the database
		if (mysqli_affected_rows($conn)) {

			header("Location: userSignin.php");
		} else {
			echo "Insertion Failed";
			header("Location: userSignup.php");
		}
	}
}