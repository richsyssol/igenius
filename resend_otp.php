<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(302);
    header('Location: https://igeniusindia.in/404.php');
    exit();
}

if (isset($_POST['submit'])) {
	
  include_once('./otpClass.php');
	
	$obj = new OneTimePassword();
	
	$decryptData = $obj->decryption($_POST['userData']);
	   $userData = json_decode($decryptData, true);
  


	$count = $obj->otpExist($userData['email'],$userData['contact'],$userData['id']);
	
		$obj->deleteOTP($userData['email'],$userData['contact'],$userData['id']);

	$result = $obj->send($userData['contact'],$userData['name'],$userData['email'],$userData['address'],$userData['message']);
      if($result){
        session_start();
        $_SESSION['userData'] = $result;
        header("Location: https://igeniusindia.in/otp.php");
		exit();
      }  else{
        header("Location: https://igeniusindia.in/404.php");
      }

	
}




?>