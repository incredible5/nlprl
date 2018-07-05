<?php
	$name = $_GET["name"];
	$email = $_GET["email"];
	$passwd = $_GET["password"];
	$mob = $_GET["mob"];

	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "login";

	$conn = new mysqli($server, $username, $password, $dbname);
	if($conn->connect_error)
	{
		die("<script>alert('Connection to database failed');window.location.assign('admin.php');</script>");
	}

	$sql = "INSERT INTO  checkdb (name, email, password, mob)
			VALUES ('$name', '$email', '$passwd', '$mob')";

	if($conn->query($sql) == true)
	{
		$sql = 'DELETE FROM requests WHERE email="'.$email.'"';
		$conn->query($sql);
		die("<script>alert('User successfully registered');window.location.assign('admin.php');</script>");
	}
	else
	{
		die("<script>alert('Registration unsuccessful');window.location.assign('admlog.php');</script>");
	}
?>