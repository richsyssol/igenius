<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


define('host_mail','info@igeniusindia.in');
define('host_password','Igenius@123');
define('message','Thank you for visiting our page.');

echo "Hello";
exit;

if (isset($_POST['submit'])) {
    $user_details=array();

   if( isset( $_POST['contact_form'])){
       $user_details=[
           'name'=>$_POST['name'],
           'email'=> $_POST['email'],
           'contact' => $_POST['contact'],
           'message'=> $_POST['message']
           ];
   }
   
     if( isset( $_POST['course_enquiy'])){
       $user_details=[
           'name'=>$_POST['name'],
           'email'=> $_POST['email'],
           'contact' => $_POST['contact'],
           'message'=> $_POST['message']
           ];
   }
   
   
      if( isset( $_POST['career_form'])){
       $user_details=[
           'name'=>$_POST['name'],
           'email'=> $_POST['email'],
           'contact' => $_POST['contact'],
           'message'=> $_POST['message']
           ];
   }
   
    if( isset( $_POST['on_off_form'])){
       $user_details=[
           'name'=>$_POST['name'],
           'email'=> $_POST['email'],
           'contact' => $_POST['contact'],
           'message'=> $_POST['message']
           ];
   }
   
   
   echo "<pre>";
   print_r($user_details);
   exit;
   

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

//------------------------------------- Default PHP mail ---------------------------

        $name = $_POST['name'];

        $toEmail = $_POST['email']; x






function sendEmail($rec,$name){

    $mail = new PHPMailer(true);
    try {
    
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;            
        $mail->isSMTP();                                            
        $mail->Host       = 'mail.igeniusindia.in';                     
        $mail->SMTPAuth   = true;                                    
        $mail->Username   = host_mail;                    
        $mail->Password   = host_password;                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             
        $mail->Port       = 465;                                    
        $mail->setFrom(host_mail, 'Yogesh');
        $mail->addAddress($rec, $name);    
        $mail->addReplyTo(host_mail, 'Host');
        //  $mail->addCC(host_mail);
        // $mail->addBCC('bcc@example.com');
        $mail->isHTML(true);                                  
        $mail->Subject = 'Welcome Message';
        
        $mail->Body    = message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();

        return 'Message has been sent';
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
};





function getUserInfo($rec,$name,$contact,$message){

    $mail = new PHPMailer(true);
    try {
    
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;            
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                    
        $mail->Username   = host_mail;                    
        $mail->Password   = host_password;                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             
        $mail->Port       = 465;                                    
        $mail->setFrom(host_mail, 'GetInfo');
        $mail->addAddress(host_mail, 'GetInfo');    
        $mail->addReplyTo(host_mail, 'Host');
        //  $mail->addCC(host_mail);
        // $mail->addBCC('bcc@example.com');
        $mail->isHTML(true);                                  
        $mail->Subject = 'User Details';
        if($_POST['contact_form']){
           $mail->Body    = "Username:$name"."<br>"."Email:$rec"."<br>"."Message:$message"."Contact:$contact";  
        }
        
            if($_POST['enquiry_form']){
           $mail->Body    = "Username:$name"."<br>"."Email:$rec"."<br>"."Message:$message"."Contact:$contact";  
        }
       
        
        
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();

        return 'Message has been sent';
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
};


$result = sendEmail($toEmail,$name); // owner to user

$getOwnerMail = getUserInfo($toEmail,$name,$mobile=null,$message=null); // it is only for user to get message from user;

print_r($result);

    } 



















}


?>