<?php
session_start();

require_once('dbConnect.php'); // Using database connection file here

$car_id = $_GET['car_id']; // get car_id through query string
$customer_id = $_SESSION['customer_id'];
$query_updating_status = "UPDATE car SET car_status = 'booked' WHERE car.car_id = '$car_id'";
$query_inserting_booking = "INSERT INTO booking VALUES( default, default, '$customer_id', '$car_id' )";
$result1 = mysqli_query($conn, $query_updating_status);
$result2 = mysqli_query($conn, $query_inserting_booking);

if ($result1 & $result2){
    echo "<script>alert('Booking Successful'); window.location.href='userpanel.php';</script>";
}
else{
    echo "<script>alert('Booking Failed'); window.location.href='userpanel.php';</script>";
}
    