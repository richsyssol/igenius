<?php include 'head.php'; ?>
<?php include'header.php';?>
<?php
    
    $conn = $pdo->open();

    $id = $_GET['id'];

    try{
                
    $stmt = $conn->prepare("SELECT * FROM tbl_course WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $slug = $stmt->fetch();
    }
    catch(PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
    }
    //page view
    // $now = date('Y-m-d');
   
       // $stmt = $conn->prepare("UPDATE tbl_property SET counter=counter+1 WHERE id=:id");
      //  $stmt->execute(['id'=>$property['prodid']]);
    ?>
<section class='banimg'>
    <div class="image-container">
            <?php
            $conn = $pdo->open();

            try{
              $stmt = $conn->prepare("SELECT * FROM tbl_course WHERE id='".$slug['id']."'");
              $cnt=1;
              $stmt->execute();
              foreach($stmt as $row){
            $banner = (!empty($row['banner'])) ? 'admin/assets/images/course/banner/'.$row['banner'] : 'assets/images/users/profile.jpg';
                
            ?>
        <img class='w-100 d-block responsive-img' src="<?php echo $banner;?>" alt="<?php echo $slug['name'];?>">
                <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?> 
    </div>
    
</section>





<section>
 <div class="container">
    <div class="col-12 col-md-12 col-lg-12">
       <?php echo $slug['contain'];?>

   <div class="row">
     <div class="col-md-6 course-info">
       <div class="card abc">
         <div class="card-body">
           <!-- <h5 class="card-title">Card Title</h5> -->
             <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM  tbl_course_type WHERE c_id='".$slug['id']."'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                     //   $image = (!empty($row['image'])) ? 'assets/images/banner/'.$row['image'] : 'assets/images/users/profile.jpg';
                        
                        ?>
           <p class="card-text"><span class="text-danger fw-bold"> <?php echo $row['name'];?></span><br>  <?php echo $row['description'];?>
                <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>      
         </p>
         </div>
       </div>
     </div>
     <div class="col-md-6">
          <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM tbl_course WHERE id='".$slug['id']."' Order by rand() DESC");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['image'])) ? 'admin/assets/images/course/contain/'.$row['c_image'] : 'assets/images/users/profile.jpg';
                        
                        ?>
       <img src="<?php echo $image;?>" width="600"  height="600"class=" img-fluid abacusimg pt-2" alt="Placeholder Image">
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
 <br>
 
 
 <br>
 <!--<center><a class="btn btn-primary" href="#">  Enquiry Now  </a></center>-->

<!-- Button trigger modal -->
<center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Enquiry Now
</button></center>

<!--pop up form Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title main-heading" id="exampleModalLabel">Enquiry Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
          <form  action="test.php" method='post'>
      <div class="modal-body popup-form">
    
            <input type="hidden" name="Course-inquiry-form" value="Course_form" class="form-control"><br>
            <input type="text" name="name" id="" class="form-control" placeholder="Enter Your Name*" required><br>
            <input type="email" name="email" id="" class="form-control" placeholder="Enter Your Email*"><br>
            <input type="text" name="contact" id="" class="form-control" placeholder="Enter Contact No*" required><br>
            <textarea name="address" id="" name="address" class="form-control" placeholder="Enter Your Address*" required></textarea><br>
            <select class="form-select form-control" name="course" aria-label="Default select example" required>
                <option selected>Select Course</option>
                <option value="Abacus">Abacus</option>
                <option value="Vedic Math">Vedic Math</option>
                <option value="Rubik Cube">Rubik Cube</option>
                <option value="Handwriting Improvement">Handwriting Improvement</option>
                <option value="Chess">Chess</option>
            </select><br>
            <textarea  id="" name="message" class="form-control" placeholder="Enter Your Massage*"></textarea><br>
   
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
         </form>
    </div>
  </div>
    
</div>
</section>

<!-- Other courses -->
<section class="ath_carousel_se_04 py-5 mt-5 color">
  <div class="container-fluid px-0" height="800">
      <div class="container ">
          <div class="row anime">
              <div class="col-sm-12 text-center">
                <h2 class="main-heading">OTHER COURSES</h2>
              </div>
              <div class="col-md-12 px-4 pt-3">
                  <div class="owl-carousel ath_carousel_se_04_carousel owl-theme" style= "height: 250px;">
                      <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM tbl_course Order by rand() DESC");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['image'])) ? 'admin/assets/images/course/'.$row['image'] : 'assets/images/users/profile.jpg';
                        
                        ?>
                      <a href="courses.php?id=<?php echo $row['id'];?>" class="card">
                        <img src="<?php echo $image;?>" class="card__image" alt="courses-image" / style="height:  242px  " >
                      </a>
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

          

      </div>
  </div>
</section>




<!--course related youtube video-->
<section class="ath_carousel_se_04 my-5">
  <div class="container-fluid px-0">
    <div class="container">
      <div class="row anime">
        <div class="col-sm-12 text-center">
          <h2 class="main-heading"><?php echo $slug['name']; ?></h2>
        </div>
        <div class="col-md-12 px-4 pt-3" id="zindex">
          <div class="owl-carousel ath_carousel_se_04_carousel owl-theme">
            <?php
              $conn = $pdo->open();

              try {
                $stmt = $conn->prepare("SELECT * FROM tbl_c_video WHERE c_id='" . $slug['id'] . "' ORDER BY rand() DESC");
                $stmt->execute();
                foreach ($stmt as $row) {
            ?>
            <div class="card">
              <div class="item">
                <div class="col-sm-12 delay-1">
                  <div class="product-image3 ath_hover position-relative">
                    <iframe width="250" height="200" src="<?php echo $row['video_url']; ?>?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
      videoFrame.src = `${videoUrl}?autoplay=1`;
      videoModal.show();
    });
  });

  document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
    videoFrame.src = '';
  });
});


</script>


 

<!-- FAQ -->
<section class="faqc">
  <div class="container text-center py-5">
    <h2 class="main-heading">FREQUENTLY ASKED QUESTIONS</h2>
    <div class="row pt-3">
      <div class="col-md-12 mb-4">
        <div class="accordion">
            <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM course_faq WHERE course_id='".$slug['id']."'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                       // $image = (!empty($row['image'])) ? 'admin/assets/images/course/contain/'.$row['image'] : 'assets/images/users/profile.jpg';
                        
            ?>
          <div class="accordion-item">
            <button id="accordion-button-1" aria-expanded="false">
              <span class="accordion-title"><?php echo $row['title'];?></span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p><?php echo $row['description'];?></p>
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
  </div>
</section>


	
<script>
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
  
// script for faq 
const items = document.querySelectorAll('.accordion button');

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach((item) => item.addEventListener('click', toggleAccordion));

    // script for when page load transition will be done
    document.addEventListener("DOMContentLoaded", function() {
        let cards = document.querySelectorAll('section');

        function triggerAnimation() {
            cards.forEach(card => {
                if (isElementInViewport(card) && !card.classList.contains('show-animate')) {
                    card.classList.add('show-animate');
                }
            });
        }

        window.addEventListener('scroll', triggerAnimation);
        triggerAnimation(); // Trigger the animation on page load

        function isElementInViewport(el) {
            let rect = el.getBoundingClientRect();
            let windowHeight = window.innerHeight || document.documentElement.clientHeight;
            let windowWidth = window.innerWidth || document.documentElement.clientWidth;

            // Adjust the threshold based on the device width
            let threshold = windowWidth > 768 ? windowHeight * 0.5 : windowHeight * 0.8;

            return (
                rect.top >= -threshold &&
                rect.left >= 0 &&
                rect.bottom <= (windowHeight + threshold) &&
                rect.right <= windowWidth
            );
        }
    });

</script>
	


<?php include'footer.php';?>
