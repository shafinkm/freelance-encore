<?php
require 'phpmailer/PHPMailerAutoload.php';


$contactEmails = 'web@fidatotech.ca';
//$laptopRequestEmails = array('it@colterenergy.ca', 'kwade@colterenergy.ca');

function sendEmail($to, $message, $subject, $attachment = '') {
    //$headers = "MIME-Version: 1.0" . "\r\n";
    //$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    //$headers .= 'From:noreply@it-support.ca' . "\r\n";
    //mail($to, $subject, $message, $headers);
    $mail = new PHPMailer;
    $mail->From = "web@fidatotech.ca";
    $mail->FromName = "Inquiry";
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $message;

    if ($attachment != '') {
        $mail->addAttachment($attachment);
    }

    if (is_array($to)) {
        foreach($to as $t) {
            $mail->addAddress($t);
        }
    } else {
        $mail->addAddress($to);
    }

    if (!$mail->send()) {
        echo "ERROR: " . $mail->ErrorInfo;
        die();
    }
}
