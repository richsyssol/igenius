<?php


session_start();
include 'includes/session.php';
	include 'includes/slugify.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


define('host_mail', ' info@igeniusindia.in');
define('host_password', 'Igenius@123');

class Sendmail
{

    public $mail;



    public function __construct()
    {

        $this->mail = new PHPMailer(true);
    }




    public function sendingMail($rec, $name, $subject = "Subject Sample", $message = "This is default", $attachement = '')
    {

        try {

            // $this->mail->SMTPDebug = 2;            
            $this->mail->isSMTP();
            $this->mail->Host = 'mail.igeniusindia.in';
            $this->mail->SMTPAuth = true;
            $this->mail->Username = host_mail;
            $this->mail->Password = host_password;
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $this->mail->Port = 465;
            $this->mail->setFrom(host_mail, 'I-Genius');
            $this->mail->addAddress($rec, $name);
            $this->mail->addReplyTo(host_mail, 'I-Genius');
            //  $mail->addCC(host_mail);
            // $mail->addBCC('bcc@example.com');



            ($attachement) ? $this->mail->addAttachment($attachement) : '';               // Add PDF attachment

            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body = $message;
            $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $this->mail->send();

            return 'Message has been sent';
        } catch (Exception $e) {
            echo "Exception: {$e->getMessage()}";
            return "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }
}


















if(isset($_POST['submit']) && $_SESSION['userData']){

	
	$input_1 = $_POST['otp_field_01'] ?? null;
	$input_2 = $_POST['otp_field_02'] ?? null;
	$input_3 = $_POST['otp_field_03'] ?? null;
	$input_4 = $_POST['otp_field_04'] ?? null;
	$input_5 = $_POST['otp_field_05'] ?? null;
	$input_6 = $_POST['otp_field_06'] ?? null;
	
	if(($input_1 !== null) && ($input_2 !== null) && ($input_3 !== null) && ($input_4 !== null) && ($input_5 !== null) && ($input_6 !== null) ){
		$otp_input = $input_1.$input_2.$input_3.$input_4.$input_5.$input_6;


	
	


	
	define('Key','d1b8de639e466a67d5586625a244c11827ddabeec7b64077a047dd8f6b16417c');
define('IV','be2375806f1b5f7f13af7453c1d0b185');		
	function decrypt($encryptedData) {
    return openssl_decrypt($encryptedData, 'aes-256-cbc', hex2bin(Key), 0, hex2bin(IV));
}
	

	$decryptData = decrypt($_SESSION['userData']);
	
$user = json_decode($decryptData,true);
		
	
	
	$conn = $pdo->open();
	   try{
        
           $stmt = $conn->prepare("SELECT * FROM tbl_otp WHERE id = :id AND email = :email AND mobile = :mobile");
        $stmt->execute(['id' => $user['id'],'email'=>$user['email'],'mobile'=>$user['contact']]);
        $userData = $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
    catch(PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
    }
	

	
	if(intval($userData[0]['otp']) === intval($otp_input)){
		//insert Data to franchise and delete current otp id
		 $conn = $pdo->open();


		
        try {
            $stmt = $conn->prepare("INSERT INTO tbl_franchies_enquiry (name,email,mobile,address,message) VALUES (:name,:email, :mobile, :address,:message)");
	
            if ($stmt->execute(['name'=>$user['name'],'email' => $user['email'], 'mobile' => $user['contact'], 'address' => $user['address'],'message'=>$user['message']])) {
           
             //delete current user otp
             
               $stmt_2 = $conn->prepare("DELETE FROM tbl_otp WHERE mobile = :mobile");
				$stmt_2->execute(['mobile'=> $user['contact']]);
				  $pdo->close();
				$owner_mail = new Sendmail();


$messageTemplate = "<h4>User Details For Franchise</h4>" . "<br>" . "Name:" . $user['name'] . "<br>" . "Email:" . $user['email'] . "<br>" . "Contact:" . $user['contact'] . "<br>" . "Message:" . $user['message'];

$ownerMail = $owner_mail->sendingMail(host_mail, "Igenius", "User Details For Franchise", $messageTemplate); // to owner get info related user
				
			
				
				
				session_start();
				$_SESSION['thankyou'] = "active";
				header('Location: https://igeniusindia.in/fran-welcome.php');

            }






        } catch (PDOException $e) {
            echo $e->getMessage();
            $_SESSION['error'] = $e->getMessage();
        }


        $pdo->close();
		

	}else{
		session_start();
		$_SESSION['Invalid'] = "Invalid OTP";
		$_SESSION['expiries']["Invalid"] = time() + 1*60; 
		header('Location: https://igeniusindia.in/otp.php');
exit();
	}
$pdo->close();
	}
}


?>