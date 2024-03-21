
<?php 
require_once("./config/config.php");
require_once('./includes/header.php');
require_once('./includes/navbar.php');
// php mailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// create an account for customer
if(isset($_POST["register"]))
{    
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';        
$mail = new PHPMailer(true);
try {
    date_default_timezone_set("Asia/Calcutta");
    // upload photo
    $tmp_name=$_FILES["img"]["tmp_name"];
    $type=$_FILES["img"]["type"];
    $type=$_FILES["img"]["size"]/1024;
    $path="uploads/customers/".$_FILES["img"]["name"];
    move_uploaded_file($tmp_name,$path);
    $name=$_POST["name"];
    $em=$_POST["email"];
    $pwd=base64_encode($_POST["pass"]);
    $cpwd=base64_encode($_POST["cpass"]);
    $phone=$_POST["phone"];
    $add=$_POST["address"];
    $st=$_POST["state"];
    $ct=$_POST["city"];
    $date=date("d/m/Y H:i:s a");
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
    $mail->Subject = 'Thanks for create an Account with Us!';
    $mail->Body    = "<img src='https://emilypost.com/client_media/images/thank-you-note-faqs.jpg' style='width:80%; height:250px; margin:auto; margin-left:10%'><br><br> 
    <p>Thank you again, I really appreciate working with you. Even though I may not say it all the time, I appreciate all you do. Thank you again for your support, it made a real difference for me</p>";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    //echo 'Message has been sent';
    // insert
    if($pwd==$cpwd)
    {
        
$insert="insert into tbl_customer(photo,customername,email,password,phone,address,sid,ctid,register_date_time) values ('$path','$name','$em','$pwd','$phone','$add','$st','$ct','$date')";
$exe=mysqli_query($con,$insert);
$mail->send();
echo "<script>
alert('Your account successfully Created')
window.location='login.php';
</script>";
}   
else 
{
echo "<script>
alert('Your Password and Confirmed password does not matched try again')
window.location='register.php';
</script>"; 
}
 
}
catch (Exception $e)
{
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


}
?>
<!-- Register page -->
<!-- ajax called here -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // ajax
    function str(val)
    {
        $.ajax({
               
            type:"POST",
            url:"getdata.php",
            data:"st="+val,
            success:function(data)
            {
                $("#ct").html(data);
            }

        });

    }
</script>
<div class="container bg-white border border-1 mt-5 p-4">
    <a href="" class="ms-5 p-5"><b>Register here</b></a>
</div>
<div class="container bg-white border border-1 mt-2 p-4 col-md-7">

        <div class="row">
            <div class="col-md-5">
                <h5 class="text-center">Register here</h5>
                <img src="https://media.tenor.com/p0G_bmA2vSYAAAAd/login.gif" class="w-75 ms-3">
            </div>
            <div class="col-md-7">
                <form method="post" enctype="multipart/form-data">
                <div class="input-group mt-3">
                        <input type="file" name="img" placeholder="photo *" class="form-control">
                    </div>
                    
                    <div class="input-group mt-3">
                        <input type="text" name="name" placeholder="Name *" class="form-control">
                    </div>
                    <div class="input-group mt-3">
                        <input type="email" name="email" placeholder="Email *" class="form-control">
                    </div>
                    
                    <div class="input-group mt-3">
                        <input type="password" name="pass" placeholder="Password *" class="form-control">
                    </div>

                    <div class="input-group mt-3">
                        <input type="password" name="cpass" placeholder="Confirmed Password *" class="form-control">
                    </div>

                    <div class="input-group mt-3">
                        <input type="text" name="phone" placeholder="Phone *" class="form-control">
                    </div>

                    
                    <div class="input-group mt-3">
                        <textarea name="address" placeholder="Address *" class="form-control"></textarea>
                    </div>

                    
                    <div class="input-group mt-3">
                        <select  name="state" placeholder="state *" onchange="return str(this.value)" id="st" class="form-control">
                        <option value="">-select state-</option>
                       <!-- fetch dynamic state from state tables -->
                       <?php
                       $select="select * from tbl_state";
                       $exe=mysqli_query($con,$select);
                       while($fetch=mysqli_fetch_array($exe))
                       { 
                       ?>  
                        <option value="<?php echo $fetch["sid"];?>"><?php echo $fetch["statename"];?></option>
                        <?php 
                       }
                       ?>
                        </select>
                    </div>

                    <div class="input-group mt-3">
                        <select  name="city" placeholder="city *" id="ct" class="form-control">
                        <option value="">-select city-</option>
                        <!-- select state and fetch that state of city apply ajax -->
                        
                       <!-- fetch dynamic city from city tables -->
                       <?php /*
                       $select="select * from tbl_city";
                       $exe=mysqli_query($con,$select);
                       while($fetch=mysqli_fetch_array($exe))
                       { 
                       ?>  
                        <option value="<?php echo $fetch["ctid"];?>"><?php echo $fetch["cityname"];?></option>
                        <?php 
                       }
                       */
                       ?>
                        </select>
                    </div>

                    <div class="input-group mt-3">
                        <input type="submit" name="register" value="SignUp" class="btn btn-sm btn-dark text-white">
                        
                        <input type="reset" name="reset" value="Reset" class="btn btn-sm btn-danger text-white ms-3">
                       
                    </div>

                    
                    <div class="input-group mt-3">
                          <b class="ms-3">Already have an Account ?<a href="login.php">Login here</a></b>
                    </div>
                </form>
            </div>

        </div>
     
    </div>

    <?php 
require_once('./includes/footer.php');
?>