<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//GET IN TOUCH EMAIL NOTIFICATION
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
if(isset($_POST))
{	
foreach($_POST as $key=>$value){$$key = str_replace("'","",$value);}




//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$body = '<p>Dear Admin,</p><p>Please see the below contact us enquiry details.</p><table>
<tr><td><b>Name </b></td><td><b>:</b></td><td>'.$name.' </td></tr>
<tr><td><b>Phone </b></td><td><b>:</b></td><td>'.$phone.' </td></tr>
<tr><td><b>Email </b></td><td><b>:</b></td><td>'.$email.'</td></tr>
<tr><td><b>Message </b></td><td><b>:</b></td><td>'.$mess.'</td></tr>
</table><p>Kind Regards,<br/>www.mumbaieyecare.com</p>';

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mumbaieyecare.com';        //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@mumbaieyecare.com';                     //SMTP username
    $mail->Password   = 'npu3BcxaK?Eh';                         //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@mumbaieyecare.com', 'mumbaieyecare');
	$mail->addAddress('info@mumbaieyecare.com', "info");
	$mail->addBCC('mumbaieyecarecornealasik@gmail.com', "info");	
	$mail->addBCC('sanjaresolutions@gmail.com', "sanjaresolutions");	
    $mail->addReplyTo($email,$name);  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact us enquiry';
    $mail->Body    = $body;//'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';

    $mail->send();
   // echo 'Message has been sent';
	header('location: thankyou.html');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




}
//GET IN TOUCH EMAIL NOTIFICATION
?>
