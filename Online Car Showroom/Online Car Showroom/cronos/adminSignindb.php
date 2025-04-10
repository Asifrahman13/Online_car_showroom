<?php
	session_start();

	// first of all, we need to connect to the database
	require_once('dbConnect.php');

	// we need to check if the input in the form textfields are not empty
	if (isset($_POST['admin_name']) && isset($_POST['pass'])) {
		// write the query to check if this username and password exists in our database
		$u = $_POST['admin_name'];
		$p = $_POST['pass'];
		$sql = "SELECT * FROM admin WHERE admin_name = '$u' AND password = '$p'";

		//Execute the query 
		$result = mysqli_query($conn, $sql);

		$numrows = mysqli_num_rows($result);


		//check if it returns an empty set
		if ($numrows != 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$dbAdminName = $row['admin_name'];
				$dbAdminPass = $row['password'];
			}


			if ($u == $dbAdminName && $p == $dbAdminPass) {

				$_SESSION['adminName'] = $dbAdminName;
				/* Redirect browser */
				header("Location: adminPanel.php");
			}
		} else {
		
			require_once "adminSignin.php";
			echo "<p class='text-center'>Wrong Password</p> ";

		}
	}
	?> 