<?php
	$username = "root";
	$server = "localhost";
	$password = "";
	$dbname = "login";

	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		$conn = new mysqli($server, $username, $password, $dbname);
		if($conn->connect_error)
			die ("<script>alert('Could not connect to the database');</script>");
		$to_delete = $_GET["uname"];
		$sql = 'DELETE FROM checkdb WHERE email = "'.$to_delete.'"';
		// echo "<script>alert('$to_delete');</script>";

		if($conn->query($sql) === TRUE)
		{
			die("<script>window.location.assign('admin.php');alert('Record deleted successfully');</script>");
		}
		else
			die("<script>window.location.assign('admin.php');alert('Record deletion was unsuccessful');</script>");
		$conn->close();
	}
?>