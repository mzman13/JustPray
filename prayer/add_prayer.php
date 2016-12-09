<?php
	
	include '../db_connect.php';
	$db = open();
	$name = $_POST['name'];
	$message = $_POST['message'];
	$sql = "INSERT INTO prayers (prayer, user) VALUES ('$message', '$name')";
	if ($db->query($sql) === TRUE) {
		  echo "New record created successfully<br>";
	} else {
			trigger_error('query error'.$db->error);
		  echo "Error: ".$db->error;
	}
	
	$db->close();
	echo "done";
	header("Location: ./prayer.php");
	
?>