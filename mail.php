<?php
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php'; 
require 'vendor/phpmailer/phpmailer/src/SMTP.php'; 
require 'vendor/phpmailer/phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch
$mail->isSMTP();
$mail->Host = 'smtp.sendgrid.net';
$mail->SMTPAuth = true;
$mail->Username = 'girishkv'; //paste one generated by Mailtrap
$mail->Password = 'Six30L@123'; //paste one generated by Mailtrap
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
try {

  $mail->AddAddress('rajan.nithin.92@gmail.com', 'BuildTech');
  $mail->SetFrom('rajan.nithin.92@gmail.com', 'BuildTech');

  $mail->Subject = 'Builtech - Contact Form ';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically

  $mailContent = "<h2>Following are the details filled in the  website's Contact Form</h2>
    <p>First Name :".$_POST['first_name']." </p>";
  $mailContent=$mailContent. "<p>Last Name :".$_POST['last_name']." </p>";
  $mailContent=$mailContent. "<p>Email :".$_POST['email']." </p>";
    $mailContent=$mailContent. "<p>Tel Code :".$_POST['tel_code']." </p>";
  $mailContent=$mailContent. "<p>Phone :".$_POST['phone']." </p>"; 


  $mail->Body = $mailContent;
  $mail->Send();
  echo "Message Sent OK\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}


echo "Email Sent : \n";
echo "Thankyou for contacting us, we will get back you soon \n";

?>
<a href="/">Go back</a>
