<?php include 'head.php'; ?>
<?php include'header2.php';?>

<section class='banimg'>
    <div class="image-container">
        <img class='w-100 d-block responsive-img' src="asset/image/About_us.png" alt="about-us banner">
    </div>
    
</section>

<!--<nav aria-label="breadcrumb" class="bread">-->
<!--  <ol class="breadcrumb">-->
<!--    <li class="breadcrumb-item "><a href="index.php" class="text-light">Home</a></li>-->
<!--    <li class="breadcrumb-item text-light active" aria-current="page">About Us</li>-->
<!--  </ol>-->
<!--</nav>-->

<!--about us info and video-->
<section>
   <div class="container infoabout">
      <div class="row" data-aos="fade-up" data-aos-duration="1000">
         <div class="col-sm-12 col-md-6 mb-5 infoabout1">
            <div class="about_detail anime1">
              <?php
                                            $conn = $pdo->open();
                        
                                            try{
                                              $stmt = $conn->prepare("SELECT * FROM tbl_about");
                                              $cnt=1;
                                              $stmt->execute();
                                              foreach($stmt as $row){
                                             //   $image = (!empty($row['image'])) ? 'assets/images/achivement/'.$row['image'] : 'assets/images/users/profile.jpg';
                                                
                                        ?>
                                        <?php echo $row['content'];?>
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

         <div class="col-sm-12 col-md-6 my-5 anime1 infoabout2">
              <?php
                                            $conn = $pdo->open();
                        
                                            try{
                                              $stmt = $conn->prepare("SELECT * FROM content_video Order by rand() DESC");
                                              $cnt=1;
                                              $stmt->execute();
                                              foreach($stmt as $row){
                                             //   $image = (!empty($row['image'])) ? 'assets/images/achivement/'.$row['image'] : 'assets/images/users/profile.jpg';
                                                
                                        ?>
            <div class="embed-responsive embed-responsive-16by9">
               <iframe class="embed-responsive-item" src="<?php echo $row['video_url'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
               referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
</section>

<!-- Vision,Mission and Objective -->
<section class="info_mvo">
    <div class="container">
        <div class="row">
             <?php
                                            $conn = $pdo->open();
                        
                                            try{
                                              $stmt = $conn->prepare("SELECT * FROM tbl_other_data where id='1'");
                                              $cnt=1;
                                              $stmt->execute();
                                              foreach($stmt as $row){
                                             //   $image = (!empty($row['image'])) ? 'assets/images/achivement/'.$row['image'] : 'assets/images/users/profile.jpg';
                                                
                                        ?>
          <div class="col-sm-6 p-3" data-aos="fade-up" data-aos-duration="1000">
            <div class="card shadow about_mvo anime">
              
              <div class="container">
                
                <h2 class=" p-2 main-heading"><?php echo $row['name'];?></h2>
                <p class="title" style="text-align: justify;"><?php echo $row['content'];?></p>
                
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
          
          <br>
          <br>
          <br>
        <?php
                $conn = $pdo->open();

                try{
                  $stmt = $conn->prepare("SELECT * FROM tbl_other_data where id='2'");
                  $cnt=1;
                  $stmt->execute();
                  foreach($stmt as $row){
                 //   $image = (!empty($row['image'])) ? 'assets/images/achivement/'.$row['image'] : 'assets/images/users/profile.jpg';
                    
            ?>
          <div class="col-sm-6 p-3" data-aos="fade-up" data-aos-duration="1000">
            <div class="card zoom shadow about_mvo anime" >
              
              <div class="container">

                <h2 class=" p-2 main-heading"><?php echo $row['name'];?></h2>
                <p class="title" style=" text-align: justify;"><?php echo $row['content'];?></p>
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
                  <?php
                $conn = $pdo->open();

                try{
                  $stmt = $conn->prepare("SELECT * FROM tbl_other_data where id='3'");
                  $cnt=1;
                  $stmt->execute();
                  foreach($stmt as $row){
                 //   $image = (!empty($row['image'])) ? 'assets/images/achivement/'.$row['image'] : 'assets/images/users/profile.jpg';
                    
            ?>
          <div class="col-sm-12 p-3" data-aos="fade-up" data-aos-duration="1000">
            <div class="card zoom shadow about_mvo anime" >
              
              <div class="container">

                <h2 class=" p-2 main-heading"><?php echo $row['name'];?></h2>
                    <?php echo $row['content'];?>
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
    <br>
    </section> 

<!-- Our Team section -->
<section id='our-team' class='mt-5'>
    <div class="text-center py-5">
        <h2 class="main-heading">OUR TEAM</h2>
    </div>
    <div class="container teamcontainer">
        <div class="row teamrow justify-content-center"> 
          <?php
                $conn = $pdo->open();

                try{
                  $stmt = $conn->prepare("SELECT * FROM our_team");
                  $cnt=1;
                  $stmt->execute();
                  foreach($stmt as $row){
                    $image = (!empty($row['image'])) ? 'admin/assets/images/team/'.$row['image'] : 'assets/images/users/profile.jpg';
                    
            ?>
            <div class="col-md-3 col-sm-6 anime mx-auto" data-aos="fade-up" data-aos-duration="1000">
                <div class="our-team">
                    <div class="pic">
                         <img src="<?php echo $image;?>" alt="team-image">
                        <ul class="social">
                            <li><a href="#" class="fab fa-facebook"></a></li>
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-google-plus"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                        </ul>
                    </div><br>
                    <div class="team-content">
                        <div class="team-info">
                            <h3 class="title"><?php echo $row['name'];?></h3>
                            <span class="post"><?php echo $row['designation'];?></span>
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
    <div class='container text-center pb-3' data-aos="zoom-in">
        <p>"Welcome to I-Genius Abacus Academy, where we foster a culture of excellence and innovation in education. Our dedicated team of educators and staff are committed to providing a nurturing learning environment to inspire and empower our students to achieve their full potential. We believe in the elieve in the power of elieve in the power of  power of education to transform lives and shape the leaders of tomorrow."
        </p>
        <p><b>Join us on this exciting educational journey and watch your child thrive and succeed at Abacus Academy.</b></p>
    </div>
  </section>
  
<!--Meet our team section-->
<section class="py-3 our-leaders">
  <div class="text-center">
      <h2 class="main-heading">MEET OUR LEADERS</h2>
  </div>
  <div class="container pt-4">
      <div class="row justify-content-center">
           <?php
                $conn = $pdo->open();

                try{
                  $stmt = $conn->prepare("SELECT * FROM  tbl_leaders");
                  $cnt=1;
                  $stmt->execute();
                  foreach($stmt as $row){
                   $image = (!empty($row['image'])) ? 'admin/assets/images/leaders/'.$row['image'] : 'assets/images/users/profile.jpg';
                    
            ?>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4 anime leader" data-aos="fade-up" data-aos-duration="1000">
              <div class="our-team">
                  <div class="pic1">
                      <img src="<?php echo $image;?>" alt="leader-image">
                      <ul class="social">
                          <li><a href="#" class="fab fa-facebook"></a></li>
                          <li><a href="#" class="fab fa-twitter"></a></li>
                          <li><a href="#" class="fab fa-google-plus"></a></li>
                          <li><a href="#" class="fab fa-linkedin"></a></li>
                      </ul>
                  </div><br>
                  <div class="team-content">
                      <div class="team-info">
                          <h3 class="title"><?php echo $row['name'];?></h3>
                          <span class="post"><?php echo $row['designation'];?></span>
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
  <div class="text-center" data-aos="zoom-in">
    <h5 class='mh3'> We have more than 50 qualified and trained teaching staff for School Project students and Abacus Franchise training</h5>
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