<?php
session_start();

require_once('dbConnect.php'); // Using database connection file here

$carId = $_GET['carID']; // get id through query string
$cusID = $_SESSION['cusID'];


$sqlForUpdatingStatus = "UPDATE car SET car_status = 'booked' WHERE car.car_id = '$carId'";
$sqlForBooking = "INSERT INTO booking VALUES( default, default, '$cusID', '$carId' )";


$resultBooking1 = mysqli_query($conn, $sqlForUpdatingStatus);  // Executing the query
$resultBooking2 = mysqli_query($conn, $sqlForBooking);  // Executing the query

if ($resultBooking1 & $resultBooking2){  // If the query is executed successfully
    echo "<script>alert('Booking Successful'); window.location.href='userpanel.php';</script>";

}
else{  // If the query fails
    echo "<script>alert('Booking Failed'); window.location.href='userpanel.php';</script>";
}