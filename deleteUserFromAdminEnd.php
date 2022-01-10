<?php
require_once('dbConnect.php'); // Using database connection file here
$idForUser = $_GET['userID']; // get id through query string
// $idForBooking = $_GET['booking_id']; // get id through query string
$query_updating_status = "UPDATE car, booking SET car_status='not-booked' WHERE booking.customer_id = '$idForUser'";
$sqlForUser = "DELETE FROM customer WHERE customer.customer_id = '$idForUser'";
// $query_inserting_booking = "DELETE FROM booking WHERE order_id = '$idForBooking'";
// $query_inserting_car = "DELETE FROM car WHERE car_id = '$car_id'";


$resultUser1 = mysqli_query($conn, $query_updating_status);
$resultUser2 = mysqli_query($conn, $sqlForUser);
// $resultBooking = mysqli_query($conn, $query_inserting_booking);
// $resultCar = mysqli_query($conn, $query_inserting_car);

if($resultUser1 & $resultUser2)
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
