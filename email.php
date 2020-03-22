<?php
require "PHPMailerAutoload.php";
//require 'validate.php';
$mail = new PHPMailer;
$mail->isSMTP();                                
$mail->Host = 'smtp.gmail.com'; 
//$mail->SMTPDebug = 2;    
$mail->SMTPAuth = true;                   // Enable SMTP authentication
$mail->Username = 'nyamtullashaik11@gmail.com';                   // SMTP username
$mail->Password = '9949787012';               // SMTP password
$mail->SMTPSecure = 'tls';    // Enable encryption, 'ssl' also accepted
$mail->Port = 587 ;
$mail->setFrom('nyamtullashaik11@gmail.com', 'SHAIK NYAM' );
//$mail->addAddress('y.e.s.akhila@gmail.com');        // Name is optional
//$mail->addAddress('sudi.saisivateja@gmail.com');
//$mail->addAddress('navyadeepthit4@gmail.com');
//$mail->addAddress('manogna.vunnava2@gmail.com');
//$mail->addAddress('greeshmapogula@gmail.com');
//for($i=0;$i<count($a);$i++){
//	$mail->addAddress($a[$i][0]);
//}
require 'config.php';
$mail->addAddress($result['EMAIL']);
$mail->isHTML(true);                        // Set email format to HTML
$mail->Subject = 'MSME SAMADHAAN';
$mail->Body    = 'Hi,You are having the payment delay to the enterprise given below. <br>Id: '.$Id .' <br>Name: '.$name .' <br>Amount: '.$amt.' <br>so recory your payment as early as possible<br>';
//$mail->AltBody = 'This is a mail sent from php program. Find the code below';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//$mail->addAttachment('email.php');
//$mail->addAttachment('class.phpmailer.php');
//$mail->addAttachment('class.smtp.php');
//your attachmet should go here
/*
$mail->addAttachment('C:\xampp\htdocs\mail\class.phpmailer.php');
$mail->addAttachment('C:\xampp\htdocs\mail\class.smtp.php');
$mail->addAttachment('C:\xampp\htdocs\mail\email.php');
*/
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
else{
echo 'Message has been sent';
}

?>
