<?php include'head.php'?>
<?php 
session_start();
session_unset();
session_destroy();

include'header.php';

?>

<!--Pop up banner image-->
<section>
    <div class="popup" id="popup">
        <span class="close-btn btn-danger p-2" onclick="closePopup()">X</span>
        <?php
                $conn = $pdo->open();

                try{
                  $stmt = $conn->prepare("SELECT * FROM tbl_popup  Order By rand() DESC");
                  $cnt=1;
                  $stmt->execute();
                  foreach($stmt as $row){
                    $image = (!empty($row['image'])) ? 'admin/assets/images/popup/'.$row['image'] : 'assets/images/users/profile.jpg';
                    
            ?>
        <img src="<?php echo $image;?>" alt="Popup Image">
          <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>       
        <div class="text-center pt-4">
            <a href="#" class="btn btn-primary rounded-pill demo-btn" data-bs-toggle="modal" data-bs-target="#demoModal">Demo Class</a>
            <div class="modal fade" id="demoModal" tabindex="-1" aria-labelledby="demoModalLabel" aria-hidden="true">
                       <form action="test.php" method="post">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title main-heading" id="demoModalLabel">Enquiry Form</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body popup-form">
                     
                                <input type="hidden" name="DemoClass_form" value="DemoClass_form" class="form-control"><br>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name*" required><br>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email*" required><br>
                                <input type="text" name="contact" id="contact" class="form-control" placeholder="Enter Contact No*" required><br>
                                <textarea name="address" id="address" class="form-control" placeholder="Enter Your Address*" required></textarea><br>
                                <select class="form-select form-control" name="course" aria-label="Default select example" required>
                                    <option selected>Select Course</option>
                                    <option value="Abacus">Abacus</option>
                                    <option value="Vedic Math">Vedic Math</option>
                                    <option value="Rubik Cube">Rubik Cube</option>
                                    <option value="Handwriting Improvement">Handwriting Improvement</option>
                                    <option value="Chess">Chess</option>
                                </select><br>
                                <select class="form-select form-control" name="mode" aria-label="Default select example" required>
                                    <option selected>Select Mode</option>
                                    <option value="Online">Online</option>
                                    <option value="Offline">Offline</option>
                                </select><br>
                    
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                    </form>
            </div>

        </div>
            
    </div>
</section>

<!-- carousel code -->
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php
                $conn = $pdo->open();
                $firstItem = true;
                $index = 0;

                try {
                    $stmt = $conn->prepare("SELECT * FROM banner ORDER BY creationDate DESC");
                    $stmt->execute();
                    foreach ($stmt as $row) {
                        ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $index; ?>" <?php if ($firstItem) { echo 'class="active" aria-current="true"'; $firstItem = false; } ?> aria-label="Slide <?php echo $index + 1; ?>"></button>
                        <?php 
                        $index++;
                    }
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
                $pdo->close();
            ?>  
        </div>
        <div class="carousel-inner">
            <?php
                $conn = $pdo->open();
                $firstItem = true;

                try {
                    $stmt = $conn->prepare("SELECT * FROM banner ORDER BY creationDate DESC");
                    $stmt->execute();
                    foreach ($stmt as $row) {
                        $image = (!empty($row['image'])) ? 'admin/assets/images/banner/'.$row['image'] : 'admin/assets/images/users/profile.jpg';
                        ?>
                        <div class="carousel-item <?php if ($firstItem) { echo 'active'; $firstItem = false; } ?>">
                            <img src="<?php echo $image; ?>" class="d-block w-100" style="max-height: 500px;" alt="banner image">
                        </div>
                        <?php 
                    }
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                $pdo->close();
            ?>  
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


<!-- slider text -->
<div class="marquee">
  <ul>
       <?php
                $conn = $pdo->open();

                try{
                  $stmt = $conn->prepare("SELECT * FROM tbl_scroll_text");
                  $cnt=1;
                  $stmt->execute();
                  foreach($stmt as $row){
                    //$image = (!empty($row['image'])) ? 'admin/assets/images/popup/'.$row['image'] : 'assets/images/users/profile.jpg';
                    
            ?>
    <li onmouseover="openForm()"><?php echo $row['name'];?></li>

      <?php 
                    }
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                $pdo->close();
            ?>  
  </ul>
</div>
    <div class="form-popup" id="myForm">
  <div class="form-container exam-popup">
    <div class="col-md-12 mb-3 c-card">
        <div class="card p-3 shadow anime1 h-50">
            
                
           
            <div class="mt-1">
                <h3 class="heading main-heading"><?php echo $row['name'];?></h3>
                
            </div>
            <div class="d-flex justify-content-between">
                
                    
                    <div class="ms-2 c-details">
                        <h6 class="mb-0"><strong>Date : </strong></h6> <span><?php echo $row['name'];?></span>
                        <h6 class="mb-0"><strong>Compitation Vanue :</strong> </h6><span><?php echo $row['compitation_menu'];?></span>
                        <h6 class="mb-0"><strong>Category :</strong> </h6><span><?php echo $row['category'];?></span>
                        <h6 class="mb-0"><strong>Exam Details :</strong> </h6><span><?php echo $row['exam_details'];?></span>
                        <h6 class="mb-0"><strong>Contact  :</strong> </h6> <span> <?php echo $row['contact'];?></span>
                        </div>
                    </div>
                
            </div>
        </div>

    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </div>
</div>
<!--slider text popup massage-->


<!--Counter section-->
<section class='py-3'>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-2 col-sm-6 col-12 col-custom">
                <div class="counter yellow">
                    <div class="counter-icon">
                        <span><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/fad227/europe.png" alt="europe"/></span>
                    </div>
                    <span class="counter-value">5</span>
                    <h3>Presents in 5 + countries</h3>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-12 col-custom">
                <div class="counter orange">
                    <div class="counter-icon">
                        <span><img width="50" height="50" src="https://img.icons8.com/pulsar-line/48/fa871c/franchise.png" alt="franchise"/></span>
                    </div>
                    <span class="counter-value">550</span>
                    <h3>Authorized Franchisees</h3>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-12 col-custom">
                <div class="counter red">
                    <div class="counter-icon">
                        <span><img width="50" height="50" src="https://img.icons8.com/wired/64/dd4655/students.png" alt="students"/></span>
                    </div>
                    <span class="counter-value">150000</span>
                    <h3>Trained Students Since 2009</h3>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-12 col-custom">
                <div class="counter blue">
                    <div class="counter-icon">
                        <span><img width="50" height="50" src="https://img.icons8.com/ios/50/1cb1c2/personal-trainer.png" alt="personal-trainer"/></span>
                    </div>
                    <span class="counter-value">50</span>
                    <h3>Qualified <br> Trainers</h3>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-12 col-custom">
                <div class="counter green"> 
                    <div class="counter-icon">
                        <span><img width="50" height="50" src="https://img.icons8.com/material-outlined/24/75c248/group-of-projects.png" alt="group-of-projects"/></span>
                    </div>
                    <span class="counter-value">50</span>
                    <h3>School Project Association</h3>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- We Are Info -->
<section class="story" data-aos="fade-right" data-aos-duration="1000">
  <div class="container py-5 anime1">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="main-heading">WE ARE... <span><img src="asset/image/logo.png" alt=""></span></h1>  
        <h3 class="mh1">An ISO 9001-2015 Certified Company I Authorised by EBVTR Govt. of India</h3>
      </div>
    </div>
    <div class="row pt-4">
      <div class="col-12 col-lg-7" >
        <p class="fs-6"><span class="fw-bold">Welcome to I-Genius Abacus Academy India Pvt Ltd</span> Established in the year 2007, I-Genius has been a pioneer in providing high-quality Abacus Education to students across India and abroad. With a strong commitment to excellence and a passion for education.</p>
        <p>Our academy is proud to have a network of <span class="text-danger fw-bold">550 Franchisees</span>  running all over India and abroad. <span class="text-info fw-bold">165+ School Project Associations</span> and we successfully trained over <span class="text-success fw-bold">1.5 lakh students</span> in Abacus Education since the <span class="text-warning fw-bold">year 2007</span>.</p>
        <p>At I-Genius Abacus, we offer dedicated Online / Offline Classes for Kids of every Course offered by the Academy. The Courses are designed for students in the age group of 6-14 years. These courses promote Whole Brain development by stimulating both sides of the brain along with enhancement in skills, which leads to greater confidence in students to succeed in the School Curriculum & also in all walks of life. Our goal is to empower students with the skills and confidence they need to excel in academics and beyond.</p>
        <p>Join us at I-Genius Abacus Academy and unlock the endless possibilities that abacus training has to offer. Let us help your child become a confident, skilled, and successful learner.</p>
      </div>
      <div class="youtube col-12 col-5 col-lg-5 text-center" >
        <iframe width="400" height="315" src="https://www.youtube.com/embed/Zz8OidJqZQ8?si=7_N2oEicjkOY277w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h5 class='mh1'>Together, we can shape a brighter future for our students!</h5>
      </div>
    </div>
  </div>
</section>


<!--best of our courses-->
<section class="courseimg course">
    <div class="container py-4">
        <div class="text-center">
            <h2 class="main-heading">BEST OF OUR COURSES</h2>
        </div>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
            <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM tbl_course Order By creation_on ASC");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['image'])) ? 'admin/assets/images/course/'.$row['image'] : 'admin/assets/images/users/profile.jpg';
                        
                        ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 pt-3 anime1">
                <div class="text-center p-3 course-card">
                    <img src="<?php echo $image;?>" height="200" width="200" alt="course-thumbnail">
                    <h5 class="mt-4 mh2"><?php echo $row['name'];?></h5><br> 
                    <a href="courses.php?id=<?php echo $row['id'];?>" class="btn btn-info rounded-pill">READ MORE</a>
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



<!-- why igenius abacus -->
<section class="why p-4">
  <div class="container text-center mt-2">
    <div class="row mt-3 justify-content-center">
       <div data-aos="zoom-in">
           <h2 class="main-heading">WHY I-GENIUS ABACUS ? </h2>
            <h6 class="mh1">I-Genius Academy is recognised as a "One of The Best
           Abacus Institute in Maharashtra" and authorised by <br> Educational board of Vocational Training & Research Mumbai (Regd. by Govt. of India.)</h6>
            <h5 class="text-danger">I-Genius Abacus is largest world recorder institute in <br>"Wonder Book of International London"</h5>
       </div>
        <div class="col-md-4 pt-3" data-aos="fade-up" data-aos-duration="1000">
          <div class="card anime abc p-3" style='background-color:#dff3f3;'>
            <span> <center><img src="asset/image/icon1.png" class="card-img-top hicon" alt="Trainer icon"></center></span>
             <div class="card-body">
              <h5 class="card-title mh1">Qualified Trainers</h5>
              <p class="card-text">A Strong team of 50+ Highly Motivated and well trained Teachers. Your Kids Will Learn from the Math Experts.</p>
            </div>
          </div>
        </div>
      <div class="col-md-4 pt-3" data-aos="fade-up" data-aos-duration="1000">
        <div class="card anime abc p-3" style='background-color: #fff9bb;'>
          <span> <center><img src="asset/image/icon2.png" class="card-img-top hicon" alt="Study-material icon"></center></span>
           <div class="card-body">
            <h5 class="card-title mh1">Study Material</h5>
            <p class="card-text">Well researched books developed by child aged groups and level wise and also child friendly abacus tools board games</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 pt-3" data-aos="fade-up" data-aos-duration="1000">
        <div class="card anime abc p-3" style='background-color: #cfe7fb;'>
          <span> <center><img src="asset/image/icon3.png" class="card-img-top hicon" alt="online/offline icon" style="width: 85px;height: 70px;"></center></span>
           <div class="card-body">
            <h5 class="card-title mh1">Online / Offline Classes</h5>
            <p class="card-text">Conducting Online/Offline classes for all courses offered by the academy.</p>
          </div>
        </div>
      </div>
    
      <div class="col-md-4 pt-3" data-aos="fade-up" data-aos-duration="1000">
        <div class="card anime abc p-3" style='background-color: #dff3b6;'>
          <span> <center><img src="asset/image/icon4.png" class="card-img-top hicon" alt="championship icon" style="width: 114px;height: 100px;"></center></span>
            <div class="card-body text-center">
            <h5 class="card-title mh1">National Competitions</h5>
            <p class="card-text">Organized Abacus District/State National/Interristianal jouel competition every wear to iminate our student's 
             exam fear and crestere them master in matti's.</p>
            <!-- <i class="fas fa-star fa-3x"></i> You can replace this icon with your desired one -->
          </div>
        </div>
      </div>
      
      <div class="col-md-4 pt-3" data-aos="fade-up" data-aos-duration="1000">
       <div class="card anime abc p-3" style='background-color: #f9e5de;'>
         <span> <center><img src="asset/image/icon5.png" class="card-img-top hicon" alt="Association icon" style="width: 114px;height: 100px;"></center></span>
          <div class="card-body">
           <h5 class="card-title mh1">Associations</h5>
           <p class="card-text">Associated with some of the most prestigious schools and Institute in Nashik With over 10 thousand plus students
             studding Abacus Course in the current year.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  
</section>


<!-- Award image -->
<section class="ath_carousel_se_04"  data-aos="fade-up" data-aos-duration="1000">
  <div class="container-fluid px-0 py-5 moment">
      <div class="container ">
          <div class="row">
              <div class="col-sm-12 text-center">
                <h2 class="title-anime main-heading">SHINING MOMENT'S</h2>
              </div>
              <div class="col-md-12 px-4 pt-3 " id="zindex">
                  <div class="owl-carousel ath_carousel_se_04_carousel owl-theme">
                      <!-- 01 -->
                      <?php
                $conn = $pdo->open();
                $firstItem = true;

                try {
                    $stmt = $conn->prepare("SELECT * FROM tbl_event ");
                    $stmt->execute();
                    foreach ($stmt as $row) {
                        $image = (!empty($row['image'])) ? 'admin/assets/images/event/'.$row['image'] : 'admin/assets/images/users/profile.jpg';
                        ?>
                    <div class="card event anime">
                      <div class="item">
                        <div class="col-sm-12 delay-1">
                            <div class="">
                                <div class="product-image3 ath_hover">
                                  <a href="shining_moment_detail.php?id=<?php echo $row['id'];?>"><img src="<?php echo $image;?>" height="200px" class="card-img-top" alt="Event Image"></a>

                                </div>
                                <div class="text-center">
                                   <a href="shining_moment_detail.php?id=<?php echo $row['id'];?>"><h4 class="mt-3 mh1"><?php echo $row['name'];?></h4></a>
                                </div>
                            </div>
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

          </div>

          <!-- our clients -->

      </div>
  </div>
</section>



<!-- math calculation youtube video -->
<section class="ath_carousel_se_04" data-aos="fade-up" data-aos-duration="1000">
  <div class="container-fluid px-0 py-5 mathvideo">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center" data-aos="zoom-in">
          <h2 class="main-heading">MATH CALCULATION</h2>
          <h5 class="text-danger">I-GENIUS STUDENTS PERFORMING MENTAL MATH CALCULATIONS</h5><br>
          <h5 class='mh1'>
            Students trained at I-Genius Abacus Academy can calculate faster than a calculator. They are ready to perform their Mental Math calculations with great accuracy and speed.
          </h5>
        </div>
        <div class="col-md-12 px-4 pt-3" id="zindex">
          <div class="owl-carousel ath_carousel_se_04_carousel owl-theme">
            <?php
              $conn = $pdo->open();

              try {
                $stmt = $conn->prepare("SELECT * FROM tbl_math_video");
                $stmt->execute();
                foreach ($stmt as $row) {
            ?>
            <div class="card anime">
              <div class="item">
                <div class="col-sm-12 delay-1">
                  <div class="position-relative">
                    <div class="product-image3 ath_hover">
                      <iframe width="250" height="200" src="<?php echo $row['url']; ?>?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="position-absolute w-100  h-100 top-0 d-flex justify-content-center align-items-center">
                        <button class="btn btn-danger play-video-btn p-4" data-video-url="<?php echo $row['url']; ?>">Play </button>
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




<!-- PROVIDE CLASS MODE -->
<section class="pro py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="main-heading">WITH I-GENIUS YOU CAN JOIN ABACUS ONLINE CLASSES OR OFFLINE CLASSES</h2>
                </div>
                <div class="row mt-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-12 col-md-6 pt-3">
                        <div class="text-center class-mode p-5">
                            <h3 class='mh1'>OFFLINE CLASSES</h3>
                            <p>If you are looking for Offline Abacus classes near you, raise an inquiry. I-Genius has over 500 plus Abacus centers Globally. We shall contact you with the details of our nearest Abacus center.</p>
                            <div class="btn">
                                <br><br>
                                <button type="button" class="btn btn-success border-3 text-light rounded-pill" data-bs-toggle="modal" data-bs-target="#inquiryModal"><b>Enquire Now</b></button>
                                <br><br>
                                <a href="find-us.php" class="btn btn-outline-info border-3 text-dark"><b>Find Nearest Abacus Centre</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pt-3">
                        <div class="text-center class-mode p-5">
                            <h3 class='mh1'>ONLINE CLASSES</h3>
                            <p>If you are looking for an Abacus Online classes, book a free demo class for a firsthand experience at the World's finest Abacus E-Learning Platform of I-Genius Abacus.</p>
                            <div class="btn">
                                <br><br>
                                <button type="button" class="btn btn-success border-3 text-light rounded-pill" data-bs-toggle="modal" data-bs-target="#inquiryModal"><b>Enquire Now</b></button>
                                <br><br>
                                <a href="find-us.php" class="btn btn-outline-info border-3 text-dark"><b>Find Nearest Abacus Centre</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inquiryModalLabel">Inquiry  Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body popup-form">
                    <form action="test.php" method="post">
                        <input type="hidden" name="OnOff-Mode-form" value="DemoClass_form" class="form-control"><br>
                        
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" required><br>
                        
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" required><br>
                    
                        <input type="tel" class="form-control" name="contact" id="phone" placeholder="Enter your Phone No" required><br>
                    
                        <select class="form-select" name="mode" id="mode" required>
                            <option value="">Select Mode</option>
                            <option value="offline">Offline</option>
                            <option value="online">Online</option>
                        </select><br>
                   
                        <textarea class="form-control" id="message" name="message" placeholder="Enter your message" rows="3"></textarea><br>
                   
                        <button type="submit" name='submit' class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- PARENT TESTIMONIAL -->
<section class='comment' data-aos="fade-up" data-aos-duration="1000">
  <div class="container py-5 text-center"  >
    <h2 class="center main-heading title-anime">PARENT'S TESTIMONIAL</h2><br>
    <div class="owl-carousel testimonials owl-theme" id="zindex" >
        <?php
            $conn = $pdo->open();

            try{
              $stmt = $conn->prepare("SELECT * FROM parent_testi  Order By creation_on DESC");
              $cnt=1;
              $stmt->execute();
              foreach($stmt as $row){
                $image = (!empty($row['image'])) ? 'admin/assets/images/parent/'.$row['image'] : 'assets/images/users/profile.jpg';
                
        ?>
      <div class="item parent-t">
        <div class="card anime text-center shadow testimonial ">
          <div class="card-body">
            <img src="<?php echo $image;?>" alt="parents image" class="rounded-icon">
            <h5 class="card-title mh1 pt-3"><?php echo $row['name'];?></h5>
            <p class="card-text fw-bold"><?php echo $row['about'];?></p>
            <p class="card-text"><?php echo $row['description'];?>
</p>
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




<!-- Social Media icon -->
<!--<section>-->
<!--  <div class="position-fixed inqiry-btn">-->
<!--    <a href="https://www.instagram.com/igenius_abacus_/" target="_blank"><img width="40" height="40" src="https://img.icons8.com/fluency/48/instagram-new.png" alt="instagram-new"/></a><br>-->
<!--    <a href="https://www.facebook.com/igeniusabacus/" target="_blank"><img width="40" height="40" src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new"/></a><br>-->
<!--    <a href="https://www.youtube.com/@i-geniusabacusacademy8416" target="_blank"><img width="40" height="40" src="https://img.icons8.com/color/48/youtube-play.png" alt="youtube-play"/></a><br>-->
<!--    <a href="https://api.whatsapp.com/send?phone=7770045402&text=<?php echo $row['name'];?>" target="_blank"><img width="40" height="40" src="https://img.icons8.com/color/48/whatsapp--v1.png" alt="whatsapp--v1"/></a><br>-->
    <!-- <a class="btn btn-primary " href="#">ENQUIRY</a> -->
<!--  </div>-->
<!--</section>-->

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
    
    
<script src="{% static 'javascript/card-slider.js' %}"></script>
<script>
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

// script for card slider

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
          600: {
              items: 2
          },
          1000: {
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

//Pop-up Banner 
// Close the popup
        function closePopup() {
            document.getElementById('popup').style.top = '-100%'; // Move the pop-up off-screen from the top
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            // Show the popup after 30 seconds
            setTimeout(function() {
                document.getElementById('popup').style.top = '50%';
            }, 15000); // 30000 milliseconds = 30 seconds
        });



</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 
<script>
    $(document).ready(function(){
        $('.counter-value').each(function(){
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            },{
                duration: 3500,
                easing: 'swing',
                step: function (now){
                    $(this).text(Math.ceil(now));
                }
            });
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

<script>
  //script for counter
  (function ($) {
    $.fn.countTo = function (options) {
      options = options || {};
      
      return $(this).each(function () {
        // set options for current element
        var settings = $.extend({}, $.fn.countTo.defaults, {
          from:            $(this).data('from'),
          to:              $(this).data('to'),
          speed:           $(this).data('speed'),
          refreshInterval: $(this).data('refresh-interval'),
          decimals:        $(this).data('decimals')
        }, options);
        
        // how many times to update the value, and how much to increment the value on each update
        var loops = Math.ceil(settings.speed / settings.refreshInterval),
          increment = (settings.to - settings.from) / loops;
        
        // references & variables that will change with each update
        var self = this,
          $self = $(this),
          loopCount = 0,
          value = settings.from,
          data = $self.data('countTo') || {};
        
        $self.data('countTo', data);
        
        // if an existing interval can be found, clear it first
        if (data.interval) {
          clearInterval(data.interval);
        }
        data.interval = setInterval(updateTimer, settings.refreshInterval);
        
        // initialize the element with the starting value
        render(value);
        
        function updateTimer() {
          value += increment;
          loopCount++;
          
          render(value);
          
          if (typeof(settings.onUpdate) == 'function') {
            settings.onUpdate.call(self, value);
          }
          
          if (loopCount >= loops) {
            // remove the interval
            $self.removeData('countTo');
            clearInterval(data.interval);
            value = settings.to;
            
            if (typeof(settings.onComplete) == 'function') {
              settings.onComplete.call(self, value);
            }
          }
        }
        
        function render(value) {
          var formattedValue = settings.formatter.call(self, value, settings);
          $self.html(formattedValue);
        }
      });
    };
    
    $.fn.countTo.defaults = {
      from: 0,               // the number the element should start at
      to: 0,                 // the number the element should end at
      speed: 1000,           // how long it should take to count between the target numbers
      refreshInterval: 100,  // how often the element should be updated
      decimals: 0,           // the number of decimal places to show
      formatter: formatter,  // handler for formatting the value before rendering
      onUpdate: null,        // callback method for every time the element is updated
      onComplete: null       // callback method for when the element finishes updating
    };
    
    function formatter(value, settings) {
      return value.toFixed(settings.decimals);
    }
  }(jQuery));
  
  jQuery(function ($) {
    // custom formatting example
    $('.count-number').data('countToOptions', {
    formatter: function (value, options) {
      return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
    });
    
    // start all the timers
    $('.timer').each(count);  
    
    function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    $this.countTo(options);
    }
  });
  
  
  
  



</script>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


<?php include'footer.php';?>