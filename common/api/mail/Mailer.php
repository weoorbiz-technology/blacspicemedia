<?php

include("mailEngine/class.phpmailer.php");
include("mailEngine/class.smtp.php");

// Your email info
class Mailer {

    function sendMail($to, $subject, $message) {

        $yourMail = $yourPass = $from_name = $from_mail = '';
        // Developer Email Credentials
        $yourMail = 'srilearncraft@gmail.com';
        $yourPass = 'ckzyhrkmtpwtmpbe';
        $from_name = 'Sri LearnCraft';
        $from_mail = 'srilearncraft@gmail.com';

        try {
            if(empty($to) || empty($subject) || empty($message)) {
                return array('success'=>false, 'message'=>"Mail send details missing, Check given parameter(s)");
            }

            $temp_to = $to_mail = [];
            if(is_array($to)) {
                foreach ($to as $key => $to_mail) {
                    if(is_array($to_mail)) {
                        if(isset($to_mail[0]) && filter_var($to_mail[0], FILTER_VALIDATE_EMAIL)) {
                            $temp_to[] = strtolower($to_mail[0]);
                        } else if(isset($to_mail[1]) && filter_var($to_mail[1], FILTER_VALIDATE_EMAIL)) {
                            $temp_to[] = strtolower($to_mail[1]);
                        }
                    } else if (isset($to_mail) && filter_var($to_mail, FILTER_VALIDATE_EMAIL)) {
                        $temp_to[] = strtolower($to_mail);
                    }
                }
            } else {
                $to_mail = explode(',', $to);
                foreach ($to_mail as $key => $e) {
                    if (isset($e) && filter_var($e, FILTER_VALIDATE_EMAIL)) {
                        $temp_to[] = strtolower($e);
                    }
                }
            }

            if(isset($yourMail) && isset($yourPass) && isset($from_name) && isset($from_mail)) {
                if(empty($yourMail) && empty($yourPass) && empty($from_name) && empty($from_mail)) {
                    return array('success'=>false, 'message'=>"Mail send required details missing");
                }

                // Create a new SSL PHPMailer instance
                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "ssl";
                // Set the GMail SMTP settings
                $mail->Host = "smtp.gmail.com";
                // $mail->Host = "smtp.zoho.com";
                $mail->Port = 465;
                $mail->Username = $yourMail;
                $mail->Password = $yourPass;

                // Add all the recipients
                foreach($temp_to as $_to) {
                    $mail->AddAddress($_to);
                }

                // Create the email
                $mail->AddReplyTo($from_mail, $from_name);
                $mail->From     = $from_mail;
                $mail->FromName = $from_name;
                $mail->Subject  = $subject;
                $mail->Body     = $message;
                $mail->IsHTML(true); // Or FALSE, if it is not a HTML email
                $mail->WordWrap = 50;

                // Send the mail
                if ($mail->Send()) {
                    return array('success'=>true, 'message'=>'Mail has been sent');
                } else {
                    return array('success'=>false, 'message'=>"Failed to send message: ".$mail->ErrorInfo);
                }
            } else {
                return array('success'=>false, 'message'=>"Mail send required details missing");
            }
        } catch(Exception $e) {
            return array('success'=>false, 'message'=>"Exception Code: ".$e->getCode().", Exception: ".$e->getMessage());
        }
        // Exit
        exit();
    }
}

?>
