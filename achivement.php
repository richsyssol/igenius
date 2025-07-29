<?php include 'head.php'; ?>
<?php include'header.php';?>

<section class='banimg'>
    <div class="image-container">
        <img class='w-100 d-block responsive-img' src="asset/image/5.png" alt="achivement-banner">
    </div>
    
</section>


<section class="courseimg">
    <div class="container py-4" >
        <div class="row justify-content-center " >
            <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM tbl_achivement ORDER BY id DESC");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['image'])) ? 'admin/assets/images/achivement/'.$row['image'] : 'assets/images/users/profile.jpg';
                        
                ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 pt-3 anime1" data-aos="zoom-in" data-aos-duration="1000">
                <div class="text-center p-3 shadow awardcard">
                    <img src="<?php echo $image;?>" class="img-fluid" height="400" width="400" alt="award">
                    <h5 class="mt-4 mh1"><?php echo $row['name'];?>
                    </h5><br> 
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

<!-- Modal for image popup slider -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mh1" id="imageModalLabel"><?php echo $row['name'];?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <!-- Images will be dynamically inserted here -->
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

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

<!-- Script for open popup image slider -->
<script>
$(document).ready(function() {
    $('.awardcard').on('click', function() {
        var src = $(this).find('img').attr('src');
        var carouselInner = $('#imageCarousel .carousel-inner');
        carouselInner.empty(); // Clear previous images
        
        // Add the clicked image as the first item
        carouselInner.append('<div class="carousel-item active"><img src="' + src + '" class="d-block w-100" alt="Image"></div>');
        
        // Add other images
        $('.awardcard').each(function() {
            var imgSrc = $(this).find('img').attr('src');
            if (imgSrc !== src) { // Avoid adding the clicked image again
                carouselInner.append('<div class="carousel-item"><img src="' + imgSrc + '" class="d-block w-100" alt="Image"></div>');
            }
        });

        $('#imageModal').modal('show');
    });
});
</script>






<?php include'footer.php';?>