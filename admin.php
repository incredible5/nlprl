<?php
    session_start();
    if($_SESSION['user'] != "admin")
        header("location: admlog.php");
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "login";
	$req_stat = "";
	$conn = new mysqli($server, $username, $password, $dbname);
	if($conn->connect_error)
		$req_stat = "Database connect error!";
	else
	{
		$sql = "SELECT * FROM requests";
		$result = $conn->query($sql);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <link rel="icon" href="nlp.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="stylesheet" type="text/css" href="download.css">
        <link rel="stylesheet" type="text/css" href="admin.css">
	</head>
	<body>
		<div class="header">
            <img src="malviya_ji.jpg"/>
        <div class="webname">
            <a href="index.html"><h1 style="color: rgb(0, 0, 128, 0.9)">Natural Language and Processing Research Lab</h1>
            <h3 style="color: rgb(70, 70, 70)">Department of Computer Science and Engg.</h3>
            <h3 style="color: rgb(70, 70, 70)">Indian Institute of Technology (BHU), Varanasi</h3></a>
        </div>
        <div class="log-out">
        <form action="admincheck.php" method="GET">
                <input type="submit" value="Logout" />
        </form>
    </div>
        </div>
        <br>
        <br>
        <div class="container">
        	<h1>Pending Requests</h1>
        	<table>
                <tr>
                    <th><h2>Name</h2></th>
                    <th><h2>Email</h2></th>
                    <th><h2>Password</h2></th>
                    <th><h2>Mobile No.</h2></th>
                    <th><h2>Action</h2></th>
                </tr>
        		<?php
        			if($result->num_rows > 0)
        			{
        				while($row = $result->fetch_assoc())
        				{
        					echo '<tr><td><h3 style="margin-bottom: 0">'.$row["name"].'</h3></td><td><h3 style="margin-bottom: 0">'.$row["email"].'</h3></td><td><h3 style="margin-bottom: 0">'.$row["password"].'</h3></td><td><h3 style="margin-bottom: 0">'.$row["mob"].'</h3></td><td><button onclick="add_user(\''.$row["name"].','.$row["email"].','.$row["password"].','.$row["mob"].'\')">Accept</button><button onclick="cancel(\''.$row["email"].'\')">Refuse</button></td></tr>';
        				}
        			}
        			else
        				echo "<tr><td><h3>No current pending requests</h3></td></tr>";
        		?>
        	</table>
        </div>

        <div class="container" id="container">
        </div>
        <br>
        <br>
        <div class="container">
            <h1>Downloadable files</h1>
            <button class="file-btn" onclick="add_file()">Add a file</button>
            <table>
                <tr>
                    <th><h2>Name</h2></th>
                    <th><h2>Description</h2></th>
                    <th><h2>Action</h2></th>
                </tr>
                <?php
                    $sql = "SELECT * FROM files";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            echo '<tr><td><h3 style="margin-bottom: 0">'.$row["file"].'</h3></td><td><h3 style="margin-bottom: 0">'.$row["description"].'</h3></td><td><button onclick="rm_file(\''.$row["file"].'\')">Remove File</button></td></tr>';
                        }
                    }
                    else
                        echo "<tr><td><h3>No current pending requests</h3></td></tr>";
                ?>
            </table>
        </div>
        <script>
            window.onload = function()
            {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function()
                {
                    if(this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById("container").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "permissions.php", true);
                xhttp.send();
            }
            function add_user(values)
            {
            	var value = values.split(",");
            	window.location.assign("add.php?name="+value[0]+"&email="+value[1]+"&password="+value[2]+"&mob="+value[3]);
            }
            function cancel(cu)
            {
            	window.location.assign("cancel.php?email="+cu);
            }
            function del(x)
            {
            	var url = "delete.php?uname="+x;
                window.location.assign(url);
            }
            window.onpopstate = function()
            {
                alert("You are leaving this page");
            }
            function rm_file(x)
            {
                var url = "dfile.php?file="+x;
                window.location.assign(url);
            }
            function add_file()
            {
                var filename = prompt("Enter the original file name with extension. The file should be stored in the same folder as the other uploaded files are in");
                var description = prompt("Enter a brief description of the to upload")
                if(filename != null)
                    window.location.assign("add_file.php?file="+filename+"&description="+description);
            }
        </script>
        <style type="text/css">
            html
            {
                margin-bottom: 10%;
            }
        </style>
        <div class="footer" style="position: fixed; bottom: 0">
            <p>&copy Copyright: Chaitanya Maurya (2018 and Onwards). All rights reserved</p>
        </div>
	</body>
</html>