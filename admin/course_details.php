<?php include 'includes/session.php';?>
<?php
//	include 'includes/slugify.php';
	if(isset($_POST['update'])){
	$id=$_POST['id'];
	$contain=$_POST['contain'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_course SET contain=:contain WHERE id=:id");
			$stmt->execute(['id'=>$id, 'contain'=>$contain]);
			$_SESSION['success'] = 'Course Detail Updated Successfully !!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
	//	$_SESSION['error'] = 'Fill up edit product form first';
	}

//	header('location: active-profile.php');

?>
<?php include 'header.php'?>
<?php include 'left-menu.php'?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">             
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Course Details</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Course Details</h4>
                        </div>
                    </div>
                </div>  
                <?php
                    if(isset($_SESSION['error'])){
                      echo "
                        <div class='alert alert-danger alert-dismissible bg-danger text-white border-0 fade show'>
                          <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'>&times;</button>
                          <h4><i class='icon fa fa-warning'></i> Error!</h4>
                          ".$_SESSION['error']."
                        </div>
                      ";
                      unset($_SESSION['error']);
                    }
                    if(isset($_SESSION['success'])){
                      echo "
                        <div class='alert alert-danger alert-dismissible bg-danger text-white border-0 fade show'>
                          <button type='button' class='btn-close btn-close-white close' data-bs-dismiss='alert' aria-label='Close'>&times;</button>
                          <h4><i class='icon fa fa-check'></i> Success!</h4>
                          ".$_SESSION['success']."
                        </div>
                      ";
                      unset($_SESSION['success']);
                    }
                ?>  
                 <?php
                    include'includes/config.php';
                    $id=intval($_GET['id']);
                    $query=mysqli_query($conn,"SELECT * FROM tbl_course WHERE tbl_course.id='$id'");
                    while($row=mysqli_fetch_array($query))
                    {
                    ?>
                <form method="post" enctype="multipart/form-data" >
                    <div class="row">
                        <input type="hidden" value="<?php echo $id;?> " name="id">
        <!-- end of col --->
        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Description</h5>
                <div class="mb-3">
                    <textarea class="form-control ckeditor" name="contain" rows="10" placeholder="Please enter Description" id="txtEditor" ><?php echo $row['contain'];?></textarea>
                </div>
            </div>
            <div class="text-center mb-3">
                    <button type="submit" name="update" class="btn w-sm btn-success waves-effect waves-light">Submit</button>
                </div>
        </div>
        
    </div>
</div>
</form>   
<?php } ?>
      
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>

<?php include 'footer.php'?>
 <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
 <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script>
photo.onchange = evt => {
const [file] = photo.files
if (file) {
blah.src = URL.createObjectURL(file)
}
}
</script>
<script>
photo2.onchange = evt => {
const [file] = photo2.files
if (file) {
blah2.src = URL.createObjectURL(file)
}
}
</script>
<script>
photo3.onchange = evt => {
const [file] = photo3.files
if (file) {
blah3.src = URL.createObjectURL(file)
}
}
</script>
<script>
photo4.onchange = evt => {
const [file] = photo4.files
if (file) {
blah4.src = URL.createObjectURL(file)
}
}
</script>