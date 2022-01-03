<?php

require_once('dbConnect.php'); // Using database connection file here
$idForBooking = $_GET['bookingID']; // get id through query string
$carId = $_GET['carID'];
$sqlForBookingDeletion = "DELETE FROM booking WHERE order_id = '$idForBooking'";
$sqlForUpdatingStatus = "UPDATE car SET car_status = 'not-booked' WHERE car.car_id = '$carId'";

$resultBooking1 = mysqli_query($conn, $sqlForBookingDeletion);
$resultBooking2 = mysqli_query($conn, $sqlForUpdatingStatus);

if(mysqli_affected_rows($conn)>0)
{
    // mysqli_close($conn); // Close connection
    header("location:userBooking.php"); // redirects to all records page
    exit;	
    // echo $id;
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
