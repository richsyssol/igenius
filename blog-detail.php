<?php include 'head.php'; ?>
<?php include'header.php';?>
<style>
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        background-color:aliceblue !important;
        color: #1a5208 !important;
    }
</style>
<?php 
$blog_id = intval($_GET['id']);
 $conn = $pdo->open();
 
      function trimString($str) {

        // Using str_replace() function 
        // to replace the word 
        $res = str_replace( array( '\'', '"',
        ',' , ';', '<', '>','?'), ' ', $str);
  
        // Returning the result 
        return $res;
        }
 
    try{
        
           $stmt = $conn->prepare("SELECT * FROM blogs WHERE blog_id != :id");
        $stmt->execute(['id' => $blog_id]);
        $all_blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
        $stmt_0 = $conn->prepare("SELECT * FROM blogs WHERE blog_id = :id");
        $stmt_0->execute(['id' => $blog_id]);
        $blogs = $stmt_0->fetchAll(PDO::FETCH_ASSOC);
        
        
          $stmt_1 = $conn->prepare("SELECT * FROM blog_titles WHERE blog_id = :id");
        $stmt_1->execute(['id' => $blog_id]);
        $titles = $stmt_1->fetchAll(PDO::FETCH_ASSOC);
        
        
             $stmt_2 = $conn->prepare("SELECT * FROM blog_subtitles WHERE blog_id = :id ORDER BY blog_sub_id ASC");
        $stmt_2->execute(['id' => $blog_id]);
        $subtitles = $stmt_2->fetchAll(PDO::FETCH_ASSOC);
        
        
         $stmt_3 = $conn->prepare("SELECT * FROM blog_faq WHERE blog_id = :id");
        $stmt_3->execute(['id' => $blog_id]);
        $faqs = $stmt_3->fetchAll(PDO::FETCH_ASSOC);
        
        
        
        
    }
    catch(PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
    }



?>








    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    <div>
                        
                        
                        
                        <h1 class="mh3"><?= $blogs[0]['blog_name'];  ?></h1>
                        <?php  
                        
                         $blog_image = (!empty($blogs[0]['blog_img'])) ? 'admin/assets/images/blog/'.$blogs[0]['blog_img'] : 'assets/images/users/profile.jpg';
                        ?>
                        <img src="<?=$blog_image?>" class="img-fluid" alt="">
                        <div class="pt-5">
                            <p><?=$blogs[0]['blog_desc']; ?></p>
                        </div>
                        <div>
                            <h2 class="mh1">Index</h2>
                            
                          <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end blog-index">
      <nav class="nav nav-pills flex-column">  
      <?php  
      foreach ($titles as $title) {
      ?>
        <a class="nav-link mh4 fw-bold p-0" href="#<?=preg_replace('/\s+/', '', trimString($title['blog_title_name']))?>"><p class="mb-0"><?=$title['blog_title_name']?></p></a>
        
       <?php    foreach ($subtitles as $subtitle) { ?>
       
       <?php if($subtitle['blog_title_id']===$title['blog_title_id']){ ?>
           <nav class="nav nav-pills flex-column">
      
          <a class="nav-link p-0" style="background-color:none;" href="#<?=preg_replace('/\s+/', '', trimString($title['blog_title_name']))?>-<?= preg_replace('/\s+/', '', trimString($subtitle['blog_sub_name']))?>"><p class="mb-0"><?=$subtitle['blog_sub_name']?></p></a>
       
        </nav>
        
        <?php } } ?>
        
      <?php
      }
      ?>
      
                       
                                 </nav>
    </nav>
                        </div>
                        <div>
                                  <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true"
            class="scrollspy-example-2" tabindex="0">
            <?php

            foreach ($titles as $title) {

              ?>

              <div id="<?= preg_replace('/\s+/', '', trimString($title['blog_title_name'])) ?>">
                <h5 class="mh1"><?= $title['blog_title_name']; ?></h5>
                <p><?= isset($title['blog_title_desc'])?$title['blog_title_desc']:''; ?></p>
              </div>
              <?php
           
                foreach ($subtitles as $subtitle) {
                    if($subtitle['blog_title_id']===$title['blog_title_id']){
                  ?>

                  <div
                    id="<?= preg_replace('/\s+/', '', trimString($title['blog_title_name'])) ?>-<?= preg_replace('/\s+/', '', trimString($subtitle['blog_sub_name'])) ?>">
                    <h4 class="mh5"><?= isset($subtitle['blog_sub_name'])?$subtitle['blog_sub_name']:''; ?></h4>
                    <p><?= isset($subtitle['blog_sub_desc'])?$subtitle['blog_sub_desc']:''; ?></p>
                  </div>

                <?php } }
              }
             ?>

          </div>
                          
                      
                      
                    
                    
                
                    </div>
                    
<div>
    <h4 class="mh1">Share With :</h4>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://igenius.demovoting.com/blog-detail.php?id=<?= $blog_id ?>&quote=<?= urlencode($blogs[0]['blog_name']); ?>" target="_blank">
        <img width="48" height="48" src="https://img.icons8.com/fluency/48/facebook-new.png" alt="facebook-new"/>
    </a>
    <a href="https://api.whatsapp.com/send?text=<?= urlencode('Check out this blog post: *' . $blogs[0]['blog_name'] . '* https://igenius.demovoting.com/blog-detail.php?id=' . $blog_id); ?>" target="_blank">
        <img width="48" height="48" src="https://img.icons8.com/color/48/whatsapp--v1.png" alt="whatsapp--v1"/>
    </a>
    <a href="https://twitter.com/intent/tweet?text=<?= urlencode('Check out this blog post: ' . $blogs[0]['blog_name'] . ' https://igenius.demovoting.com/blog-detail.php?id=' . $blog_id); ?>" target="_blank">
        <img width="48" height="48" src="https://img.icons8.com/color/48/twitter--v1.png" alt="twitter--v1"/>
    </a>
    <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://igenius.demovoting.com/blog-detail.php?id=<?= $blog_id ?>&title=<?= urlencode($blogs[0]['blog_name']); ?>&summary=<?= urlencode($blogs[0]['blog_desc']); ?>" target="_blank">
        <img width="48" height="48" src="https://img.icons8.com/color/48/linkedin.png" alt="linkedin"/>
    </a>
    <a href="https://t.me/share/url?url=https://igenius.demovoting.com/blog-detail.php?id=<?= $blog_id ?>&text=<?= urlencode('Check out this blog post: **' . $blogs[0]['blog_name'] . '**'); ?>" target="_blank">
        <img width="48" height="48" src="https://img.icons8.com/fluency/48/telegram-app.png" alt="telegram-app"/>
    </a>
</div>
                    
                    <div class="pt-5">
                        <h1 class="mh1">Frequently Asked Questions</h1>
                        <div class="pt-3">
                          
                            <?php  foreach($faqs as $faq){ ?>
                            <h4 class="mh5"><?=$faq['blog_faq_que'];?></h4>
                            <p><?=$faq['blog_faq_ans'];?></p>
                        <?php } ?>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    
 
<section class="user-blog">
        <div class="container">

            <div class="heading">
                Other Blog
            </div>
            <div id="demo1">
                <div class="span12">

                    <div  class="owl-carousel testimonials">


 <?php foreach($all_blogs as $blogs){ ?>

                        <div class="item blogcard ps-2">
                            <div class="blog-grid">
                                <div class="img-date">
                                    <?php  
                        
                         $blog_image = (!empty($blogs['blog_img'])) ? 'admin/assets/images/blog/'.$blogs['blog_img'] : 'assets/images/users/profile.jpg';
                        ?>
                                            <img src="<?=$blog_image?>" class="card-img-top bimg" alt="Sample Image">
                                    
                                </div>
                                <div class="discretion-blog">
                                    <h4><?=$blogs['blog_name'];?></h4>
                                
                                    <a class="btn" href="https://igenius.demovoting.com/blog-detail.php?id=<?=$blogs['blog_id']; ?>">Read more</a>
                                </div>
                            </div>
                        </div>
                      <?php }?>    
                     

                    </div>
                    <!--<div class="customNavigation">-->
                    <!--    <a class="btn prev"><img src="https://i.ibb.co/sJJYzrQ/arrow-left-round.png"></a>-->
                    <!--    <a class="btn next"><img src="https://i.ibb.co/c8Gp9cy/arrow-right-round.png"></a>-->

                    <!--</div>-->

                </div>

            </div>

        </div>
        </div>
    </section>
    
    <script>
        $(document).ready(function() {

            var owl = $("#owl-demo1");

            owl.owlCarousel({

                items: 3, //10 items above 1000px browser width
                itemsDesktop: [1000, 3], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 2], // 3 items betweem 900px and 601px
                itemsTablet: [600, 1], //2 items between 600 and 0;
                itemsMobile: [360, 1] // itemsMobile disabled - inherit from itemsTablet option

            });

            // Custom Navigation Events
            $(".next").click(function() {
                owl.trigger('owl.next');
            })
            $(".prev").click(function() {
                owl.trigger('owl.prev');
            })
            $(".play").click(function() {
                owl.trigger('owl.play', 1000);
            })
            $(".stop").click(function() {
                owl.trigger('owl.stop');
            })

        });
        
        // autoscroll cards
        
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
    </script>


<?php include'footer.php';?>