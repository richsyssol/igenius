<?php
include('includes/config.php');
if(!empty($_POST["cat_id"])) 
{
$id=intval($_POST['cat_id']);
$query=mysqli_query($conn,"SELECT * FROM tbl_states WHERE country_id=$id");
?>
<option>Select State</option>
<?php
while($row1=mysqli_fetch_array($query))
{
?>
<option style="background-color: #fff;" value="<?php echo htmlentities($row1['state_id']); ?>"><?php echo htmlentities($row1['state_name']); ?></option>
<?php
}
}
?>