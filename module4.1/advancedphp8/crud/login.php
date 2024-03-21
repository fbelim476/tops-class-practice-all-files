<?php 
require_once('./config/config.php');
require_once('./includes/header.php');
require_once('./includes/navbar.php');
// login here
/* session :A session is a super global variables i.e used to stored temprory information one page to another page.
a)start session
     session_start();
b)How to stored data in session
     $_SESSION["id"];
c)how to unset or remove  a data from session 
     unset($_SESSION["id"]);
d)how to destroy session
     destroy_session();
*/
if(isset($_POST["login"]))
{
    $em=$_POST["email"];
    $pass=base64_encode($_POST["pass"]);
    $select="select * from tbl_customer where email='$em' and password='$pass'";
    $exe=mysqli_query($con,$select);
    $fetch=mysqli_fetch_array($exe);
    $no_rows=mysqli_num_rows($exe);
    if($no_rows>0)
    {
        $_SESSION["customerid"]=$fetch["customer_id"];
        $_SESSION["name"]=$fetch["customername"];
        $_SESSION["email"]=$fetch["email"];

        echo "<script>
        alert('You are Logged in Successfully')
        window.location='index.php';
        </script>";
    }
    else 
    {
        echo "<script>
        alert('Your email and Password are incorrect')
        window.location='login.php  ';
        </script>";
    
    }

}


?>

    <!-- Login page -->

    <div class="container bg-white border border-1 mt-5 p-4">
        <a href="" class="ms-5 p-5"><b>Login here</b></a>
    </div>
    <div class="container bg-white border border-1 mt-2 p-4 col-md-7">

        <div class="row">
            <div class="col-md-5">
                <h5 class="text-center">SignIn here</h5>
                <img src="https://media.tenor.com/p0G_bmA2vSYAAAAd/login.gif" class="w-75 ms-3">
            </div>
            <div class="col-md-7">
                <form method="post">
                    <div class="input-group mt-3">
                        <input type="email" name="email" placeholder="Email *" class="form-control">
                    </div>
                    <div class="input-group mt-3">
                        <input type="hidden" name="name" placeholder="Email *" class="form-control">
                    </div>
                    
                    
                    <div class="input-group mt-3">
                        <input type="password" name="pass" placeholder="Password *" class="form-control">
                    </div>

                    
                    <div class="input-group mt-3">
                        <input type="submit" name="login" value="SignIn" class="btn btn-sm btn-dark text-white">
                        <b class="ms-3"><a href="forgetpassword.php">Forget password ?</a></b>
                    </div>

                    
                    <div class="input-group mt-3">
                          <b class="ms-3">Don't have Account ?<a href="register.php">Create Account</a></b>
                    </div>
                </form>
            </div>

        </div>
     
    </div>

    <?php 
require_once('./includes/footer.php');

?>