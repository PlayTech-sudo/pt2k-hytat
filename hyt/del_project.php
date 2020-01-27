<?php
session_start();
	// ob_start(ob_gzhandler);
	$title = "User Management";
	$acc_code = "A02";
	
	require "functions/dbconn.php";
	require "functions/dbfunc.php";

if(isset($_GET['delproj'])){
	$id = $_GET['delproj'];
	$sql = "DELETE FROM project WHERE proj_id = '$id'";
	if (mysqli_query($conn, $sql)) {
		$message = "Project Deleted Successfully";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header('location:addproject.php');

	} else {
	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}

?>