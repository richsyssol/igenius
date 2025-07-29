<?php include 'includes/session.php'; ?>
<?php include 'header.php'?>
<?php include 'includes/config.php';?>
<?php include 'left-menu.php'?>
<script type="text/javascript">
function valid()
{
if(document.chngpwd.cpass.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.cpass.focus();
return false;
}
else if(document.chngpwd.newpass.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newpass.focus();
return false;
}
else if(document.chngpwd.cnfpass.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cnfpass.focus();
return false;
}
else if(document.chngpwd.newpass.value!= document.chngpwd.cnfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cnfpass.focus();
return false;
}
return true;
}
</script>
     <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                     <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Setting </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Setting</h4>
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
                <form class="needs-validation" method="POST" action="profile_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>"  novalidate>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0 mb-3 bg-light p-2">Basic Details</h5>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="first_name" value="<?php echo $admin['first_name']; ?>" placeholder="First Name" required>
                                        <div class="invalid-feedback">
                                                Please Enter First Name.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Contact No</label>
                                        <input type="text" class="form-control" name="mobile" value="<?php echo $admin['mobile']; ?>"  placeholder="Contact No" required="" maxlength="10" onkeypress="return isNumberKey(event)">
                                        <div class="invalid-feedback">
                                        Please Enter Contact No.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="email" value="<?php echo $admin['email']; ?>" placeholder="demo@gmail.com " required="">
                                        <div class="invalid-feedback">
                                         Please Enter Email.
                                        </div>
                                    </div>  
                                    <div class="text-end">
                                        <button type="submit" name="save" class="btn btn-success waves-effect waves-light">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mt-0 mb-3 bg-light p-2">Reset Password</h5>
                                <form class="needs-validation" action="password_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" method="POST"   novalidate>
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Current Password <span class="text-danger">*</span></label>
                                        <input type="password" id="password" name="password" value="<?php echo $admin['password']; ?>" class="form-control" placeholder="e.g. ******" required>
                                    </div>  
                                    <div class="mb-3">
                                    <label for="product-name" class="form-label">New Password <span class="text-danger">*</span></label>
                                    <input type="text" id="curr_password" name="curr_password" class="form-control" placeholder="e.g.******">
                                    </div> 
                                    <div class="float-end">
                                        <button type="submit" name="add" class="btn btn-success">Save</button>
                                        <button type="button" class="btn btn-danger">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div> <!-- content -->
            </div>
        </div>

            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel">Crop Image Before Upload</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="img-container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <img src="" id="sample_image" />
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="crop">Crop</button>
                        </div>
                    </div>
                </div>
            </div>

<?php include 'footer.php'?>

<script>
     $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });
</script>

<script>

$(document).ready(function(){

    /*function readURL(input)
    {
        if(input.files && input.files[0])
        {
            var reader = new FileReader();
    
            reader.onload = function(event) {
                $('#uploaded_image').attr('src', event.target.result);
                $('#uploaded_image').removeClass('img-circle');
                $('#upload_image').after('<div align="center" id="crop_button_area"><br /><button type="button" class="btn btn-primary" id="crop">Crop</button></div>')
            }
            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#upload_image").change(function() {
        readURL(this);
        var image = document.getElementById("uploaded_image");
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
        });
    });*/

    
    var $modal = $('#modal');
    var image = document.getElementById('sample_image');
    var cropper;

    //$("body").on("change", ".image", function(e){
    $('#upload_image').change(function(event){
        var files = event.target.files;
        var done = function (url) {
            image.src = url;
            $modal.modal('show');
        };
        //var reader;
        //var file;
        //var url;

        if (files && files.length > 0)
        {
            /*file = files[0];
            if(URL)
            {
                done(URL.createObjectURL(file));
            }
            else if(FileReader)
            {*/
                reader = new FileReader();
                reader.onload = function (event) {
                    done(reader.result);
                };
                reader.readAsDataURL(files[0]);
            //}
        }
    });

    $modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function(){
        canvas = cropper.getCroppedCanvas({
            width: 400,
            height: 400,
        });

        canvas.toBlob(function(blob) {
            //url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob); 
            reader.onloadend = function() {
                var base64data = reader.result;  
            
                $.ajax({
                    url: "upload.php",
                    method: "POST",                 
                    data: {image: base64data},
                    success: function(data){
                        console.log(data);
                        $modal.modal('hide');
                        $('#uploaded_image').attr('src', data);
                        //alert("success upload image");
                    }
                });
            }
        });
    });
    
});
</script>
<script type="text/javascript">
        $(document).ready(function(){
            $('.delete').click(function(){
                var el = this;
                var deleteid = $(this).data('id');
                var confirmalert = confirm("Are you sure?");
                if (confirmalert == true) {
                  $.ajax({
                    url: 'admin-pincode.php',
                    type: 'POST',
                    data: { id:deleteid },
                    success: function(response){
                      if(response == 1){
                        $(el).closest('tr').css('background','tomato');
                        $(el).closest('tr').fadeOut(800,function(){
                         $(this).remove();
                     });
                }else{
                        alert('Invalid ID.');
                }
            }
            });
              }
          });
        });
    </script>

