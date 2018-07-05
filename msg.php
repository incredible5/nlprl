<?php
    $source = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
		if(!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/",$_POST['name']))
		{
			$source = "name";
			echo "<script>alert('Inavlid Name!');</script>";
		}
		if(!preg_match("/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/",$_POST['email']))
        {
        	echo "<script>alert('Inavlid email!');</script>";
            $source = "email";
        }
		if($source == "")
		{
            $email = $_POST["email"];
            $name = $_POST["name"];
            $sub = $_POST["sub"];
            $msg = $_POST["msg"];
            $server = "localhost";
            $username = "root";
            $dbname = "login";
            $conn = new mysqli($server, $username, "", $dbname);
            if($conn->connect_error)
                die("Some error occured! Please try again");

            $sql = "INSERT INTO MESSAGES (name, email, subject, message)
                    VALUES ('$name', '$email', '$sub', '$msg')";
            if($conn->query($sql) == true)
                $source = "";
            else
                die("Some error occurred, please try again");
            echo "<script>window.location='contact.php';alert('Message sent and stored');</script>";
        }
    }
?>