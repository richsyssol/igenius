<?php
include('includes/config.php');
if(!empty($_POST["cat_id"])) 
{
$id=intval($_POST['cat_id']);
$query=mysqli_query($conn,"SELECT * FROM category WHERE status='Active' and cat_id=$id");
?>
<!--<option>Select Category</option>-->
<?php
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['name']); ?></option>
<?php
}
}
?>