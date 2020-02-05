<?php
session_start();
	// ob_start(ob_gzhandler);
	$title = "User Management";
	$acc_code = "A02";
	
	require "functions/dbconn.php";
	require "functions/dbfunc.php";

if(isset($_GET['delcustomer'])){
	$id = $_GET['delcustomer'];
	$sql = "DELETE FROM custven WHERE cv_id = '$id'";
	if (mysqli_query($conn, $sql)) {
		 echo "<script type='text/javascript'>showNotification('top','right','Record Added Successfully.', 'info');</script>";
		header('location:add_customer.php');

	} else {
	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}