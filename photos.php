<?php include 'head.php'; ?>
<?php include'header.php';?>

<section class='banimg'>
    <div class="image-container">
        <img class='w-100 d-block responsive-img' src="asset/image/4.png" alt="event-banner">
    </div>
    
</section>


<section class="py-4">
    <div class="container text-center">
        <h2 class="main-heading">CHECK OUR GALLERY FOR LATEST EVENTS PHOTOS</h2><br>
        <div class="row justify-content-center ">
            <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM tbl_photos Order By creation_on DESC");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['image'])) ? 'admin/assets/images/photos/'.$row['image'] : 'assets/images/users/profile.jpg';
                        
                ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 anime1 pt-3">
                <div class="card imgcard h-100">
                    <a href="photos-detail.php?id=<?php echo $row['id'];?>"><img class="card-img-top img-gallary" src="<?php echo $image; ?>" alt="banner-event"></a>
                    <div class="text-center cardtext">
                        <h5 class="card-title"><a href="photos-detail.php?id=<?php echo $row['id'];?>" class='mh1'><?php echo $row['name'];?></a></h5>
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

<!-- Modal for image popup -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="modalImage" src="" class="img-fluid" alt="Image">
      </div>
    </div>
  </div>
</div>

<!--Script for open popup image-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--Script for open popup image-->
<script>
$(document).ready(function() {
    $('.imgcard').on('click', function() {
        var src = $(this).find('img').attr('src');
        $('#modalImage').attr('src', src);
        $('#imageModal').modal('show');
    });
});
</script>





<?php include'footer.php';?>