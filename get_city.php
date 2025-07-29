<?php
include('includes/config.php');
if(!empty($_POST["cat_id"])) 
{
$id=intval($_POST['cat_id']);
$query=mysqli_query($conn,"SELECT * FROM tbl_city WHERE state_id=$id");
?>
<option value="">Select district</option>
<?php
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['city']); ?></option>
<?php
}
}
?>