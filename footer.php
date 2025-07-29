

    <div class="container-fluid px-0">
      <!-- Footer -->
      <footer class="text-center text-lg-start text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Links -->
          <section class="">
            <!--Grid row-->
            <div class="row footer-links"> <!-- Added footer-links class -->
  
              <!-- Grid column -->
    
              <hr class="w-100 clearfix d-md-none" />
    
              <!-- Grid column -->
              
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold mh1">Our Courses</h6>
                
                    <?php
                          $conn = $pdo->open();
      
                          try{
                            $stmt = $conn->prepare("SELECT * FROM tbl_course");
                            $cnt=1;
                            $stmt->execute();
                            foreach($stmt as $row){
                             // $image = (!empty($row['image'])) ? 'admin/assets/images/course/'.$row['image'] : 'assets/images/users/profile.jpg';
                              
                      ?>
                <p class="f-item">
                  <a  href="courses.php?id=<?php echo $row['id'];?>" class="text-dark"><?php echo $row['name'];?></a>
                </p>
                    <?php 
                            }
                          }
                          catch(PDOException $e){
                            echo $e->getMessage();
                          }
      
                          $pdo->close();
                        ?> 
                <!--<p>-->
                <!--  <a href='vedicmath.php' class="text-dark">Vedic Math</a>-->
                <!--</p>-->
                <!--<p>-->
                <!--  <a href='rubikcube.php' class="text-dark">Rubik's Cube</a>-->
                <!--</p>-->
                <!--<p>-->
                <!--  <a href='handwritingcourse.php' class="text-dark">Handwriting Improvement</a>-->
                <!--</p>-->
                <!--<p>-->
                <!--  <a href='#' class="text-dark">Chess</a>-->
                <!--</p>-->
              </div>

              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold mh1">Links</h6>
                <p>
                  <a href='index.php' class="text-dark">Home</a>
                </p>
                <p>
                  <a href='about-us.php' class="text-dark">About Us</a>
                </p>
                <p>
                  <a href='schoolproject.php' class="text-dark">School Project</a>
                </p>
                <p>
                  <a href='franchise.php' class="text-dark">Franchise</a>
                </p>
                <p>
                  <a href='blog.php' class="text-dark">Blog</a>
                </p>
                
              </div>

              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold mh1">Quick Links</h6>
                <p>
                  <a href='find-us.php' class="text-dark">Find Us</a>
                </p>
                <p>
                  <a href='career.php' class="text-dark">Career</a>
                </p>
                <p>
                  <a href='achivement.php' class="text-dark">Achivement</a>
                </p>
                <p>
                  <a href='photos.php' class="text-dark">Photos</a>
                </p>
                <p>
                  <a href='news.php' class="text-dark">News</a>
                </p>
              </div>
              
              <!-- Grid column -->
    
              <hr class="w-100 clearfix d-md-none" />
    
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold mh1">
                  Follow Us
                </h6>
                <p>
                  <a href='https://www.instagram.com/igenius_abacus_/' target="_blank" class="text-dark">Instagram</a>
                </p>
                <p>
                  <a href='https://www.youtube.com/@i-geniusabacusacademy8416' target="_blank" class="text-dark">Youtube</a>
                </p>
                <p>
                  <a href='https://www.facebook.com/igeniusabacus/' target="_blank" class="text-dark">Facebook</a>
                </p>
                <p>
                  <a href='https://api.whatsapp.com/send?phone=7770045402&text=<?php echo $row['name'];?>' target="_blank" class="text-dark">WhatsApp</a>
                </p>
                
              </div>
    
              <!-- Grid column -->
              <hr class="w-100 clearfix d-md-none" />
    
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold mh1">Contact</h6>
                <p class="text-dark"><i class="fas fa-home mr-3"></i><a href="https://www.google.com/maps?q=Office+No.+7/8/9,+2nd+Floor+Silver+Plaza,+Opp.+BSNL+Office,+Canada+Corner+Sharanpur+Road,+Nashik" target="_blank" class="text-dark">
        Office No. 7/8/9, 2nd Floor Silver Plaza, Opp. BSNL Office, Canada Corner Sharanpur Road, Nashik
    </a></p>
                <p><i class="fas fa-envelope mr-3 text-dark"></i><a href="mailto:info.igeniusnsk@gmail.com" class="text-dark"> info.igeniusnsk@gmail.com </a></p>
                <p><i class="fas fa-phone mr-3 text-dark"></i><a href="tel:+917770045402" class="text-dark"> +91 7770045402 </a></p>
                
              </div>
              <!-- Grid column -->
            </div>
            <!--Grid row-->
          </section>
          <!-- Section: Links -->
    
          <hr class="my-3 text-dark">
    
          <!-- Section: Copyright -->
          <section class="p-3 pt-0">
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
          </section>
          <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
      </footer>
      <!-- Footer -->
    </div>


<!--Social media icons-->

<div class="icon-bar"> 
<a href="find-us.php" ><img width="30" height="30" src="https://img.icons8.com/ios-filled/50/dc3545/place-marker--v1.png" alt="place-marker--v1"/></a>
<a class="" href="https://www.instagram.com/igenius_abacus_/" target="_blank"><img width="30" height="30" src="https://img.icons8.com/fluency/48/instagram-new.png" alt="instagram-new"/>
</a> 
<a class="border-color-trans" href="https://www.facebook.com/igeniusabacus/" target="_blank"><img width="30" height="30" src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new"/></a> 
<a class="border-color-trans"  href="https://www.youtube.com/@i-geniusabacusacademy8416" target="_blank"><img width="30" height="30" src="https://img.icons8.com/color/48/youtube-play.png" alt="youtube-play"/></a>     
<a class="border-color-trans" href="https://api.whatsapp.com/send?phone=7770045402&text=Welcome to i-Genius" target="_blank"><img width="30" height="30" src="https://img.icons8.com/color/48/whatsapp--v1.png" alt="whatsapp--v1"/></a> 


</div>
    
<script>
function openModal(videoUrl) {
  $('#videoModal').modal('show');
  $('#videoIframe').attr('src', videoUrl);
}

// Ensure the iframe src is cleared when the modal is hidden
$('#videoModal').on('hidden.bs.modal', function () {
  $('#videoIframe').removeAttr('src');
  location.reload(); // This line will reload the page
});
</script>

