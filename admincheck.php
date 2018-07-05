<?php
    session_start();
    $log = 0;
    $username = "root";
    $server = "localhost";
    $dbname = "login";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $conn = new mysqli($server, $username, "", $dbname);
        if($conn->connect_error)
            die("<script>alert('Connection to $dbname failed');window.location.assign('admlog.php');</script>");
        $sql = "SELECT * FROM admin";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                if(($_POST["email"] == $row["username"]) && ($_POST["passwd"] == $row["password"]))
                {
                    $log = 1;
                    $_SESSION['user'] = "admin";
                    header("location: admin.php");
                }
                else
                    echo "<script>window.location.assign('admlog.php');alert('Wrong Credentials!');</script>";
            }
        }
    }
    else
    {
        unset($_SESSION["user"]);
        header("location: index.html");
    }
?>