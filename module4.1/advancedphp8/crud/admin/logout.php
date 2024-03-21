<?php 
session_start();
unset($_SESSION["adminid"]);
unset($_SESSION["email"]);
session_destroy();
echo "<script>
alert('You are Logout successfully')
window.location='index.php';
</script>";
?>