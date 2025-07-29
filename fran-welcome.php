<?php 
session_start();
if(!isset($_SESSION['thankyou'])){
header('Location: https://igeniusindia.in/404.php');
}

if(isset($_SESSION['thankyou'])){

  unset($_SESSION["userData"]);

?>

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



 <section class="py-5" style="height:35vh">
      <div class="container">
     <div class="alert alert-success" role="alert">
  Thank you so much for reaching out to us. We appreciate your interest and are excited to assist you. One of our executives will call you shortly to discuss your needs and how we can help you achieve your goals.
If you have any immediate questions, please feel free to reply to this email web.igeniusnsk@gmail.com or call us +91 7770045402 <a href="https://igeniusindia.in" class="alert-link">Go Homepage</a>
</div>
      </div>
    </section>
    
    <footer class="fixed-bottom">
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




<?php 
}
?>