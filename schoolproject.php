<?php include'head.php'; ?>
<?php include'header.php';?>
<section class='banimg'>
    <div class="image-container">
        <img class='w-100 d-block responsive-img' src="asset/image/school-project.png" alt="school-project banner">
    </div>
    
</section>




<section>
    <div class="container text-center" data-aos="zoom-in">
        <h2 class="main-heading">ABACUS PROGRAM FOR SCHOOL PROJECT</h2>
        <P class=''><span class="fw-bold">I-Genius Abacus Academy</span> implementing the abacus brain development program <span class="fw-bold text-danger">since 2015</span> at the school level. The purpose behind this is that abacus course running at a school level at very low fee to help all students learn this mental arithmetic method. Presently our abacus course running in all <span class="fw-bold text-info">165 Schools of North Maharashtra’s</span> renowned educational institute “Maratha Vidhya Prasarak Samaj’s Nashik”,also providing training of Abacus and Vedic Mathematics courses in various educational institutes, International English Medium Schools, other private English/ Marathi medium schools in Nashik district and major cities of Maharashtra & other state.so far more than <span class="fw-bold text-success">1.5 lakh students</span> have been trained in <span class="fw-bold text-primary">Abacus and Vedic Mathematics</span> courses by I-Genius Academy under the school project Abacus program. To implementing these course in school project, I-Genius tie-up with schools and send our Abacus teachers to those schools during the school hours to trained students in Abacus & Vedic Math’s.</P>
    </div>
</section>

<section class="why p-4">
  <div class="container text-center mt-2">
    <div class="row mt-3 justify-content-center">
       <h2 class='main-heading'>WHY CHOOSE IGENIUS FOR SCHOOL PROJECT</h2>
        <div class="col-md-4 pt-3" data-aos="fade-up" data-aos-duration="1000">
          <div class="card anime shadow p-3 cardcolor1">
            <span> <center><img src="asset/image/icon6.png" class="card-img-top hicon" alt="hassle-free" ></center></span>
             <div class="card-body">
              <p class="card-text">NO HASSLES IN MANAGING YOUR OWN ABACUS TEACHERS.</p>
            </div>
          </div>
        </div>
      <div class="col-md-4 pt-3" data-aos="fade-up" data-aos-duration="1000">
        <div class="card anime shadow p-3 cardcolor2">
          <span> <center><img src="asset/image/icon7.png" class="card-img-top hicon" alt="watch icon" ></center></span>
           <div class="card-body">
            <p class="card-text">FLEXIBLE TEACHING HOURS AS PER THE SCHOOL SCHEDULE.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 pt-3" data-aos="fade-up" data-aos-duration="1000">
        <div class="card anime shadow p-3 cardcolor3">
          <span> <center><img src="asset/image/icon8.png" class="card-img-top hicon" alt="authorize icon" ></center></span>
           <div class="card-body">
            <p class="card-text">ASSOCIATES WITH GOVT. AUTHORIZED & MOST TRUSTED INSTITUTES.</p>
          </div>
        </div>
      </div>
    
      <div class="col-md-4 pt-3" data-aos="fade-up" data-aos-duration="1000">
        <div class="card anime shadow p-3 cardcolor4">
          <span> <center><img src="asset/image/icon9.png" class="card-img-top hicon" alt="growth icon" ></center></span>
            <div class="card-body text-center">
            <p class="card-text">BEST MATH’S BASED ABACUS EDUCATIONAL MODULES.</p>
            <!-- <i class="fas fa-star fa-3x"></i> You can replace this icon with your desired one -->
          </div>
        </div>
      </div>
      
      <div class="col-md-4 pt-3" data-aos="fade-up" data-aos-duration="1000">
       <div class="card anime shadow p-3 cardcolor5">
         <span> <center><img src="asset/image/icon10.png" class="card-img-top hicon" alt="championship icon" ></center></span>
          <div class="card-body">
           <p class="card-text">AUTHORIZED INSTITUTE FOR CONDUCTING ABACUS DISTRICT, STATE, NATIONAL & INTERNATIONAL COMPETITION.  </p>
          </div>
        </div>
      </div>
            <div class="col-md-4 pt-3" data-aos="fade-up" data-aos-duration="1000">
       <div class="card anime shadow p-3 cardcolor6">
         <span> <center><img src="asset/image/icon11.png" class="card-img-top hicon" alt="growth icon2" ></center></span>
          <div class="card-body">
           <p class="card-text">MOST TRUSTED INSTITUTE BY 1.5 LAKH STUDENTS & PARENTS.  </p>
          </div>
        </div>
      </div>

    </div>
    </div>
  </div>
  
</section>

<!--Youtube video-->
<section class="ath_carousel_se_04" data-aos="fade-up" data-aos-duration="1000">
  <div class="container-fluid px-0 py-5">
    <div class="container">
      <div class="row anime">
        <div class="col-sm-12 text-center">
          <h2 class="main-heading">ABACUS PROGRAM IN SCHOOL PROJECT</h2>
        </div>
        <div class="col-md-12 px-4 pt-3" id="zindex">
          <div class="owl-carousel ath_carousel_se_04_carousel owl-theme">
            <?php
              $conn = $pdo->open();

              try {
                $stmt = $conn->prepare("SELECT * FROM tbl_school_video");
                $stmt->execute();
                foreach ($stmt as $row) {
            ?>
            <div class="card anime">
              <div class="item">
                <div class="col-sm-12 delay-1">
                  <div class="position-relative">
                    <div class="product-image3 ath_hover">
                      <iframe width="250" height="200" src="<?php echo $row['video_url']; ?>?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="position-absolute w-100  h-100 top-0 d-flex justify-content-center align-items-center" >
                        <button class="btn btn-danger play-video-btn p-4" data-video-url="<?php echo $row['video_url']; ?>">Play </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
                }
              } catch (PDOException $e) {
                echo $e->getMessage();
              }

              $pdo->close();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="videoModalLabel">Video</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe id="videoFrame" width="100%" height="400" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<!--model js-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
  const playButtons = document.querySelectorAll('.play-video-btn');
  const videoModal = new bootstrap.Modal(document.getElementById('videoModal'));
  const videoFrame = document.getElementById('videoFrame');

  playButtons.forEach(button => {
    button.addEventListener('click', function() {
      const videoUrl = this.getAttribute('data-video-url');
      videoFrame.src = `${videoUrl}?autoplay=1&controls=0`;
      videoModal.show();
    });
  });

  document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
    videoFrame.src = '';
  });
});

</script>







<section class=" py-4 comment" data-aos="fade-up" data-aos-duration="1000">
  <div class="container py-5 text-center "  >
    <h2 class="center main-heading title-anime">TESTIMONIAL FROM SCHOOL</h2><br>
    <div class="owl-carousel testimonials owl-theme" id="zindex" >
         <?php
            $conn = $pdo->open();

            try{
              $stmt = $conn->prepare("SELECT * FROM school_testimonial WHERE status='Active'");
              $cnt=1;
              $stmt->execute();
              foreach($stmt as $row){
            $image = (!empty($row['image'])) ? 'admin/assets/images/school/'.$row['image'] : 'assets/images/users/profile.jpg';
                
            ?>
      <div class="item">
        <div class="card anime text-center shadow testimonial ">
          <div class="card-body">
            <img src="<?php echo $image;?>" alt="school-latters" class="school-testi">
          </div>
        </div>
      </div>
      <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?> 
   
    </div>
  </div>
</section> 

<!-- school logo slider -->

<section>
    <div class="logos">
        <div class="logos-slide">
           <img src="asset/image/Vidya Vikas International School.png" alt="school-latters" >
          <img src="asset/image/MVP'S LOGO.jpg" alt="school-latters" >
          
          <img src="asset/image/Rajiv Gandhi International School, Malegaon.png" alt="school-latters" >
          <img src="asset/image/Chaitanya Valley International School.jpeg" alt="school-latters" >
          <img src="asset/image/HAP International School.jpg" alt="school-latters" >
          <img src="asset/image/Horizon Academy Nashik.png" alt="school-latters" >
          <img src="asset/image/Mahatma Gandhi Vidyamandir.png" alt="school-latters" >
          <img src="asset/image/Apex International School Pune.jpeg" alt="school-latters" >
          <img src="asset/image/Divine English Medium School.jpeg" alt="school-latters" >
          
          
        </div>
        
        
      </div>
</section>



<section class="school py-5">
    <div class="container text-center" data-aos="zoom-in"> 
        <h2 class="main-heading">OUR VALUABLE TIE UP SCHOOL</h2>
        <h5 class="mh1">List of major school projects where I-Genius Abacus & Vedic Math’s courses are running.</h5>
        <div class="table-responsive mt-5">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Sr.No.</th>
                  <th scope="col">Name of the School</th>
                  <th scope="col">Area/City</th>
                  <th scope="col">School Medium</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                        $conn = $pdo->open();
    
                        try{
                          $stmt = $conn->prepare("SELECT * FROM tbl_clients WHERE status='Active' Order By creation_on ASC");
                          $cnt=1;
                          $stmt->execute();
                          foreach($stmt as $row){
                           // $image = (!empty($row['image'])) ? 'assets/images/achivement/'.$row['image'] : 'assets/images/users/profile.jpg';
                            
                    ?>
                <tr>
                  <th scope="row"><?php echo $cnt++;?></th>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['area'];?> </td>
                  <td><?php echo $row['medium'];?> </td>
                </tr>
                 <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>  
              </tbody>
        </table>

        </div>
    </div>
</section>



<!--AOS ANimation Script-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
          once: true, // Ensures animation happens only once
          offset: 200, // Offset (in px) from the original trigger point
          duration: 1000 // Duration of animation
        });
      });
    </script>

<script>
// logo scroll 
 const copy = document.querySelector(".logos-slide").cloneNode(true);
    document.querySelector(".logos").appendChild(copy);
    
// testimonial aoutoslider script
$(document).ready(function () {
  $('.testimonials').owlCarousel({
      items: 4,
      nav: true,
      loop: true,
      mouseDrag: true,
      responsiveClass: true,
      navText: ["<i class='icofont-bubble-left'></i>", "<i class='icofont-bubble-right'></i>"],
      autoplay: true, // Enable autoplay
      autoplayTimeout: 3000, // Set autoplay timeout in milliseconds (e.g., 3000ms = 3 seconds)
      responsive: {
          0: {
              items: 1
          },
          600: {
              items: 2
          },
          1000: {
              items: 3
          },
          
      }
  });
});
//  aoutoslider script

$(document).ready(function () {
  $('.ath_carousel_se_04_carousel').owlCarousel({
      items: 4,
      nav: true,
      loop: false,
      mouseDrag: true,
      responsiveClass: true,
      navText: ["<i class='icofont-bubble-left'></i>", "<i class='icofont-bubble-right'></i>"],
      autoplay: true, // Enable autoplay
      autoplayTimeout: 3000, // Set autoplay timeout in milliseconds (e.g., 3000ms = 3 seconds)
      responsive: {
          0: {
              items: 1
          },
          480: {
              items: 2
          },
          767: {
              items: 3
          },
          992: {
              items: 3
          },
          1200: {
              items: 5
          }
      }
  });
});





</script>

<!-- SCRIPT FOR TESTIMONIAL -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:3
          }
      }
    });
  });
</script>



<?php include'footer.php';?>