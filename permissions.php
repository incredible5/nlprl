<?php
    $files = array();
    $username = "root";
    $server = "localhost";
    $dbname = "login";
    $password = "";

    $conn = new mysqli($server, $username, $password, $dbname);
    if($conn->connect_error)
        die("<script>alert('Some problem occured loading the downloadable contents. Please refresh or contact webmaster');</script>");

    $sql = "SELECT * FROM checkdb";
    $result = $conn->query($sql);
    echo "<h1>Registered users</h1>";
    echo "<table>";
    echo "<tr><th><h2>Name</h2></th><th><h2>Email</h2></th><th><h2>Password</h2></th><th><h2>Mobile No.</h2></th><th><h2>Action</h2></th></tr>";
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $txt = '<tr><td><h3 style="margin-bottom: 0">'.$row["name"].'</h3></td><td><h3 style="margin-bottom: 0">'.$row["email"].'</h3></td><td><h3 style="margin-bottom: 0">'.$row["password"].'</h3></td><td><h3 style="margin-bottom: 0">'.$row["mob"].'</h3></td>';
            $txt = $txt.'<td><button onclick="del(\''.$row["email"].'\')">Delete user</button></td></tr>';
            echo $txt;
        }
    }
    else
        echo "<tr><td><h3>No User is currently registered</h3></td></tr>";
    echo "</table>";
?>