<!-- THIS FILE IS FOR TESTING PURPOSES -->
<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php'; 

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';      // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                       // Enable SMTP authentication
        $mail->Username   = 'sameerajuman@gmail.com';   // SMTP username
        $mail->Password   = 'jcmxoadkfreezilf';            // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                   
        $mail->Port       = 465;                        // TCP port to connect to

        //debugging
        $mail->SMTPDebug = 2;  // Shows detailed SMTP debug output
        $mail->Debugoutput = 'html'; // Outputs nicely in browser

        //Recipients
        $mail->setFrom('sameerajuman@gmail.com', 'Shu'); // Sender Email and name
        $mail->addAddress('kaiholliday243@gmail.com');     //Add a recipient email  

        //Content
        $mail->isHTML(true);               // plain text email
        $mail->Subject = 'test mail';
        $mail->Body = "hello from XAMPP"; 

        // send email
        $mail->send();
        echo "Email sent successfully!";

    } catch (Exception $err){
        echo "failed to send email.";
        
    }

?>