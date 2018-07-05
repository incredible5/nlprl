<?php
    $source = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
		if(!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/",$_POST['name']))
		{
			$source = "name";
		}
		if(!preg_match("/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/",$_POST['email']))
        {
            $source = "email";
        }
		if($_POST['pass1'] != $_POST['pass2'])
        {
        	$source = "pass";
        }
		if($source == "")
		{
            $email = $_POST["email"];
            $passwd = $_POST['pass1'];
            $server = "localhost";
            $username = "root";
            $dbname = "login";
            $conn = new mysqli($server, $username, "", $dbname);
            if($conn->connect_error)
                die("Some error occured! Please try again");

            $sql = "SELECT username FROM CHECKDB";
            $result = $conn->query($sql);
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                    if($email == $row['username'])
                    {
                        die("<script>window.location='register.php';alert('The email id is already registered. Try with a different one');</script>");
                    }
            }

            $sql = "INSERT INTO CHECKDB (username, password)
                    VALUES ('$email', '$passwd')";
            if($conn->query($sql) == true)
            {
                $source = "";
                echo "<script>window.location='sign.php';alert('Successfully Registered. Now Sign In to continue');</script>";
            }
            else
                die("Some error occurred during registration, please try again");
        }
    }
?>