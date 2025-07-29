<?php
session_start();
if(time() > $_SESSION['ExpireToken']){
	//otpid_delete
	define('Key','d1b8de639e466a67d5586625a244c11827ddabeec7b64077a047dd8f6b16417c');
define('IV','be2375806f1b5f7f13af7453c1d0b185');		
function decrypt($encryptedData) {
return openssl_decrypt($encryptedData, 'aes-256-cbc', hex2bin(Key), 0, hex2bin(IV));
}
	

$decryptData = decrypt($_SESSION['userData']);
	
$user = json_decode($decryptData,true);
	include 'includes/session.php';
        include 'includes/slugify.php';
		
		 $conn = $pdo->open();
			  $stmt_2 = $conn->prepare("DELETE FROM tbl_otp WHERE email = :email AND mobile = :mobile AND id = :id");
    $stmt_2->execute(['email' => $user['email'], 'mobile' => $user['contact'],'id'=>$user['id']]);
	
    session_destroy();
    session_write_close();
    session_unset();
   header('Location: https://igeniusindia.in/404.php');
}

if(!isset($_SESSION['userData'])){
header('Location: https://igeniusindia.in/404.php');
}

if(isset($_SESSION['userData'])){

define('Key','d1b8de639e466a67d5586625a244c11827ddabeec7b64077a047dd8f6b16417c');
define('IV','be2375806f1b5f7f13af7453c1d0b185');		
function decrypt($encryptedData) {
return openssl_decrypt($encryptedData, 'aes-256-cbc', hex2bin(Key), 0, hex2bin(IV));
}
	

$decryptData = decrypt($_SESSION['userData']);
	
$user = json_decode($decryptData,true);
	
	

?>
<style>
	input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
	.otp_input{
		border:1px solid #000 !important;
	}
</style>

<?php include'head.php';?>

<!-- Navbar -->
<div class="container">
        <div class="row py-2  d-flex align-items-center">
            <div class="col-12 col-sm-4 mx-auto">
                <div id="headerLogo" class="mx-sm-0 mx-auto">
                    <a href="index.php"><img src="asset/image/igenius-logo.png" width="100%" alt=""></a>
                </div>
            </div>
    
      
        </div>
</div>
<section>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height:80vh !important;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
<div class="card p-0 p-sm-5 border-0">
	<h2 class="" style="text-align:center !important;">OTP Verification</h2>
	<p style="text-align:center !important;">Verificatin Code Is Sent On +91 XXXXXXX<?=substr($user['contact'], -4)?></p>
    <div class="card-body p-0 p-sm-5">
	<?php    
	
	if($_SESSION["expiries"]){
	    foreach ($_SESSION["expiries"] as $key => $value) {
          if (time() > $value) { 
             unset($_SESSION[$key]);
			  //otp delete from database and after delete success it will show message try again
          }else{
		  if(isset($_SESSION['Invalid'])){
		  ?>
			<div class="alert alert-danger" role="alert">
  <?=$_SESSION['Invalid'];?>
</div>
		  <?php
		  }
		  }
		}
	}
	
		
		?>
	
		
        <form action="otp_verify.php" method="POST">
       <div class="row d-flex  flex-row px-0 px-sm-5">
                                    <div class="col-2 col-md-2">
                                        <div class="form-group">
                                            <input type="number" name="otp_field_01" class="form-control text-center otp_input">
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-2">
                                        <div class="form-group">
                                            <input type="number" name="otp_field_02" class="form-control text-center otp_input">
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-2">
                                        <div class="form-group">
                                            <input type="number" name="otp_field_03" class="form-control text-center otp_input">
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-2">
                                        <div class="form-group">
                                            <input type="number" name="otp_field_04" class="form-control text-center otp_input">
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-2">
                                        <div class="form-group">
                                            <input type="number" name="otp_field_05" class="form-control text-center otp_input">
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-2">
                                        <div class="form-group">
                                            <input type="number" name="otp_field_06" class="form-control text-center otp_input">
                                        </div>
                                    </div>
                                    
                                </div>
			<button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg form-control my-4">Verify OTP</button>

        </form>
		<p class="text-danger text-center m-0 p-0 mb-3">OTP Validity : 10min</p>
		<p class="text-center m-0 p-0">Didn't get any code?
		</p>
		<form action="resend_otp.php" method="POST">
			<input type="hidden" name="userData" value="<?=$_SESSION['userData']?>"/>
			<div class="d-flex justify-content-center">
			<button type="submit" name="submit" value="submit" class="btn btn-outline fw-bold">Resend Again!</button>
			</div>
		</form>
	
		
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
          <section class="p-3 pt-0">
            <div class="container">
				<div class="row d-flex align-items-center">
              <!-- Grid column -->
              <div class="col-md-7 col-lg-8 text-center text-md-start">
                <!-- Copyright -->
                <div class="p-3 text-dark">
                  © 2024 Copyright:
                  <a class="text-dark" href="https://igeniusindia.in/"
                     >igeniusindia.in</a
                    >
                    All rights reserved.
                </div>
                <!-- Copyright -->
              </div>
              <!-- Grid column -->
    
              <!-- Grid column -->
              <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end text-dark">
                Developed By Rich System Solution Pvt Ltd
              </div>
              <!-- Grid column -->
            </div>
			</div>
          </section>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    // Set a timeout for 10 minutes (600,000 milliseconds)
    setTimeout(function() {
        // Make an AJAX POST request
        $.ajax({
            url: 'serverSession.php', // Replace with your server endpoint
            type: 'POST',
            data: {
                // Data to be sent to the server
                userData: '<?= $_SESSION['userData']?>'
            },
            success: function(response) {
                // Handle the response from the server
             if(response==1){
			   window.location.href = "https://igeniusindia.in/404.php";
			 }
            },
            error: function(xhr, status, error) {
                // Handle any errors
                console.error('Error:', error);
            }
        });
    }, 600000); // 10 minutes in milliseconds
});
</script>

<?php  

}else{
header('Location: https://igeniusindia.in/404.php');
}
?>
