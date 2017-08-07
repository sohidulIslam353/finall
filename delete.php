<?php
	require_once 'common/db.php';
	$id=$_GET['id'];
	
	$query = "DELETE FROM employee WHERE employeeid = '$id'";
	$result = mysqli_query($connect, $query);
	
	header("Location: allemployee.php");
?>