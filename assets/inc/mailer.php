<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    require ("mailerConfig.php");
    require ("vendor/autoload.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendMail($name, $email, $message) {
        $mail = new PHPMailer(true);

        $subject = "New contact form submission";

        // adresse mail du destinataire
        $to = "simon.be47@hotmail.fr";

        $mail->isSMTP();                                            
        $mail->SMTPAuth = true;                                   
        $mail->Host = mailHost;    

        $mail->Username = userName;                     
        $mail->Password = password;      
        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           
        $mail->Port = 587;   

        $mail->setFrom(setFrom, setFromName);
        $mail->addAddress($to);

        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body = "<p>Name : {$name}</p><p>Subject : {$subject}</p><p>Email : {$email}</p><p>Message : {$message}</p>";
        $mail->AltBody = $message;

        if(!$mail->send()) {
            return false;
        } else {
            return true;
        }
    }

    function autoValidationMessage($email) {
        $autoMail = new PHPMailer(true);

        $subject = "Your mail as been correctly send.";
        $altMessage = "Thank you for your message, it will be processed as soon as possible";

        $to = $email;

        $autoMail->isSMTP();                                            
        $autoMail->SMTPAuth = true;                                   
        $autoMail->Host = mailHost;    

        $autoMail->Username = userName;                     
        $autoMail->Password = password;      
        
        $autoMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           
        $autoMail->Port = 587;   

        $autoMail->setFrom(setFrom, setFromName);
        $autoMail->addAddress($to);

        $autoMail->isHTML(true);                                  
        $autoMail->Subject = $subject;
        $autoMail->Body = "<p>Thank you {$name} for your message, it will be processed as soon as possible.</p>";
        $autoMail->AltBody = $altMessage;

        if(!$autoMail->send()) {
            return false;
        } else {
            return true;
        }
    }
?>
