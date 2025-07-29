<?php






use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


define('host_mail', ' info@igeniusindia.in');
define('host_password', 'Igenius@123');








if (isset($_POST['submit'])) {


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
                $this->mail->Host       = 'mail.igeniusindia.in';
                $this->mail->SMTPAuth   = true;
                $this->mail->Username   = host_mail;
                $this->mail->Password   = host_password;
                $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $this->mail->Port       = 465;
                $this->mail->setFrom(host_mail, 'I-Genius');
                $this->mail->addAddress($rec, $name);
                $this->mail->addReplyTo(host_mail, 'I-Genius');
                //  $mail->addCC(host_mail);
                // $mail->addBCC('bcc@example.com');



                ($attachement) ? $this->mail->addAttachment($attachement) : '';               // Add PDF attachment

                $this->mail->isHTML(true);
                $this->mail->Subject = $subject;
                $this->mail->Body    = $message;
                $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $this->mail->send();

                return 'Message has been sent';
            } catch (Exception $e) {
                echo "Exception: {$e->getMessage()}";
                return "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
            }
        }
    }


    $user_mail = new Sendmail();
    $owner_mail = new Sendmail();

    if (isset($_POST['contact_form'])) {

           if($_POST['email'] && preg_match('/^[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,4}$/i',$_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    if($_POST['contact'] && preg_match('/^[789]\d{9}$/i',$_POST['contact'])){
		
		
		
            $messageTemplate = "<h4>User Details For Contact</h4>" . "<br>" . "Name:" . $_POST['name'] . "<br>" . "Email:" . $_POST['email'] . "<br>" . "Contact:" . $_POST['contact'] . "<br>" . "Message:" . $_POST['message'];


            $userMail =  $user_mail->sendingMail($_POST['email'], $_POST['name'], "Thank you for contacting us", "We will contact you soon"); // to user
            $ownerMail = $owner_mail->sendingMail(host_mail, "Igenius", "User Details For Contact", $messageTemplate); // to owner get info related user
            if ($userMail && $ownerMail) {
               header('Location: welcome.php');
               exit;
            }
        }
	}
    }




    // This is  Demo Class Form 

    if (isset($_POST['DemoClass_form'])) {

      if($_POST['email'] && preg_match('/^[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,4}$/i',$_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    if($_POST['contact'] && preg_match('/^[789]\d{9}$/i',$_POST['contact'])){
            $messageTemplate = "<h4>User Details For Enquiry Demo Class</h4>" . "<br>" . "Name:" . $_POST['name'] . "<br>" . "Email:" . $_POST['email'] . "<br>" . "Contact:" . $_POST['contact'] . "<br>" . "Message:" . $_POST['message'] . "<br>" . "course:" . $_POST['course'] . "<br>" . "mode:" . $_POST['mode'];


            $userMail =  $user_mail->sendingMail($_POST['email'], $_POST['name'], "Thank you for contacting us", "We will contact you soon"); // to user
            $ownerMail = $owner_mail->sendingMail(host_mail, "Igenius", "User Details For Enquiry Demo Class", $messageTemplate); // to owner get info related user
            if ($userMail && $ownerMail) {
                header('Location: welcome.php');
               exit;
            }
        }
	}
    }



    //This is online offline mode

    if (isset($_POST['OnOff-Mode-form'])) {


         if($_POST['email'] && preg_match('/^[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,4}$/i',$_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    if($_POST['contact'] && preg_match('/^[789]\d{9}$/i',$_POST['contact'])){
            $messageTemplate = "<h4>User Details For Enquiry Related Online/Offline Class</h4>" . "<br>" . "Name:" . $_POST['name'] . "<br>" . "email:" . $_POST['email'] . "<br>" . "contact:" . $_POST['contact'] . "<br>" . "message:" . $_POST['message'] . "<br>" . "mode:" . $_POST['mode'];


            $userMail =  $user_mail->sendingMail($_POST['email'], $_POST['name'], "Thank you for contacting us", "We will contact you soon"); // to user
            $ownerMail = $owner_mail->sendingMail(host_mail, "Igenius", "User Details For Enquiry Related Online/Offline Class", $messageTemplate); // to owner get info related user
            if ($userMail && $ownerMail) {
                header('Location: welcome.php');
               exit;
            }
        }
	}
    }



    //This is courser.php  enquiry

    if (isset($_POST['Course-inquiry-form'])) {


         if($_POST['email'] && preg_match('/^[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,4}$/i',$_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    if($_POST['contact'] && preg_match('/^[789]\d{9}$/i',$_POST['contact'])){
            $messageTemplate = "<h4>User Details For Coruse Enquiry</h4>" . "<br>" . "Name:" . $_POST['name'] . "<br>" . "email:" . $_POST['email'] . "<br>" . "contact:" . $_POST['contact'] . "<br>" . "message:" . $_POST['message'] . "<br>" . "course:" . $_POST['course'] . "<br>" . "address:" . $_POST['address'];


            $userMail =  $user_mail->sendingMail($_POST['email'], $_POST['name'], "Thank you for contacting us", "We will contact you soon"); // to user
            $ownerMail = $owner_mail->sendingMail(host_mail, "Igenius", "User Details For Coruse Enquiry", $messageTemplate); // to owner get info related user
            if ($userMail && $ownerMail) {
                header('Location: welcome.php');
               exit;
            }
        }
	}
    }











    if (isset($_POST['franchise-form'])) {


        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $messageTemplate = "<h4>User Details For Franchise Enquiry</h4>" . "<br>" . "Name:" . $_POST['name'] . "<br>" . "email:" . $_POST['email'] . "<br>" . "contact:" . $_POST['contact'] . "<br>" . "message:" . $_POST['message'] . "<br>" . "address:" . $_POST['address'];


            $userMail =  $user_mail->sendingMail($_POST['email'], $_POST['name'], "Thank you for contacting us", "We will contact you soon"); // to user
            $ownerMail = $owner_mail->sendingMail(host_mail, "Igenius", "User Details For Franchise Enquiry", $messageTemplate); // to owner get info related user
            if ($userMail && $ownerMail) {
                header('Location: welcome.php');
               exit;
            }
        }
    }

    //this is career form


    if (isset($_POST['career-form'])) {


         if($_POST['email'] && preg_match('/^[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,4}$/i',$_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    if($_POST['contact'] && preg_match('/^[789]\d{9}$/i',$_POST['contact'])){


            if (!empty($_FILES['resume'])) {

                $path = "uploads/";

                $filename_without_ext = substr($_FILES['resume']['name'], 0, strrpos($_FILES['resume']['name'], "."));
                $file_name = $filename_without_ext . date("Y-m-d h:i:s") . '.pdf';

                $path = $path . $file_name;

                if (move_uploaded_file($_FILES['resume']['tmp_name'], $path)) {

                   


                    $filepath = "/home/u809801411/domains/demovoting.com/public_html/igenius/uploads/$file_name";
                    $messageTemplate = "<h4>Application For Job post</h4>" . "<br>" . "Name:" . $_POST['name'] . "<br>" . "email:" . $_POST['email'] . "<br>" . "contact:" . $_POST['contact'] . "<br>" . "message:" . $_POST['message'];

                    $userMail =  $user_mail->sendingMail($_POST['email'], $_POST['name'], "Thank you for contacting us", "We will contact you soon");
                    $ownerMail = $owner_mail->sendingMail(host_mail, "Igenius", "Application For Job post", $messageTemplate, $filepath);
                      if ($userMail && $ownerMail) {
                        header('Location: welcome.php');
                        exit;
                    }

           


                } else {
                    echo "Failed";
                }
            }
        }
	}
    }
}
