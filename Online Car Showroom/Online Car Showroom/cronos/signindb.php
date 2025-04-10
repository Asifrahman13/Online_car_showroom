 <?php
	session_start();
	// first of all, we need to connect to the database
	require_once('dbConnect.php');

	// we need to check if the input in the form textfields are not empty
	if (isset($_POST['email']) && isset($_POST['pass'])) {
		// write the query to check if this username and password exists in our database
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$sql = "SELECT * FROM customer WHERE email = '$email' AND password = '$pass'";
		//Execute the quer
		$result = mysqli_query($conn, $sql);
		$numrows = mysqli_num_rows($result);

		//check if it returns an empty set

		if ($numrows != 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$dbuseremail = $row['email'];
				$dbpass = $row['password'];
				$dbusername = $row['last_name'];
				$dbCusID = $row['customer_id'];
				$dbfirstName = $row['first_name'];
			}


			if ($email == $dbuseremail && $pass == $dbpass) {

				$_SESSION['name'] = $dbusername;
				$_SESSION['email'] = $dbuseremail;
				$_SESSION['cusID'] = $dbCusID;
				$_SESSION['firstName'] = $dbfirstName;

				/* Redirect browser */
				header("Location: userPanel.php");
			}

			
		} else {
			require_once "userSignin.php";
			echo "<p class='text-center'>Wrong Password</p> ";
		}
	}
	?>