<?php
// first of all, we need to connect to the database
session_start();
require_once('dbConnect.php');
$customer_id = $_SESSION['customer_id'];

// we need to check if the input in the form textfields are not empty
if(isset($_POST['feedback_message'])){
	// write the query to check if this username and password exists in our database
	$feedback_message = $_POST['feedback_message'];
	$feedback_title = $_POST['feedback_title'];
	$query_inserting_feedback = " INSERT INTO feedback VALUES( default, '$feedback_title', default, '$feedback_message', '$customer_id')";
	
	//Execute the query 
	$result = mysqli_query($conn, $query_inserting_feedback);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
        
        echo "<script>alert('Submitted Successfully'); window.location.href='userpanel.php';</script>";
	}
	else{
		echo "<script>alert('Submission Failed'); window.location.href='userFeedback.php';</script>";
	}
	
}
