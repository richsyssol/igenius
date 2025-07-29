<?php  
 if(isset($_POST["state"], $_POST["city"]))  
 {  
      $connect = mysqli_connect("localhost", "igenius_web", "Nayx474?3", "igenius_web");  
      $output = '';  
      $query = "  
           SELECT * FROM tbl_location JOIN tbl_city on tbl_city.id=tbl_location.city_id
           WHERE tbl_location.state_id='".$_POST["state"]."' AND tbl_location.city_id='".$_POST["city"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
               ?>  
    <div class="col-md-4 pt-3 anime1" data-aos="zoom-in" data-aos-duration="1000"> <!-- Adjusted column width to fit three cards in one row -->
        <!-- First Card with Shadow -->
        <div class="card cardclr mb-3">
          <div class="card-body">
			   <h5 class="card-title mh1"><?php echo $row['city'];?> </h5>
			   <p class="card-title "><?php echo $row['area'];?> </p>
			   <h5 class="text-center text-dark">Authorized Franchisee</h5>
            <h5 class="card-title mh1"><?php echo $row['name'];?> </h5>
            <p class="card-text text-center">
              <strong><?php echo $row['school_name'];?></strong><br>
             
            </p>
            <p >
                <h5 class="text-center text-dark">Franchisee Address</h5>
                <p class="text-center"><?php echo $row['address'];?></p>
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
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>