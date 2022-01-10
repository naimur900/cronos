<?php 
session_start();
unset($_SESSION['admin_name']);
session_destroy();
header("location:adminSignin.php");
mysqli_close($conn);