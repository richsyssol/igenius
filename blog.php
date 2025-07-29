<?php include 'head.php'; ?>
<?php include'header.php';?>

<section class='banimg'>
    <div class="image-container">
        <img class='w-100 d-block responsive-img' src="asset/image/1.png" alt="blog-banner">
    </div>
    
</section>



<!-- Blog 4 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8">

  <div class="container overflow-hidden">
    <div class="row gy-4 gy-lg-0">
        <?php
                                            $conn = $pdo->open();
                        
                                            try{
                                              $stmt = $conn->prepare("SELECT * FROM blogs  Order By created_on DESC");
                                              $cnt=1;
                                              $stmt->execute();
                                              foreach($stmt as $row){
                                                $image = (!empty($row['blog_img'])) ? 'admin/assets/images/blog/'.$row['blog_img'] : 'assets/images/users/profile.jpg';
                                                
                                        ?>
      <div class="col-12 col-lg-4 py-4">
        <article>
          <div class="card border-0 shadow">
            <figure class="card-img-top m-0 overflow-hidden ">
              <a href="#!">
                <img class="img-fluid " loading="lazy" src="<?php echo $image;?>" alt="blog-image">
              </a>
            </figure>
            <div class="card-body bg-white p-4">
              <div class="entry-header mb-3">
                
                <h2 class="card-title entry-title h4 mb-0">
                  <a class="link-dark text-decoration-none" href="#!"><?php echo $row['blog_name'];?>s</a>
                </h2>
              </div>
              <div class="discretion-blog">
                    <a class="btn" href="blog-detail.php?id=<?php echo $row['blog_id'];?>">Read more</a>
            </div>
              
            </div>
          </div>
        </article>
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