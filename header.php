<?php include 'head.php'; ?>
<?php include 'includes/session.php'; ?>

    


    
    <!-- Navbar -->
<div class="container">
        <div class="row py-2  d-flex align-items-center">
            <div class="col-12 col-sm-6">
                <div id="headerLogo" class="mx-sm-0 mx-auto">
                    <a href="index.php"><img src="asset/image/igenius-logo.png" width="100%" alt=""></a>
                </div>
            </div>
    
            <div class="col-12 col-sm-6 d-flex justify-content-center justify-content-sm-end">
                <div class="side-image">
                    <p><i class="fa-solid fa-phone-volume"></i><span><a href="tel:+917770045402"> +91 7770045402</a></span></p>
                    <p><i class="fa-solid fa-envelope"></i><span><a href="mailto:info.igeniusnsk@gmail.com"> info.igeniusnsk@gmail.com</a></span></p>
                </div>
            </div>
        </div>
</div>

    <div class="container-fluid" style="background:#0C1844">
        <nav class="navbar navbar-expand-lg m-0 p-0" data-bs-theme="dark">
            <div class="container justify-content-center">
              <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-light"><i class="fa-solid fa-bars"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item navItem ">
                    <a class="nav-link nato" aria-current="page" href="index.php" wire:navigate>HOME</a>
                  </li>
    
                  <!--<li class="nav-item navItem  dropdown">-->
                  <!--  <a class="nav-link nato dropdown-toggle" href="about-us.php"  role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
                  <!--      ABOUT US-->
                  <!--  </a>-->
                  <!--  <ul class="dropdown-menu">-->
                  <!--    <li><a class="dropdown-item " href="#our-team" wire:navigate> OUR TEAM </a></li>-->
                      
    
                  <!--</ul>-->
                  <!--</li>-->
                  <li class="nav-item navItem ">
                    <a class="nav-link nato" href="about-us.php" wire:navigate>ABOUT US</a>
                  </li>
                  <li class="nav-item navItem  dropdown">
                    <a class="nav-link nato dropdown-toggle" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        OUR COURSES
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                          $conn = $pdo->open();
      
                          try{
                            $stmt = $conn->prepare("SELECT * FROM tbl_course WHERE status='Active'");
                            $cnt=1;
                            $stmt->execute();
                            foreach($stmt as $row){
                             // $image = (!empty($row['image'])) ? 'admin/assets/images/course/'.$row['image'] : 'assets/images/users/profile.jpg';
                              
                      ?>
                      <li><a class="dropdown-item " href="courses?id=<?php echo $row['id'];?>" wire:navigate> <?php echo $row['name'];?> </a></li>
                        <?php 
                                }
                            }
                            catch(PDOException $e){
                                echo $e->getMessage();
                            }
        
                            $pdo->close();
                            ?>  
    
                  </ul>
                  </li>
                  <li class="nav-item navItem ">
                    <a class="nav-link nato" href="schoolproject.php" wire:navigate>SCHOOL PROJECT</a>
                  </li>
                  <li class="nav-item navItem ">
                    <a class="nav-link nato" href="franchise.php" wire:navigate>FRANCHISE</a>
                  </li>
                  <li class="nav-item navItem  dropdown">
                    <a class="nav-link nato dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        MEDIA
                    </a>
                    <ul class="dropdown-menu">
                      <li><a wire:navigate class="dropdown-item " href="achivement.php" > ACHIEVEMENT </a></li>
                      <li><a wire:navigate class="dropdown-item " href="photos.php" > PHOTOS </a></li>
                      <li><a wire:navigate class="dropdown-item " href="video.php" > VIDEOS </a></li>
                      <li><a wire:navigate class="dropdown-item " href="news.php" > NEWS </a></li>
                  </ul>
                  </li>
                  <li class="nav-item navItem ">
                    <a class="nav-link nato" href="blog.php" wire:navigate>BLOG</a>
                  </li>
                  <li class="nav-item navItem ">
                    <a class="nav-link nato" href="career.php" wire:navigate>CAREER</a>
                  </li>
                  <li class="nav-item navItem ">
                    <a class="nav-link nato" href="contact-us.php" wire:navigate>CONTACT US</a>
                  </li>
                  <li class="nav-item navItem ">
                    <a class="nav-link nato animate__animated animate__tada animate__infinite" href="find-us.php" wire:navigate><img width="30" height="30" src="https://img.icons8.com/ios-filled/50/dc3545/place-marker--v1.png" alt="place-marker--v1"/>FIND US</a>
                  </li>
                </ul>
    
              </div>
            </div>
          </nav>
    </div>


    
