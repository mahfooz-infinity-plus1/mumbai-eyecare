<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- SweetAlert2 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<style>
  body {
    font-family: sans-serif;
    text-align: center;
  }

  button {
    background-color: cadetblue;
    color: whitesmoke;
    border: 0;
    box-shadow: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 7px;
    padding: 15px 35px;
    cursor: pointer;
    white-space: nowrap;
    margin: 10px;
  }

  img {
    width: 200px;
  }

  input[type="text"] {
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
  }

  h1 {
    border-bottom: solid 2px grey;
  }
</style>

<button style="display:none" id="success">Success</button>

<?php
// Error reporting for debugging (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// Start session
session_start();

// Check for reCAPTCHA response

// if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
//     $secretKey = "6LeA6XQqAAAAAFq81OCxPqOjjGMMsUgrkH8btIfb"; 
//     $response = $_POST['g-recaptcha-response'];
//     $ip = $_SERVER['REMOTE_ADDR'];
//     $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$ip";
    
//     $fire = file_get_contents($url);
//     $data = json_decode($fire);

//     if ($data->success) {
//         $mail = new PHPMailer(true);

//         try {
//             $mail->isSMTP();
//             $mail->Host = "mail.sanjaresolutions.com";
//             $mail->SMTPAuth = true;
//             $mail->Username = 'info@sanjaresolutions.com'; 
//             $mail->Password = '2*EBOI@%Q7Q)'; 
//             $mail->SMTPSecure = 'ssl'; 
//             $mail->Port = 465; 

            
//             $mail->SMTPDebug = 0;

            
//             $mail->setFrom('contact@sanjaresolutions.com', 'Sanjar E Solutions');
//             $mail->addBCC('nathuramvarande@gmail.com', 'Nathuram');
//             $mail->addBCC('sanjaresolutions@gmail.com', 'sanjaresolutions');
            
//             $mail->isHTML(true);
//             $mail->Subject = 'Contact form submitted data';

            
//             $name = !empty($_POST['form_name']) ? $_POST['form_name'] : '';
//             $email = !empty($_POST['form_email']) ? $_POST['form_email'] : '';
//             $phone = !empty($_POST['form_phone']) ? $_POST['form_phone'] : '';
//             $message = !empty($_POST['form_message']) ? $_POST['form_message'] : '';

            
//             $html = "
//             <table style='width: 100%; border: 2px solid black; border-collapse: collapse;'>
//                 <tr>
//                     <th style='border: 2px solid black;'>Name</th>
//                     <th style='border: 2px solid black;'>Email</th>
//                     <th style='border: 2px solid black;'>Phone</th>
//                     <th style='border: 2px solid black;'>Message</th>
//                 </tr>
//                 <tr>
//                     <td style='border: 2px solid black;'>$name</td>
//                     <td style='border: 2px solid black;'>$email</td>
//                     <td style='border: 2px solid black;'>$phone</td>
//                     <td style='border: 2px solid black;'>$message</td>
//                 </tr>
//             </table>";
            
//             $mail->msgHTML($html);
//             $mail->AltBody = 'This is a plain-text message body';

            
//             if ($mail->send()) {
//                 echo '<script language="javascript"> window.location.href = "https://sanjaresolutions.com/thank-you"; </script>';
//             } else {
//                 echo "
//                 <script type=\"text/javascript\">
//                     swal('Failed', 'Failed to send mail. Please try again.', 'error');
//                 </script>
//                 ";
//             }

//             $curl = curl_init();
//             curl_setopt_array($curl, array(
//                 CURLOPT_RETURNTRANSFER => 1,
//                 CURLOPT_URL => 'https://sanjarcrm.com/api/leads/submit',
//                 CURLOPT_POST => 1,
//                 CURLOPT_POSTFIELDS => array(
//                     'name' => $name,
//                     'contact' => $phone,
//                     'message' => $message,
//                     'email' => $email,
//                     'extra' => 'sanjaresolutions.com',
//                     'table_alias' => 'sanjaresolutions_com',
//                     'api_key' => '0972d2494399d92700ffb226c971a8f1',
//                 )
//             ));
//             $resp = curl_exec($curl);
//             curl_close($curl);

//         } catch (Exception $e) {
//             echo "
//             <script type=\"text/javascript\">
//                 swal('Error', 'Mailer Error: {$mail->ErrorInfo}', 'error');
//             </script>
//             ";
//         }

//     } else {
//         echo "
//         <script type=\"text/javascript\">
//             swal('Failed', 'Please complete the <b style=color:red>captcha</b>', 'error');
//         </script>
//         ";
//     }
// } else {
//     echo "
//     <script type=\"text/javascript\">
//         swal('Failed', 'Please complete the <b style=color:red>captcha</b>', 'error');
//     </script>
//     ";
// }


// ----------
    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    // SMTP settings for PHPMailer
    try {
        $mail->isSMTP();
        $mail->Host = "mail.mumbaieyecare.co.in";
        $mail->SMTPAuth = true;
        $mail->Username = 'contact@mumbaieyecare.co.in'; // Replace with your SMTP username
        $mail->Password = 'HZC#=+v@_qsg'; // Replace with your SMTP password or App Password if using 2FA
        $mail->SMTPSecure = 'ssl'; // Use 'tls' for port 587 if 'ssl' doesn't work
        $mail->Port = 465; // Change to 587 if 'tls' is used

        // Enable debugging for detailed output (set to 0 in production)
        $mail->SMTPDebug = 0;

        // Set email details
        $mail->setFrom('contact@mumbaieyecare.co.in', 'Eye Clinic');
        $mail->addAddress("vikas.mumbaieyecare@gmail.com", "Vikas Sir"); //Provide file path and name of the attachments 
        $mail->addBCC('mirzafaizan1931@gmail.com', 'Faizan Mirza');
        $mail->addBCC('sanjaresolutions@gmail.com', 'sanjaresolutions');
        $mail->isHTML(true);
        $mail->Subject = 'Contact form submitted data for Lasik';

        // Gather form data
        $name = !empty($_POST['form_name']) ? $_POST['form_name'] : '';
        $email = !empty($_POST['form_email']) ? $_POST['form_email'] : '';
        $phone = !empty($_POST['form_phone']) ? $_POST['form_phone'] : '';
        $insurance = !empty($_POST['insurance']) ? $_POST['insurance'] : '';
        $message = !empty($_POST['form_message']) ? $_POST['form_message'] : '';


        // Prepare email content
        $html = "
        <table style='width: 100%; border: 2px solid black; border-collapse: collapse;'>
            <tr>
                <th style='border: 2px solid black;'>Name</th>
                <th style='border: 2px solid black;'>Phone</th>
                <th style='border: 2px solid black;'>Insaurance</th>
                <th style='border: 2px solid black;'>Message</th>
            </tr>
            <tr>
                <td style='border: 2px solid black;'>$name</td>
                <td style='border: 2px solid black;'>$phone</td>
                <td style='border: 2px solid black;'>$insurance</td>
                <td style='border: 2px solid black;'>Lasik: $message</td>
            </tr>
        </table>";
        
        $mail->msgHTML($html);
        $mail->AltBody = 'This is a plain-text message body';
// Send data to CRM
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://sanjarcrm.com/api/leads/submit',
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => array(
                'name' => $name,
                'contact' => $phone,
                'message' => $message,
                'email' => $email,
                'location' => 'https://mumbaieyecare.co.in/cataract',
                'extra' => $insurance,
                'table_alias' => 'mumbaieyecare_co_in_lasik_',
                'api_key' => '12d98079967385104ca4c1b883cff292',
            )
        ));
        $resp = curl_exec($curl);
        curl_close($curl);
        // Attempt to send the email
        if ($mail->send()) {
            // echo "
            // <script type=\"text/javascript\">
            //     swal('Success', 'Your mail has been sent <b style=color:green>Successfully</b>', 'success');
            // </script>
            // ";
            echo '<script language="javascript"> window.location.href = "https://mumbaieyecare.co.in/cataract/thank-you.html"; </script>';
        } else {
            echo "
            <script type=\"text/javascript\">
                swal('Failed', 'Failed to send mail. Please try again.', 'error');
            </script>
            ";
        }

    } catch (Exception $e) {
        echo "
        <script type=\"text/javascript\">
            swal('Error', 'Mailer Error: {$mail->ErrorInfo}', 'error');
        </script>
        ";
    }
?>
