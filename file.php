<?php
session_start();
if(!isset($_SESSION["user"]))
{
    echo "<script>alert('Please login first to download the file');window.location.assign('sign.php');</script>";
    exit();
} 
ignore_user_abort(true);
set_time_limit(0);
 
$path = "C:\\xampp\htdocs\NLP\\";
 
$dl_file = preg_replace("([^\w\s\d\-_~,;:\[\]\(\).]|[\.]{2,})", '', $_GET['download_file']);
$dl_file = filter_var($dl_file, FILTER_SANITIZE_URL);
$fullPath = $path.$dl_file;
 
if ($fd = @fopen($fullPath, "r")) {
    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);
    switch ($ext) {
        case "html":
        header("Content-type: text/html");
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\"");
        break;
        default;
        header("Content-type: application/octet-stream");
        header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
        break;
    }
    header("Content-length: $fsize");
    header("Cache-control: private");
    while(!feof($fd)) {
        $buffer = fread($fd, 2048);
        echo $buffer;
    }
fclose ($fd);
exit;
}
else
    die("<script>alert('File is currently not available');window.location.assign('download.php');</script>")
?>