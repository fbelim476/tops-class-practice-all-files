<?php 
session_start();
unset($_SESSION["customerid"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);
session_destroy();
echo "<script>
alert('You are Logout  Successfully')
window.location='index.php';
</script>";

?>