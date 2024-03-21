<?php 
if(isset($_POST["btn_click"]))
{
    // download code in php using header function
    $path="images/2.jpg";
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($path).'"');
    // images read formate to apply readfile() functions
    readfile($path);
}
?>