<?php include 'header.php'?>
<?php include 'left-menu.php'?>

<div class="content-page">
<div class="content">
<!-- Start Content-->
<div class="container-fluid">
<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box">
<div class="page-title-right">
<ol class="breadcrumb m-0">
<li class="breadcrumb-item"><a href="faq.php">FAQs</a></li>
<li class="breadcrumb-item"><a href="#">Add FAQs</a></li>
</ol>
</div>
<h4 class="page-title">Add FAQs</h4>
</div>
</div>
</div>

<!-- end row -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<form  name="Category" method="post">
<div class="row">
<div class="col-lg-8">
<div class="mb-3">
<label for="inputEmail4" class="col-form-label">Add Title </label>
<input type="text" class="form-control"  name="title"  placeholder="Enter FAQ" required="">
</div>
</div>
<div class="col-lg-8">
<div class="mb-3">
<label for="inputEmail4" class="col-form-label">Add Description </label>
<input type="text" class="form-control"  name="description"  placeholder="Enter Description" required="">
</div>
</div>
<div class="col-lg-8">
<div class="mb-3">
<label for="inputEmail4" class="col-form-label">Status </label>
<select  class="form-control" name="status"> 
<option value="">Select Status</option>  
<option value="Active">Active</option>
<option value="Deactive">Deactive</option>
</select>
</div>
</div>
</div>
<div class="text-end pt-2 col-md-8">
<input value="Submit" type="submit" name="submit" class="btn btn-primary waves-effect waves-light">
</div>
</form>    
<!-- end row-->
</div>
<!-- end card-body -->
</div>
<!-- end card -->
</div>
<!-- end col -->
<!-- end row -->
</div>
</div>
</div>
<!-- container -->
</div>
<?php include("footer.php"); ?>
