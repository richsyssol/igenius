<?php

//fetch_images.php

include 'includes/session.php';

$query = "SELECT * FROM product_images ORDER BY id DESC";

$statement = $conn->prepare($query);

$output = '<div class="row">';

if($statement->execute())
{
 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $output .= '
  <div class="col-md-2" style="margin-bottom:16px;">
   <img src="data:image/png;base64,'.base64_encode($row['img']).'" class="img-thumbnail" />
  </div>
  ';
 }
}

$output .= '</div>';

echo $output;

?>