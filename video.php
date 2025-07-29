<?php include 'head.php'; ?>
<?php include'header.php';?>

<section class='banimg'>
    <div class="image-container">
        <img class='w-100 d-block responsive-img' src="asset/image/Videos.png" alt="video-banner">
    </div>
    
</section>

<section class="py-3">
    <div class="container text-center">
        <div class="row justify-content-center">
            <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM tbl_videos");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                        //$image = (!empty($row['image'])) ? 'admin/assets/images/photos/'.$row['image'] : 'assets/images/users/profile.jpg';
                        
                ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-3 py-4 anime1" data-aos="fade-up" data-aos-duration="1000">
                <div class="card videocard">
                    <iframe width="100%" height="200" src="<?php echo $row['video_url'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    
                    <div class="card-body text-center">
                        <h5 class="card-title mh1" ><?php echo $row['name'];?></h5>
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

<?php include'footer.php';?>