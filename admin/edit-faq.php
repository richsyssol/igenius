<?php include 'includes/session.php';?>
<?php include 'header.php'?>
<?php include 'includes/config.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php include 'left-menu.php'?>
<?php
$id=intval($_GET['id']);// product id
if(isset($_POST['submit']))   
{
for ($i=0; $i < count($_POST['title']) ; $i++){
$title=$_POST['title'][$i];
$descrption=$_POST['descrption'][$i];
$sql=mysqli_query($conn,"insert into product_faq(product_id,title,descrption) values('$id','$title','$descrption')");
}
$_SESSION['msg']="Faq's Add Successfully !!";
}
if(isset($_GET['del']))
{
mysqli_query($conn,"delete from products where id = '".$_GET['id']."'");
$_SESSION['delmsg']="Faq deleted Successfully!!";
}
?>
         <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">             
                                            <li class="breadcrumb-item"><a href="pending-product.php">Pending Product</a></li>
                                            <li class="breadcrumb-item active">Faq's Edit</li>
                                    </ol>
                                </div>
                                    <h4 class="page-title"> Add Faq's</h4>
                            </div>
                        </div>
                    </div>  
           <?php if(isset($_POST['submit']))
{?>
            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show">
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close">&times;</button>
              <h4><i class="icon fa fa-warning"></i> Success!</h4>
             <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
            </div>
         
<?php } ?>
<?php if(isset($_GET['del']))
{?>
            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show">
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close">&times;</button>
              <h4><i class="icon fa fa-warning"></i> Success!</h4>
            <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
            </div>
<?php } ?>
            
       <form class="needs-validation" method="post" novalidate>
       
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Faq's</h5>
                    <form class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                                <div class="mb-3">
                                   <table  class="table table-hover small-text" id="tb1">
                                      <tr class="tr-header col-md-12">
                                        <label for="product-price">Add Faq's <span class="text-danger">*</span></label>
                                     <th> <a href="javascript:void(0);" id="addMore1"><i class="fa fa-plus"></i></a></th>
                                    <th>Title </th>
                                    <th>Description</th>
                                  </tr>
                        <tr class="col-md-12">
                                 <td><a href='javascript:void(0);'  class='remove1'>x</a></td>
                                 <td class="col-md-6" id="hidding_normal">
                                    <input class="form-control" name="title[]" type="text" placeholder="Title" required>
                                         <div class="invalid-feedback">
                                             Please Enter Faq's
                                         </div>
                                 </td>
                                <td class="col-md-6" id="hidding_normal">
                                     <input class="form-control" name="descrption[]" type="text" placeholder="Description" required>
                                        <div class="invalid-feedback">
                                             Please Enter Description
                                        </div>
                                </td>
                        </tr> 
                    </table>
               </div>
                            <div class="text-end">
                                <button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                                <button type="reset" class="btn btn-danger waves-effect waves-light">Cancel</button>
                            </div>
                        </form>

                                
              
              </div>
               </div>
            </div>
            <div class="col-lg-6" >
                               <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">View Faq's</h5>
                                       <div class="table-responsive mt-2">
                        <table class="table table-bordered table-centered mb-0">
                            <tbody>
                                <tr>
                                <td style="color:#111" align="center">Title</td>
                                <td style="color:#111" align="center">Desctription </td>
                                <td style="color:#111" align="center">Action </td>
                                </tr>
        
                                <?php 
                                $id=intval($_GET['id']);
                                    $query = "select product_faq.*,product_faq.title,product_faq.id,product_faq.descrption,products.id as pid from product_faq join products on products.id=product_faq.product_id where product_faq.product_id='$id'";
                                    $result = mysqli_query($conn,$query);
                                    $count = 1;
                                    while($row = mysqli_fetch_array($result) ){
                                    
                                ?>

                                <tr>
                                <td><center><?php echo $row['title'];?></center></td>
                                <td><center><?php echo $row['descrption'];?></center></td>
                                <td><center><span class='delete' data-id='<?php echo $row['id'];?>'><i class='fa fa-trash'></i></span></center></td>
                                </tr>
                               <?php
                                    $count++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of col --->
                           
        </div>
    </div>
</form>   
<script type="text/javascript">
        $(document).ready(function(){
            $('.delete').click(function(){
                var el = this;
                var deleteid = $(this).data('id');
                var confirmalert = confirm("Are you sure?");
                if (confirmalert == true) {
                  $.ajax({
                    url: 'delete-prodcut_faq.php',
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
<script>
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;

return true;
}
</script>
<script>
$(function(){
$('#addMore1').on('click', function() {
var data = $("#tb1 tr:eq(1)").clone(true).appendTo("#tb1");
data.find("input").val('');
});
$(document).on('click', '.remove1', function() {
var trIndex = $(this).closest("tr").index();
if(trIndex>1) {
$(this).closest("tr").remove();
} else {
alert("Sorry!! Can't remove first row!");
}
});
});      
</script>  
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<?php include 'footer.php'?>
