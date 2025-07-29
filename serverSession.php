<?php
if($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['userData'])){
session_destroy();
    session_write_close();
    session_unset();
  echo 0;
}

if(isset($_POST['userData'])){
define('Key','d1b8de639e466a67d5586625a244c11827ddabeec7b64077a047dd8f6b16417c');
define('IV','be2375806f1b5f7f13af7453c1d0b185');		
function decrypt($encryptedData) {
return openssl_decrypt($encryptedData, 'aes-256-cbc', hex2bin(Key), 0, hex2bin(IV));
}
	

$decryptData = decrypt($_POST['userData']);
	
$user = json_decode($decryptData,true);
include 'includes/session.php';
        include 'includes/slugify.php';
		
		 $conn = $pdo->open();
			  $stmt_2 = $conn->prepare("DELETE FROM tbl_otp WHERE email = :email AND mobile = :mobile AND id = :id");
    $stmt_2->execute(['email' => $user['email'], 'mobile' => $user['contact'],'id'=>$user['id']]);
	
    session_destroy();
    session_write_close();
    session_unset();
   echo 1;
	
}

?>