<?php 
session_start();
$ser="localhost";
$user="root";
$pwd="";
$dbname="crudapp";
$con=mysqli_connect($ser,$user,$pwd,$dbname);
if($con)
{
    // echo "connection successfully";
}
else 
{
    die(mysqli_error($con));
}

?>