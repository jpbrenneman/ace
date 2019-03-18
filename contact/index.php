<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=ariannar_acedb', 'ariannar_ace_user', 'Arianna13!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../includes/error.html.php';
    exit();
}

/**
 * This example shows making an SMTP connection with authentication.


//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that */
date_default_timezone_set('Etc/UTC');

require '../PHPMailer/PHPMailerAutoload.php';

if (isset($_POST['myName']) AND empty($_POST['honeypot'])) {
    $myName = $_POST['myName'];
    $myEmail = $_POST['myEmail'];
    $role = $_POST['role'];
    $myQuestion = $_POST['myQuestion'];

//Create a new PHPMailer instance
    $mail = new PHPMailer;
//Tell PHPMailer to use SMTP
    $mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
//Set the hostname of the mail server
    $mail->Host = "	mail.ariannarain.com";
//Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 587;
//Whether to use SMTP authentication
    $mail->SMTPAuth = true;
//Username to use for SMTP authentication
    $mail->Username = "phpmailer@ariannarain.com";
//Password to use for SMTP authentication
    $mail->Password = "Arianna13!";
//Set who the message is to be sent from
    $mail->setFrom($myEmail, $myName);
//Set an alternative reply-to address
    $mail->addReplyTo($myEmail, $myName);
//Set who the message is to be sent to
    $mail->addAddress('joshua.brenneman@pcc.edu', 'Josh Brenneman');
//Set the subject line
    $mail->Subject = 'Questions';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');


    $mail->Body = 
        'E-mail:' . $_POST['myEmail'] . '<br/>' . 
        'Name:' . $_POST['myName'] . '<br/>' . 
        'I am a:' . $_POST['role'] . '<br/>' . 
        'Question:' . $_POST['myQuestion'];
    $mail->isHTML(true);

//send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }

    include 'success.html.php';

} else{
    include 'contact.html.php';
}

?>