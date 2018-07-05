<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "login";
	$filename = $_GET["file"];

	$conn = new mysqli($server, $username, $password, $dbname);
	if($conn->connect_error)
		die("<script>alert('Could not connect to the database');window.location.assign('admin.php');</script>");

	$sql = 'DELETE FROM files WHERE file = "'.$filename.'"';
	if($conn->query($sql))
		die("<script>alert('File removed from database successfuly');window.location.assign('admin.php');</script>");
	else
		die("<script>alert('Error removing file from the database');window.location.assign('admin.php');</script>");
?>