<?php
include('includes/session.php');
if(isset($_POST["image"]))
{
 $data = $_POST["image"]; 
 $img_array_1 = explode(";", $data);
 $img_array_2 = explode(",", $img_array_1[1]);
 $basedecode = base64_decode($img_array_2[1]);
 $filename = time() . '.jpg';
 file_put_contents("assets/images/products/$filename", $basedecode);
 //file_put_contents($filename, $basedecode);
 echo '<img src="assets/images/products/'.$filename.'" class="img-thumbnail" />';
 //$now = date("Y-m-d H:i:s");
$sql = "INSERT INTO product_images(img) VALUES('$filename')";
 $conn->query($sql); 

}
echo "<script>
             alert('Image Add succesfully'); 
             window.history.go(0);
     </script>";
/*echo "<script>";
echo "alert('Added Successfully');";
echo "window.location.href='assign-orders.php';";
echo "</script>";*/

?>