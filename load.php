<?php
    $files = array();
    $username = "root";
    $server = "localhost";
    $dbname = "login";
    $password = "";

    $conn = new mysqli($server, $username, $password, $dbname);
    if($conn->connect_error)
        die("<script>alert('Some problem occured loading the downloadable contents. Please refresh or contact admin');</script>");

    $sql = "SELECT * FROM files";
    $result = $conn->query($sql);
    echo "<table>";
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $txt = '<tr><td><h3 style="margin-bottom: 0">'.$row["file"].'</h3><p style="margin-top: 0.5%">Details: '.$row["description"].'</p></td>';
            $txt = $txt.'<td><button onclick="my(\''.$row["file"].'\')">Download</button></td></tr>';
            echo $txt;
        }
    }
    echo "</table>";
?>