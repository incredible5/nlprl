<?php
	$email = $_GET["email"];
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "login";

	$conn = new mysqli($server, $username, $password, $dbname);
	if($conn->connect_error)
		die("<script>alert('Could not connect to the database');window.location.assign('admin.php');</script>");
	$sql = 'DELETE FROM requests WHERE email="'.$email.'"';
	if($conn->query($sql) == true)
		die("<script>alert('Request declined successfully');window.location.assign('admin.php');</script>");
	else
		die("<script>alert('Could not remove the user from database');window.location.assign('admin.php');</script>");
?>