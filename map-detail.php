<?php include 'head.php'; ?>
<?php include'header.php';?>

<section class="pro py-5 class-map">
        <div class="container">
            <div class="row">
                
                <?php
            $conn = $pdo->open();

            try{
                $id=intval($_GET['id']);
              $stmt = $conn->prepare("SELECT * FROM tbl_location JOIN tbl_city on tbl_city.id=tbl_location.city_id where tbl_city.id='$id'");
              $cnt=1;
              $stmt->execute();
              foreach($stmt as $row){
             //   $image = (!empty($row['image'])) ? 'assets/images/banner/'.$row['image'] : 'assets/images/users/profile.jpg';
                
        ?>
        
                <div class="col-12 text-center">
                    <h2 class="main-heading">Abacus Classes in <?=$row['city']?></h2>
                </div>
                
                <div class="row mt-3 " data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-12 col-md-6 pt-3 ">
                        <div class=" class-mode p-5 bg-white">
                            <h3 class="card-title fw-bold mh4"><?php echo $row['area'];?> </h3>
                             <h5 class="mh1">Authorized Franchisee</h5>
                            <p><?php echo $row['school_name'];?> </p>
                            <h4 class='mh1'>ADDRESS</h4>
                            <p><?=$row['address']?></p>
                            <h4 class='mh1'>CONTACT</h4>
                            <p><?=$row['contact_no']?></p>
                            <div class="btn">
                                
                                <a class="nav-link text-danger fw-bold animate__animated animate__tada animate__infinite" href="find-us.php" wire:navigate><img width="30" height="30" src="https://img.icons8.com/ios-filled/50/dc3545/place-marker--v1.png" alt="place-marker--v1"/>VIEW ALL CENTERS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pt-3 ">
                        <div class="location-map class-mode bg-white">
                           <iframe src="<?=$row['map']?>" width="624" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
