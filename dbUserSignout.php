<?php 
session_start();
unset($_SESSION['email']);
session_destroy();
header("location:userSigninPage.php");
mysqli_close($conn);
?>