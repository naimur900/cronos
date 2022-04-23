<?php

// require_once('dbConnect.php'); // Using database connection file here
// $purchase_id = $_GET['purchase_id']; // get id through query string
// $parts_id = $_GET['parts_id'];
// $query_inserting_purDeletion = "DELETE FROM purchase WHERE purchase_id = '$purchase_id'";
// $query_updating_status = "UPDATE car SET car_status = 'not-booked' WHERE car.car_id = '$car_id'";

// $resultBooking1 = mysqli_query($conn, $query_inserting_bookingDeletion);
// $resultBooking2 = mysqli_query($conn, $query_updating_status);

if($resultBooking1 & $resultBooking2)
{
    header("location:userBooking.php"); // redirects to all records page
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
