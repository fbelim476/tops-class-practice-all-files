<?php 
require_once('./config/config.php');
require_once('./includes/header.php');
require_once('./includes/navbar.php');
// php mailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// forget password logic 
if(isset($_POST["forget"]))
{
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';        
$mail = new PHPMailer(true);
try {
    $em=$_POST["email"];

     //Server settings
     $mail->SMTPDebug = 1;                      //Enable verbose debug output
     $mail->isSMTP();                                            //Send using SMTP
     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
     $mail->Username   = 'bkpandey.pandey@gmail.com';                     //SMTP username
     $mail->Password   = 'canh szvs lipn llta ';                               //SMTP password
     $mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
     $mail->Port       = 587;                                       //TCP port to connect to; use 587 or 456 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
     //Recipients
     $mail->setFrom('bkpandey.pandey@gmail.com', 'Thanks note to sending email');
     $mail->addAddress($_POST["email"]);     //Add a recipient
     // $mail->addAddress('ellen@example.com');               //Name is optional
     // $mail->addReplyTo('info@example.com', 'Information');
     // $mail->addCC('cc@example.com');
     // $mail->addBCC('bcc@example.com');
     //Attachments
     // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'Forget Password The password is!';
    $select="select password from tbl_customer where email='$em'";
    $exe=mysqli_query($con,$select);
    $fetch=mysqli_fetch_array($exe);
    $no_rows=mysqli_num_rows($exe);
    if($no_rows==1)
    {
        $pass=base64_decode($fetch["password"]);
        // echo "<script>
        //  alert('The password is :'+$pass)
        // window.location='login.php';
        // </script>";
        $mail->Body    = "The Password is :".$pass;
        $mail->send();
        echo "<script>
         alert('we will send your password on your registered email address please check and Login')
        window.location='login.php';
        </script>";
    }
    
    else 
    {
        echo "<script>
        alert('This email is not Register with us try with another email address')
        window.location='forgetpassword.php';
        </script>";
    }
} 
catch (Exception $e)
{
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
    <!-- forget password page -->

    <div class="container bg-white border border-1 mt-5 p-4">
        <a href="" class="ms-5 p-5"><b>Login here</b></a>
    </div>
    <div class="container bg-white border border-1 mt-2 p-4 col-md-7">

        <div class="row">
            <div class="col-md-5">
                <h5 class="text-center">Forget your password ?</h5>
                <img src="https://cdn.dribbble.com/users/195163/screenshots/1399830/reset_pwd.gif" class="w-75 ms-3">
            </div>
            <div class="col-md-7">
                <form method="post">
                    <div class="input-group mt-3">
                        <label>Enter Email *</label>
                        <input type="email" name="email" placeholder="Email *" class="form-control">
                    </div>
                    
                    
                    <div class="input-group mt-3">
                        <input type="submit" name="forget" value="Submit" class="btn btn-sm btn-dark text-white">
                       
                    </div>

                  
                </form>
            </div>

        </div>
     
    </div>
    <?php 
require_once('./includes/footer.php');



?>