<?php
    session_start();
    $log = 0;
    $username = "root";
    $server = "localhost";
    $dbname = "login";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($_GET["value"] == "logout") {
            unset($_SESSION["user"]);
            header("location: download.php");
            exit();
        }
        if(!preg_match("/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/",$_POST['email']))
            die("Enter a valid Username");
        $conn = new mysqli($server, $username, "", $dbname);
        if($conn->connect_error)
            die("Connection to $dbname failed");
        $sql = "SELECT * FROM checkdb";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                if(($_POST["email"] == $row["email"]) && ($_POST["passwd"] == $row["password"]))
                {
                    $log = 1;
                    $_SESSION["user"] = "ok";
                    die("<script>alert('Succesfully logged in');window.location.assign('download.php');</script>");
                }
            }
                if($log == 0)
                    die("<script>alert('You are not registered!');window.location.assign('download.php');</script>");
        }
        else
            die ("<script>alert('No registered user');window.location.assign('download.php');</script>");
    }
?>