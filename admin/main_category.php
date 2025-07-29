<?php include 'includes/session.php'; ?>
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
                                    <li class="breadcrumb-item active">Main Category</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Main Category</h4>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dt-buttons btn-group flex-wrap">
                                                 <a href="#addnew" class="btn btn-danger buttons-html5" data-bs-toggle="offcanvas"><i class="mdi mdi-plus-circle me-2"></i>Add Main Category</a>
                                            </div>
                                        </div>
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
                                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 199.4px;" aria-sort="ascending" aria-label="Main Category: activate to sort column descending">Main Category</th>
                                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 199.4px;" aria-sort="ascending" aria-label="thumbnail: activate to sort column descending">thumbnail</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 146.4px;" aria-label="Name: activate to sort column ascending">Created Date</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 125.4px;" aria-label="Status: activate to sort column ascending">Status</th>
                                                     <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 125.4px;" aria-label="Action: activate to sort column ascending">Action</th>
                                                </tr>
                                            </thead>
                                         <tbody>
                                            <?php
                                                $conn = $pdo->open();

                                                try{
                                                  $stmt = $conn->prepare("SELECT * FROM main_category Order By creation_on DESC");
                                                  $cnt=1;
                                                  $stmt->execute();
                                                  foreach($stmt as $row){
                                            ?>
                                            <tr class="odd">
                                                <td><?php echo htmlentities($cnt++);?></td>
                                                <td title="<?php echo $row['main_category'];?>"><?php echo mb_strimwidth($row['main_category'], 0, 25, "..."); ?></td>
                                                <td><img src="category/<?php echo $row['thumbnail'];?>" width="40"></td>
                                                <td><?php echo $row['creation_on'];?></td>
                                                <td><span class="badge badge-soft-success"><?php echo $row['status'];?></span></td>
                                                <td>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item edit" data-bs-toggle="offcanvas" data-bs-target="#edit" data-id="<?php echo $row['id'];?>"> <i class="mdi mdi-square-edit-outline me-2 text-muted font-18 vertical-middle"></i>Edit</a>
                                                        <a href="javascript:void(0);" class="dropdown-item edit_thumb" data-bs-toggle="offcanvas" data-bs-target="#edit_thumb" data-id="<?php echo $row['id'];?>"> <i class="mdi mdi-image me-2 text-muted font-18 vertical-middle"></i>Edit Thumbnail</a>
                                                        <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#activate" data-id="<?php echo $row['id'];?>" class="dropdown-item status"><i class="mdi mdi-plus-circle me-2 text-muted font-18 vertical-middle"></i></i>Change Status</a>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete"data-id="<?php echo $row['id'];?>" class="dropdown-item delete" style= "color: #c81515;"><i class="mdi mdi-delete me-2 font-18 vertical-middle" style= "color: #c81515;" ></i>Delete</a>
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
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
            </div> <!-- container -->
        </div> <!-- content -->
    </div>
<?php include 'main_category_popup.php'?>
<?php include 'footer.php'?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#active').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
  

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

    $(document).on('click', '.image', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.status', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });
  
  $(document).on('click', '.edit_thumb', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });
});
function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'main_category_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.catid').val(response.id);
      $('.edit_main_category').val(response.main_category);
      $('.catname').html(response.name);
    }
  });
}
</script>
