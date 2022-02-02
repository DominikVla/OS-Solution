<?php
$recipient = $_POST['Recipient'];
$subject = $_POST['Subject'];
$email = $_POST['Email'];

$recipient = htmlspecialchars($recipient);
$subject = htmlspecialchars($subject);
$email = htmlspecialchars($email);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master\src\Exception.php';
require 'PHPMailer-master\src\PHPMailer.php';
require 'PHPMailer-master\src\SMTP.php';

echo "All OK";

//echo    phpinfo();

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  // was 4 for debug
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "mocktlevels@shipley.ac.uk";
$mail->Password   = "ship_Ley862";

$mail->IsHTML(true);
$mail->AddAddress($recipient, "Test");
$mail->SetFrom("mocktlevels@shipley.ac.uk", "Mock T Levels");
//$mail->AddReplyTo("", ""); //add replied to on email, "email", "Name"
// $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = $subject;
$content = $email;

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  header('Location: email.php');
  var_dump($mail);
} else {
  echo "Email sent successfully";
  header('Location: EmailSent.php');
}

echo "All done";
?>
