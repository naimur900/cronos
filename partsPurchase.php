<?php
session_start();

require_once('dbConnect.php'); // Using database connection file here

$parts_id = $_GET['parts_id']; // get car_id through query string
$customer_id = $_SESSION['customer_id'];
// $query_updating_status = "UPDATE car SET car_status = 'booked' WHERE car.car_id = '$car_id'";
$query_inserting_purchase = "INSERT INTO purchase VALUES( default, default, '$customer_id', '$parts_id' )";
// $result1 = mysqli_query($conn, $query_updating_status);
$result = mysqli_query($conn, $query_inserting_purchase);

if ($result){
    echo "<script>alert('Purchase Successful'); window.location.href='customization.php';</script>";
}
else{
    echo "<script>alert('Purchase Failed'); window.location.href='customization.php';</script>";
}
    