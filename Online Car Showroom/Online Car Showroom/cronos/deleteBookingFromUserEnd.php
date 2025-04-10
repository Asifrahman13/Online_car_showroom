<?php

require_once('dbConnect.php'); // Using database connection file here
$idForBooking = $_GET['bookingID']; // get id through query string
$carId = $_GET['carID'];
$sqlForBookingDeletion = "DELETE FROM booking WHERE order_id = '$idForBooking'";
$sqlForUpdatingStatus = "UPDATE car SET car_status = 'not-booked' WHERE car.car_id = '$carId'";

$resultBooking1 = mysqli_query($conn, $sqlForBookingDeletion);  // Executing the query
$resultBooking2 = mysqli_query($conn, $sqlForUpdatingStatus);  // Executing the query


if($resultBooking1 & $resultBooking2)  // If the query is executed successfully
{
    // mysqli_close($conn); // Close connection
    header("location:userBooking.php"); // redirects to all records page
}
else  // If the query fails
{
    echo "Error deleting record"; // display error message if not delete
}
