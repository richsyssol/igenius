<?php





// _________________ code start ___________________________
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
http_response_code(302);
header('Location: https://igeniusindia.in/404.php');
exit();
}



if(isset($_POST) && $_SERVER['REQUEST_METHOD'] === 'POST'){

    // after submit button click  start
if($_POST && $_POST['submit']){

	//mysqli_real_escape_string($con, $_POST['contact'])
	
    $mobile = $_POST['contact'] ?? null;
    $name = $_POST['name'] ?? null;
    $address = $_POST['address'] ?? null;
    $message = $_POST['message'] ?? null;
    $email = $_POST['email'] ?? null;

  if($email && preg_match('/^[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,4}$/i',$email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    if($mobile && preg_match('/^[789]\d{9}$/i',$mobile)){


		include_once('otpClass.php');
      $obj = new OneTimePassword();
		$result = $obj->send($mobile,$name,$email,$address,$message);

      if($result){
        session_start();
        $_SESSION['userData'] = $result;
		  $_SESSION['ExpireToken'] = time() + 10*60;
        header("Location: https://igeniusindia.in/otp.php");
		exit();
      }  else{
        header("Location: https://igeniusindia.in/404.php");
      }

  




    }
  }


}



    // after submit button click  end











}









?>