<?php include 'includes/session.php'; ?>
<?php
  $where = '';
  if(isset($_GET['category'])){
    $catid = $_GET['category'];
    $where = 'WHERE category_id ='.$catid;
  }

?>
<?php include 'header.php'?>
<?php include 'left-menu.php'?>
      <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                           <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Pending Product</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Pending Product</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                                <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                     <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                               <!--  <div class="col-sm-12 col-md-6">
                                    <div class="dt-buttons btn-group flex-wrap">
                                         <a href="#add" class="btn btn-danger buttons-html5" data-bs-toggle="offcanvas"><i class="mdi mdi-plus-circle me-2"></i>Add User</a>
                                    </div>
                                </div> -->
                                <div class="col-sm-12 col-md-6">
                                    <div id="datatable-buttons_filter" class="dataTables_filter">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1244px;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 199.4px;" aria-sort="ascending" aria-label="srno: activate to sort column descending">Sr No</th>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 199.4px;" aria-sort="ascending" aria-label="srno: activate to sort column descending">Product Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 146.4px;" aria-label="Name: activate to sort column ascending">Main Category</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 73.4px;" aria-label="contact: activate to sort column ascending">Product View </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 139.4px;" aria-label="Email: activate to sort column ascending">Date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 125.4px;" aria-label="Status: activate to sort column ascending">Status</th>
                                                     <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 125.4px;" aria-label="Action: activate to sort column ascending">Action</th>
                                                </tr>
                                            </thead>
                                         <tbody>
                                              <?php
                    $conn = $pdo->open();

                    try{
                      $now = date('Y-m-d');
                      $stmt = $conn->prepare("select products.*,products.id,category.name as cat_name,category.id as category_id,brand.brand as brand from products join category on category.id=products.category_id join brand on brand.id=products.brand_id where products.status='pending' Order By created_on DESC");
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/noimage.jpg';
                        $counter = ($row['date_view'] == $now) ? $row['counter'] : 0;
                        $status = ($row['status']) ? '<span class="label label-success">active</span>' : '<span class="label label-danger">not verified</span>';
                        $active = (!$row['status']) ? '<span class="pull-right"><a href="#activate" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="fa fa-check-square-o"></i></a></span>' : '';
                        ?>
                        
                                                 <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0"><?php echo $row['id'];?></td>
                                                    <td> <?php echo mb_strimwidth($row['name'], 0, 20, "..."); ?> </td>
                                                     <td> <?php echo mb_strimwidth($row['cat_name'], 0, 20, "..."); ?> <br>
                                                        Brand : <small class="text-muted"> <?php echo mb_strimwidth($row['brand'], 0, 20, "..."); ?></small></td>
                                                    <td> <?php echo $counter  ;?></td>
                                                    <td>  <?php echo $row['created_on'];?></td>
                                                    <td> <span class="badge badge-soft-success status" > <?php echo $row['status'];?></span></td>
                                                   
                                                     <td>
                                                        
                                            <div class="dropdown">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->

                                               
                                                <a href="edit-product.php?id=<?php echo $row['id'];?>" class="dropdown-item"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit</a>

                                                 <a href="add-images.php?id=<?php echo $row['id'];?>" class="dropdown-item"><i class="mdi mdi-image me-2 text-muted font-18 vertical-middle"></i></i>Add Images</a>

                                                 <a href="add-prices.php?id=<?php echo $row['id'];?>" class="dropdown-item"><i class="mdi mdi-eye me-2 text-muted font-18 vertical-middle"></i>Add Prices</a>

                                                  <a href="add-distributor-prices.php?id=<?php echo $row['id'];?>" class="dropdown-item"><i class="mdi mdi-eye me-2 text-muted font-18 vertical-middle"></i>Distributor Prices</a>
                                                 
                                                   <a href="edit-specification.php?id=<?php echo $row['id'];?>" class="dropdown-item"><i class="mdi mdi-eye me-2 text-muted font-18 vertical-middle"></i>Add Specifications</a>
                                                   
                                                   <a href="edit-feature.php?id=<?php echo $row['id'];?>" class="dropdown-item "><i class="mdi mdi-eye me-2 text-muted font-18 vertical-middle"></i>Add Key Features</a>

                                                   <a href="edit-faq.php?id=<?php echo $row['id'];?>" class="dropdown-item"><i class="mdi mdi-eye me-2 text-muted font-18 vertical-middle"></i>Add Faq</a>
                                                   
                                                 <!-- item-->
                                                  <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#type" data-id="<?php echo $row['id'];?>" class="dropdown-item status"><i class="mdi mdi-plus-circle me-2 text-muted font-18 vertical-middle"></i></i>Product Type</a>

                                                   <!-- item-->
                                                  <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#pending" data-id="<?php echo $row['id'];?>" class="dropdown-item status"><i class="mdi mdi-plus-circle me-2 text-muted font-18 vertical-middle"></i></i>Change Status</a>
                                               
                                                <!-- item-->
                                                <a href="javascript:void(0);" data-bs-toggle="modal"  data-id="<?php echo $row['id'];?>" data-bs-target="#delete" class="dropdown-item delete" style= "color: #c81515;"><i class="mdi mdi-delete me-2 font-18 vertical-middle" style="color: #c81515;"></i>Delete</a>
                                            </div>
                                        </div>
                                        </td>
                                                </tr>
                                                  <?php
                                              }
                                            }
                                            catch(PDOException $e){
                                              echo $e->getMessage();
                                            }

                                            $pdo->close();
                                          ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
     
                             
                            </div>
                         </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
           
     </div>
<?php include 'pending-product-popup.php'?>
<?php include 'footer.php'?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#active-product').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });
  
$(document).on('click', '.status', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

$(document).on('click', '.type', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

$(document).on('click', '.specification', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });
  $(document).on('click', '.desc', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $('#select_category').change(function(){
    var val = $(this).val();
    if(val == 0){
      window.location = 'products.php';
    }
    else{
      window.location = 'products.php?category='+val;
    }
  });



  $('#addproduct').click(function(e){
    e.preventDefault();
    getCategory();
  });

  $("#addnew").on("hidden.bs.modal", function () {
      $('.append_items').remove();
  });

  $("#edit").on("hidden.bs.modal", function () {
      $('.append_items').remove();
  });


});
function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'products_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#desc').html(response.description);
      $('.name').html(response.prodname);
      $('.prodid').val(response.prodid);
      $('#edit_name').val(response.prodname);
      $('#edit_hsn').val(response.prohsn);
      $('#edit_gst').val(response.progst);
      $('#edit_spec').val(response.spec1);
      $('#edit_shipping').val(response.proshipping_charges);
      $('#catselected').val(response.category_id).html(response.catname);
      $('#edit_price').val(response.price);
       $('#edit_description').val(response.description);
   //  CKEDITOR.instances["editor2"].setData(response.description);
      getCategory();
    }
  });
}
function getCategory(){
  $.ajax({
    type: 'POST',
    url: 'category_fetch.php',
    dataType: 'json',
    success:function(response){
      $('#category').append(response);
      $('#edit_category').append(response);
    }
  });
}
</script>
