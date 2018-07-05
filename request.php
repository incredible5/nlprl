<?php
        if(!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/",$_POST['name']))
            {
                die("<script>alert('Invalid username');window.location.assign('register.php');</script>");            }
            if($_POST['pass1'] != $_POST['pass2'])
            {
                die("<script>alert('Passwords did not match');window.location.assign('register.php');</script>");
            }
            if(!preg_match("/^[6-9]\d{9}$/",$_POST['mob']))
            {
                die("<script>alert('Invalid mobile number');window.location.assign('register.php');</script>");
            }

		$server = "localhost";
		$username = "root";
		$password = "";
		$dbname = "login";

		$name = $_POST['name'];
		$email = $_POST['email'];
		$passwd = $_POST['pass1'];
		$mob = $_POST['mob'];

		$conn = new mysqli($server, $username, $password, $dbname);
		if($conn->connect_error)
        {
			die("<script>alert('Cannot connect, please try again');window.location.assign('register.php');</script>");
        }
		$sql = "SELECT username FROM checkdb";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
        	while($row = $result->fetch_assoc())
            	if($email == $row['username'])
                {
                	die("<script>alert('The email Id is already registered');window.location.assign('register.php');</script>");
                }
        }

        $sql = "SELECT email FROM requests";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
        	while($row = $result->fetch_assoc())
            	if($email == $row['email'])
                {
                	die("<script>alert('This email Id has already been requested');window.location.assign('register.php');</script>");
                }
        }

        $sql = "INSERT INTO requests (name, email, password, mob)
                    VALUES ('$name', '$email', '$passwd', '$mob')";
        if($conn->query($sql) == true)
        {
            die("<script>alert('Your request has been sent. Now please wait till it is accepted');window.location.assign('register.php');</script>");
        }
        else
        {
        	die("<script>alert('Some error occurred. Please try again');window.location.assign('register.php');</script>");
        }
?>