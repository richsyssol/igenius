<?php include 'head.php'; ?>
<?php include'header.php';?>
<section class='banimg'>
    <div class="image-container">
        <img class='w-100 d-block responsive-img' src="asset/image/find-us.png" alt="find-us banner">
    </div>
    
</section>

<section class='find-us'>
<div class="site-content global-layout-no-sidebar py-5 find-form">
   <center>
  <div class="container">
    <h3 class="main-heading">Find A Centre</h3>
    <div class="inner-wrapper py-3">
    <div id="primary" class="content-area">
    <main id="main" class="site-main">
    <aside class="section section-teams">
    <div class="container">
    <div class="section-title-wrap row">
		<div class="col-md-4">
		Select State : 
		<select onChange="getcat(this.value);" class="form-control" name="state" id="state">
		<option value="*"> State</option>
		<?php
			$conn = $pdo->open();

			$stmt = $conn->prepare("SELECT * FROM tbl_state");
			$stmt->execute();

			foreach($stmt as $crow){
				// $selected = ($crow['id'] == $catid) ? 'selected' : ''; 
				echo "
				<option value='".$crow['id']."' ".$selected.">".$crow['name']."</option>
								  ";
			}

			$pdo->close();
			?>
   		</select>
		</div>
		<div class="col-md-4">
		Select District : 
		<select class="form-control" name="city" id="city" required="">
			</select>
		</div>
		<div class="col-md-1 mt-4">
			<input type="button" name="filter" id="filter" value="Search" class="btn btn-success" />  

		</div>
    </div>
	
</section>

<section class='find-us'>
  <div class="container">
    <div class="row justify-content-center" id="order_table">
      <!-- First Column -->
        <?php
            $conn = $pdo->open();

            try{
              $stmt = $conn->prepare("SELECT * FROM tbl_location JOIN tbl_city on tbl_city.id=tbl_location.city_id");
              $cnt=1;
              $stmt->execute();
              foreach($stmt as $row){
             //   $image = (!empty($row['image'])) ? 'assets/images/banner/'.$row['image'] : 'assets/images/users/profile.jpg';
                
        ?>
      <div class="col-md-4 pt-3 anime1" data-aos="zoom-in" data-aos-duration="1000"> <!-- Adjusted column width to fit three cards in one row -->
        <!-- First Card with Shadow -->
        <div class="card cardclr mb-3">
          <div class="card-body">
			   <h5 class="card-title mh1"><?php echo $row['city'];?> </h5>
			   <p class="card-title fw-bold"><?php echo $row['area'];?> </p>
			 <h5 class="text-center text-dark">Authorized Franchisee</h5>
            <p class="card-title fw-bold"><?php echo $row['school_name'];?> </p>
            <!--<p class="card-text text-center">-->
            <!--  <?php echo $row['school_name'];?><br>-->
             
            <!--</p>-->
            <p >
                <h5 class="text-center text-dark">Franchisee Address</h5>
                <p class="text-center"><?php echo $row['address'];?></p>
            </p>
            <p class="card-text text-center fw-bold">CONTACT DETAILES:<br><?php echo $row['contact_no'];?></p>
           
            
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
<br>

<?php include'footer.php';?>
<script>
function getcat(val) {
$.ajax({
type: "POST",
url: "get_city.php",
data:'cat_id='+val,
success: function(data){
$("#city").html(data);
}
});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>  
		<script>  
      $(document).ready(function(){  
           $(function(){  
                $("#state").text();  
                $("#city").text();  
           });  
           $('#filter').click(function(){  
                var state = $('#state').val();  
                var city = $('#city').val();  
                if(state != '' && city != '')  
                {  
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{state:state, city:city},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select data");  
                }  
           });  
      });  
 </script>