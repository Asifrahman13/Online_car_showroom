<?php
require_once('dbConnect.php'); // Using database connection file here
$idForUser = $_GET['userID']; // get id through query string
// $idForBooking = $_GET['bookingID']; // get id through query string
$sqlForUpdatingStatus = "UPDATE car, booking SET car_status='not-booked' WHERE booking.customer_id = '$idForUser'";
$sqlForUser = "DELETE FROM customer WHERE customer.customer_id = '$idForUser'";
// $sqlForBooking = "DELETE FROM booking WHERE order_id = '$idForBooking'";
// $sqlForCar = "DELETE FROM car WHERE car_id = '$idForCar'";


$resultUser1 = mysqli_query($conn, $sqlForUpdatingStatus);
$resultUser2 = mysqli_query($conn, $sqlForUser);
// $resultBooking = mysqli_query($conn, $sqlForBooking);
// $resultCar = mysqli_query($conn, $sqlForCar);

if($resultUser2)
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
