<?php
require_once('dbConnect.php'); // Using database connection file here
$idForCar = $_GET['carID']; // get id through query string
$sqlForCarDeletion = "DELETE FROM car WHERE car_id = '$idForCar'";
$resultBooking = mysqli_query($conn, $sqlForCarDeletion);
if($resultBooking)
{
    // mysqli_close($conn); // Close connection
    header("location:adminPanel.php"); // redirects to all records page
    // exit;	
    // echo $id;
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
