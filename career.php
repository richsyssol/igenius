<?php include 'head.php'; ?>
<?php include'header.php';?>

<section class='banimg'>
    <div class="image-container">
        <img class='w-100 d-block responsive-img' src="asset/image/career.png" alt="career-banner">
    </div>
    
</section>




<section class="py-5 career">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                     <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM  tbl_career ");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                       
                        
                        ?>
                    <div class="col-md-6 mb-3 c-card" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card p-3 shadow anime1">
                            <div class="mt-1">
                                <h3 class="heading main-heading"><?php echo $row['title'];?></h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="icon"><i class="bx bxl-mailchimp"></i></div>
                                    <div class="ms-2 c-details">
                                        <h6 class="mb-0"><strong>Qualification : </strong></h6> <span><?php echo $row['qualification'];?></span>
                                        <h6 class="mb-0"><strong>Experience :</strong> </h6> <span><?php echo $row['experience'];?> years</span>
                                        <h6 class="mb-0"><strong>About Role :</strong> </h6> <span><?php echo $row['about'];?></span>
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
                 
                    <!-- Repeat this block for each job card -->
                </div>
            </div>
            <div class="col-md-4 anime1" data-aos="zoom-in-right" data-aos-duration="1000">
                <div class="shadow p-4 bg-light">
                    <h2 class="main-heading">APPLY FOR POST</h2>
                    <form enctype="multipart/form-data" action="test.php" method="POST">
                        <input type="hidden" name="career-form" class="form-control" id="inputName">
                        <div class="form-group">
                            <label for="inputName" class="fs-5">Name:</label>
                            <input type="text" name="name" class="form-control" id="inputName" placeholder="Enter Your Name...">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="fs-5">E-mail:</label>
                            <input type="email" name='email' class="form-control" id="inputEmail" placeholder="Enter Your E-mail...">
                        </div>
                        <div class="form-group">
                            <label for="inputContact" class="fs-5">Contact:</label>
                            <input type="text" name="contact" class="form-control" id="inputContact" placeholder="Enter Your Contact...">
                        </div>
                        <div class="form-group">
                            <label for="inputMessage" class="fs-5">Message:</label>
                            <textarea class="form-control" name='message' id="inputMessage" rows="3" placeholder="Enter Your Message..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputResume" class="fs-5">Resume:</label>
                            <input type="file" name="resume" class="form-control" accept="application/pdf"  id="inputResume">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>      
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