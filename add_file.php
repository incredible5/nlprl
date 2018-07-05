<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "login";
	$filename = $_GET["file"];
	$description = $_GET["description"];

	$conn = new mysqli($server, $username, $password, $dbname);
	if($conn->connect_error)
		die("<script>alert('Could not connect to the database');window.location.assign('admin.php');</script>");

	$sql = 'SELECT file FROM files WHERE file like "'.$filename.'"';
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
			if($row["file"] == $filename)
				die("<script>alert('File is already present on the server!');window.location.assign('admin.php');</script>");
	}
	else
	{
		echo $filename;
		$sql = "INSERT INTO files (file, description)
				VALUES ('$filename', '$description')";
		if($conn->query($sql) == true)
			die("<script>alert('File link added to the database successfuly');window.location.assign('admin.php');</script>");
		else
			die("<script>alert('Could not add the file. Please try again or contact the webmaster');window.location.assign('admin.php');</script>");
	}
?>