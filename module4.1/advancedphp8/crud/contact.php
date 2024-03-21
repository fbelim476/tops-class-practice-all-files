
<?php 
require_once("./config/config.php");
require_once('./includes/header.php');
require_once('./includes/navbar.php');
// php mailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// send data or stored data in contact us tables 
if(isset($_POST["contact_us"]))
{   
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';        
$mail = new PHPMailer(true);
try {
    date_default_timezone_set("Asia/Calcutta");
    $fnm=$_POST["fname"];
    $lnm=$_POST["lname"];
    $em=$_POST["email"];
    $phone=$_POST["phone"];
    $sub=$_POST["subject"];
    $msg=$_POST["message"];
    $date_time=date("d/m/Y H:i:s");

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
    $mail->setFrom($_POST['email'], 'Contact us details of customers');
    $mail->addAddress('bkpandey.pandey@gmail.com');     //Add a recipient
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact us details of customers';
    $mail->Body    = "<p><b>Customers FullName is :$fnm &nbsp $lnm</b></p>
    <p><b>Customers Email is :$em</b></p>
    <p><b>Customers Phone is :$phone</b></p>
    <p><b>Customers Subject is :$sub</b></p>
    <p><b>Customers Message is :$msg</b></p>";
    $insert="insert into tbl_contact(firstname,lastname,email,phone,subject_id,message,contact_date_time) values('$fnm','$lnm','$em','$phone','$sub','$msg','$date_time')";
    $exe=mysqli_query($con,$insert);
    $mail->send();
    echo "<script>
    alert('Thanks for contact with us we will contact with you Soon')
    window.location='contact.php';
    </script>";
}
catch (Exception $e)
{
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
    <!-- Register page -->

    <div class="container bg-white border border-1 mt-5 p-4">
        <a href="" class="ms-5 p-5"><b>Contact with Us</b></a>
    </div>
    <div class="container bg-white border border-1 mt-2 p-4 col-md-7">

        <div class="row">
            <div class="col-md-5">
                <h5 class="text-center">Contact with Us</h5>
                <img src="https://media.tenor.com/p0G_bmA2vSYAAAAd/login.gif" class="w-75 ms-3">
            </div>
            <div class="col-md-7">
                <form method="post">
                <div class="row">
                <div class="form-group mt-3 col-md-6">
                        <input type="text" name="fname" placeholder="FirstName *" class="form-control" required>
                    </div>

                    <div class="form-group mt-3 col-md-6">
                        <input type="text" name="lname" placeholder="LastName *" class="form-control" required>
                    </div>

                </div>    
                    <div class="input-group mt-3">
                        <input type="email" name="email" placeholder="Email *" class="form-control" required>
                    </div>
                    
               
                    <div class="input-group mt-3">
                        <input type="text" name="phone" placeholder="Phone *" class="form-control" required>
                    </div>

                    
                    <div class="input-group mt-3">
                        <select name="subject" placeholder="Subject *" class="form-control" required>
                          <option value="">-select subject-</option>
                          <?php
                          $select="select * from tbl_subject";
                          $exe=mysqli_query($con,$select);
                          while($fetch=mysqli_fetch_array($exe))
                          {
                          ?>
                          <option value="<?php echo $fetch["subject_id"]; ?>"><?php echo $fetch["subjectname"]; ?></value>
                          <?php 
                          }
                          ?>
                        </select>
                    </div>



                    
                    <div class="input-group mt-3">
                        <textarea name="message" placeholder="Message *" class="form-control" required></textarea>
                    </div>
                    
                    <div class="input-group mt-3">
                        <input type="submit" name="contact_us" value="Send" class="btn btn-sm btn-dark text-white">
                        
                        <input type="reset" name="reset" value="Reset" class="btn btn-sm btn-danger text-white ms-3">
                       
                    </div>

                </form>
            </div>

        </div>
     
    </div>

    <?php 
require_once('./includes/footer.php');
?>