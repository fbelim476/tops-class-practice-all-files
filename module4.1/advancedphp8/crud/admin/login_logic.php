<?php 
require_once("config/config.php");
if(isset($_POST["admin_login"]))
{
    $em=$_POST["email"];
    $pwd=$_POST["pass"];
    $select="select * from tbl_admin where email='$em' and password='$pwd'";
    $exe=mysqli_query($con,$select);
    $fetch=mysqli_fetch_array($exe);
    $num_rows=mysqli_num_rows($exe);
    if($num_rows==1)
    {
        $_SESSION["adminid"]=$fetch["adminid"];
        $_SESSION["email"]=$fetch["email"];
        echo "<script>
        alert('You are Logged In successfully')
        window.location='dashboard.php';
        </script>";

    }
    else 
    {
        echo "<script>
        alert('Your email and password are Incorrect try again')
        window.location='index.php';
        </script>";

    }
}

?>