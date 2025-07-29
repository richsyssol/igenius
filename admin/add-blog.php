<?php include 'includes/session.php';?>
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
                                    <li class="breadcrumb-item active">About Details</li>
                                </ol>
                            </div>
                            <h4 class="page-title">About Details</h4>
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
              
                <form class="needs-validation" method="post" action="blog-create.php" enctype="multipart/form-data"  novalidate>
                 
                    <div class="row">
        <!-- end of col --->
                    <div class="card">
                        <div class="card-body">
                               <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Blog Image</h5>
                            <div class="mb-3">
                                <input type="file" name="image" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please Enter title
                                </div>
                            </div>
                               <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Title</h5>
                            <div class="mb-3">
                                <input type="text" name="title" class="form-control" placeholder="Enter Title" required>
                                <div class="invalid-feedback">
                                    Please Enter title
                                </div>
                            </div>
                            <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Description</h5>
                            <div class="mb-3">
                                <textarea class="form-control ckeditor" name="descr" rows="10" placeholder="Please enter Description" id="txtEditor" required></textarea>
                                <div class="invalid-feedback">
                                    Please Enter Description
                                </div>
                            </div>
                            
                       
                            
                     
                            <div class="text-center mb-3">
                             <button type="submit" name="add" class="btn w-sm btn-success waves-effect waves-light">Add</button>
                              <button type="reset" class="btn w-sm btn-warning waves-effect waves-light">Reset</button>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>  
    <script>
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;

return true;
}
</script>          
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<?php include 'footer.php'?>
 <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
 <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script>
$(function(){
$('#addMore').on('click', function() {
var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
data.find("input").val('');
});
$('#addFaqMore').on('click', function() {
var data = $("#faq_tb tr:eq(1)").clone(true).appendTo("#faq_tb");
data.find("input").val('');
});


$(document).on('click', '.remove', function() {
var trIndex = $(this).closest("tr").index();
if(trIndex>1) {
$(this).closest("tr").remove();
} else {
alert("Sorry!! Can't remove first row!");
}
});
});      
</script>
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