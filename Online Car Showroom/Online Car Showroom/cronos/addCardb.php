<?php
// first of all, we need to connect to the database
require_once('dbConnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['cn']) && isset($_POST['md']) && isset($_POST['br']) && isset($_POST['pr']) && isset($_POST['ct']) && isset($_POST['mpg']) && isset($_POST['hp']) && isset($_POST['tr']) && isset($_POST['sc']) && isset($_POST['cl'])){
	// write the query to check if this username and password exists in our database
	$cid = $_POST['cid'];
    $cn = $_POST['cn'];
	$md = $_POST['md'];
	$br = $_POST['br'];
	$yr = $_POST['yr'];
	$pr = $_POST['pr'];
	$ct = $_POST['ct'];
	$mpg = $_POST['mpg'];
	$tt = $_POST['tt'];
	$ft = $_POST['ft'];
	$fc = $_POST['fc'];
	$hp = $_POST['hp'];
	$tr = $_POST['tr'];
	$sc = $_POST['sc'];
	$bs = $_POST['bs'];
	$cl = $_POST['cl'];
	$th = $_POST['th'];


	$sqlForCar = " INSERT INTO car VALUES( Default, '$cn', '$cid', '$md', '$br', '$yr', '$pr', '$th' ) ";
	$sqlForSpecification = " INSERT INTO specification VALUES( Default,'$ct', '$mpg', '$tt', '$ft', '$fc', '$hp','$tr','$sc','$bs','$cl','$cid' ) ";

	
	//Execute the query 
	$resultForCar = mysqli_query($conn, $sqlForCar);

	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)>0){
		//Execute the query 
		$resultForSpecification = mysqli_query($conn, $sqlForSpecification);

		if(mysqli_affected_rows($conn)){
			echo "<script>alert('Car Added Successfully'); window.location.href='adminPanel.php';</script>";
		}
	}
	
	else{
		echo "<script>alert('Car addition Failed, must insert unique car id and chessis number'); window.location.href='adminPanel.php';</script>";

	}
	
}
