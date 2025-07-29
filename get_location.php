
<?php
include('includes/config.php');
if(!empty($_POST["cat_id"])) 
{
$id=intval($_POST['cat_id']);
$query=mysqli_query($conn,"SELECT * FROM tbl_location WHERE name='".$_POST['cat_id']."'");
?>
<?php
while($row=mysqli_fetch_array($query))
{
?>
 <div class="col-md-4 pt-3 anime1"data-aos="zoom-in" data-aos-duration="1000"> <!-- Adjusted column width to fit three cards in one row -->
        <!-- First Card with Shadow -->
        <div class="card cardclr shadow mb-3">
          <div class="card-body">
            <h5 class="card-title mh1"><?php echo $row['name'];?> </h5>
            <p class="card-text text-center">
              <strong><?php echo $row['school_name'];?></strong><br>
             <?php echo $row['address'];?>
            </p>
            <p class="card-text text-center fw-bold">FRANCHISEE CONTACT:<br><?php echo $row['contact_no'];?></p>
           
            <div>
                <a href="map-detail.php?id=<?=$row['id']?>"><img src="asset/image/map-icon.png" alt=""></a>
                <a href="map-detail.php?id=<?=$row['id']?>">View Details & Map</a>
            </div>
          </div>
        </div>
      </div>
<?php
}
}
?>