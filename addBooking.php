<?php
session_start();

require_once('dbConnect.php'); // Using database connection file here

$carId = $_GET['carID']; // get id through query string
$cusID = $_SESSION['cusID'];
$sqlForUpdatingStatus = "UPDATE car SET car_status = 'booked' WHERE car.car_id = '$carId'";
$sqlForBooking = "INSERT INTO booking VALUES( default, default, '$cusID', '$carId' )";
$resultBooking1 = mysqli_query($conn, $sqlForUpdatingStatus);
$resultBooking2 = mysqli_query($conn, $sqlForBooking);


if (mysqli_affected_rows($conn) == 0){
    echo "<script>alert('Booking Failed'); window.location.href='userpanel.php';</script>";
}
else if(mysqli_affected_rows($conn) > 0) {
    echo "<script>alert('Booking Successful'); window.location.href='userpanel.php';</script>";
}
    