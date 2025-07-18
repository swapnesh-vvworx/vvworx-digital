<?php


// Include PHPMailer files
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
require './PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


 $name = $email_address = $company = $phone = $services = $messages = "";

function test_input($data) {

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = test_input($_POST["name"]);

    $email_address = test_input($_POST["email_address"]);

    $company = test_input($_POST["company"]);

    $phone = test_input($_POST["phone"]);

    $messages = test_input($_POST["message"]);

    $services = implode(', ', $_POST["services"]);;
    
    $message = "<h1>VVWORX Website Enquiry Details</h1>";

    $message .= "You have received a new message from your website contact form. <br> Here are the details: <br> Source:  VVWORX Website <br> Name:  $name <br> Email:  $email_address <br> Company:  $company <br> Phone:  $phone <br> Interested In:  $services <br> Message: $messages";

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';  
        $mail->SMTPAuth   = true;
        $mail->Username   = 'vvworx@ncofficial.com';  
        $mail->Password   = 'vCrm@2024'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port       = 587;  

        // Recipients
        $mail->setFrom('vvworx@ncofficial.com', 'VVWORX Website');  
        $mail->addAddress('swapnesh.dalvi@vvworx.com', 'VVWORX Recipient');   
        $mail->addAddress('reachus@vvworx.com', 'VVWORX');   

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'VVWORX Website Enquiry';
        $mail->Body    = nl2br($message); // HTML message
        $mail->AltBody = strip_tags($message); // Plain text message

        $mail->send();
        echo "Message has been sent successfully.";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: ";
    }
    
     echo '<script type="text/javascript">             
        window.location="thankyou.php";            
        </script>';
}


?>