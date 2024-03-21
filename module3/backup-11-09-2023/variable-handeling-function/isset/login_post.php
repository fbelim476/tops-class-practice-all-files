<?php  
if(isset($_POST["sub"]))
{
    $em=$_POST["email"];
    $pwd=$_POST["pass"];
    if($em=='bkpandey@gmail.com' && $pwd=='b12345')
    {
       echo "<h1 style='color:green' align='center'>You are Logged in Successfully</h1>";
    //    header("location:welcome.php");
    }
    else 
    {
        echo "<h1 style='color:red' align='center'>Your email and password are wrong</h1>";
        // header("location:login.php");
    }

}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <center>
    <form method="post">        
        Enter your Email * 
        <input type="text" name="email" placeholder="email *" required>
        <br><br>
        Enter your Password * 
        <input type="password" name="pass" placeholder="Password *" required>
        <br><br>
        <input type="submit" name="sub" value="Login">
        <br><br>

    </form>    

    </center>
    
</body>
</html>